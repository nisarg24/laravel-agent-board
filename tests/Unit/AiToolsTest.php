<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Tests\Unit;

use DevBridge\AgentBoard\Services\AI\Tools\ReadFileTool;
use DevBridge\AgentBoard\Services\AI\Tools\RunShellCommandTool;
use DevBridge\AgentBoard\Services\AI\Tools\SearchCodebaseTool;
use DevBridge\AgentBoard\Services\AI\Tools\WriteFileTool;
use PHPUnit\Framework\TestCase;

final class AiToolsTest extends TestCase {
    private string $tmpDir;

    protected function setUp(): void {
        $this->tmpDir = sys_get_temp_dir() . '/agent-board-test-' . uniqid();
        mkdir($this->tmpDir, 0755, true);
    }

    protected function tearDown(): void {
        $this->deleteDirectory($this->tmpDir);
    }

    private function deleteDirectory(string $dir): void {
        if (! is_dir($dir)) {
            return;
        }

        foreach (scandir($dir) as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $path = $dir . DIRECTORY_SEPARATOR . $item;

            if (is_dir($path)) {
                $this->deleteDirectory($path);
            } else {
                unlink($path);
            }
        }

        rmdir($dir);
    }

    private function config(): array {
        return ['workspace_path' => $this->tmpDir];
    }

    public function test_read_file_returns_content_for_existing_file(): void {
        file_put_contents($this->tmpDir . '/hello.txt', 'Hello, World!');

        $tool = new ReadFileTool($this->config());
        $result = $tool->execute(['path' => 'hello.txt']);

        $this->assertSame('Hello, World!', $result['content']);
        $this->assertSame('hello.txt', $result['path']);
    }

    public function test_read_file_returns_error_for_missing_file(): void {
        $tool = new ReadFileTool($this->config());
        $result = $tool->execute(['path' => 'nonexistent.txt']);

        $this->assertArrayHasKey('error', $result);
        $this->assertStringContainsString('not found', $result['error']);
    }

    public function test_read_file_blocks_path_traversal(): void {
        $tool = new ReadFileTool($this->config());
        $result = $tool->execute(['path' => '../../etc/passwd']);

        $this->assertArrayHasKey('error', $result);
        $this->assertStringContainsString('outside allowed workspace', $result['error']);
    }

    public function test_read_file_has_correct_schema(): void {
        $tool = new ReadFileTool($this->config());
        $schema = $tool->getSchema();

        $this->assertSame('object', $schema['type']);
        $this->assertArrayHasKey('path', $schema['properties']);
        $this->assertContains('path', $schema['required']);
    }

    public function test_write_file_creates_new_file(): void {
        $tool = new WriteFileTool($this->config());
        $result = $tool->execute(['path' => 'new-file.php', 'content' => '<?php echo "hi";']);

        $this->assertTrue($result['success']);
        $this->assertFileExists($this->tmpDir . '/new-file.php');
        $this->assertSame('<?php echo "hi";', file_get_contents($this->tmpDir . '/new-file.php'));
    }

    public function test_write_file_creates_nested_directories(): void {
        $tool = new WriteFileTool($this->config());
        $result = $tool->execute(['path' => 'src/Models/User.php', 'content' => '<?php class User {}']);

        $this->assertTrue($result['success']);
        $this->assertFileExists($this->tmpDir . '/src/Models/User.php');
    }

    public function test_write_file_reports_bytes_written(): void {
        $content = 'Hello World';
        $tool = new WriteFileTool($this->config());
        $result = $tool->execute(['path' => 'bytes-test.txt', 'content' => $content]);

        $this->assertSame(strlen($content), $result['bytes']);
    }

    public function test_shell_tool_blocks_disallowed_commands(): void {
        $tool = new RunShellCommandTool($this->config());
        $result = $tool->execute(['command' => 'rm -rf /']);

        $this->assertArrayHasKey('error', $result);
        $this->assertStringContainsString('not in the allowed list', $result['error']);
    }

    public function test_shell_tool_blocks_dangerous_patterns(): void {
        $tool = new RunShellCommandTool($this->config());
        $result = $tool->execute(['command' => 'php -r "system(\'ls\');"']);

        $this->assertArrayHasKey('error', $result);
        $this->assertFalse($result['success']);
    }

    public function test_all_tools_implement_required_interface_methods(): void {
        $tools = [
            new ReadFileTool($this->config()),
            new WriteFileTool($this->config()),
            new RunShellCommandTool($this->config()),
            new SearchCodebaseTool($this->config()),
        ];

        foreach ($tools as $tool) {
            $this->assertIsString($tool->getName(), get_class($tool) . '::getName() must return string');
            $this->assertIsString($tool->getDescription(), get_class($tool) . '::getDescription() must return string');
            $this->assertIsArray($tool->getSchema(), get_class($tool) . '::getSchema() must return array');
            $this->assertNotEmpty($tool->getName());
            $this->assertNotEmpty($tool->getDescription());
        }
    }
}

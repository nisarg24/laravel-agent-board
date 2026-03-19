@extends('agent-board::layouts.app')

@section('title', 'Settings')
@section('page-title', 'Settings')
@section('page-subtitle', 'Configure providers, AI engine & tool permissions')

@push('styles')
<style>
    .settings-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; max-width: 980px; }
    @media(max-width: 720px) { .settings-layout { grid-template-columns: 1fr; } }

    /* ── Card ─────────────────────────────────── */
    .s-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        overflow: hidden;
    }
    .s-card-head {
        padding: 14px 18px;
        border-bottom: 1px solid var(--border);
        display: flex; align-items: center; justify-content: space-between;
    }
    .s-card-title { font-weight: 700; font-size: 13px; display: flex; align-items: center; gap: 8px; }
    .s-card-body  { padding: 18px; display: flex; flex-direction: column; gap: 14px; }

    /* ── Form controls ───────────────────────── */
    .field { display: flex; flex-direction: column; gap: 5px; }
    .field-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; }
    .field-hint  { font-size: 11px; color: var(--text-dim); margin-top: 2px; }

    .f-input, .f-select {
        background: var(--bg);
        border: 1px solid var(--border);
        color: var(--text);
        padding: 8px 11px;
        border-radius: var(--r);
        font-family: var(--font);
        font-size: 13px;
        outline: none;
        transition: border-color .12s;
        width: 100%;
    }
    .f-input:focus, .f-select:focus { border-color: var(--accent); }
    .f-input::placeholder { color: var(--text-dim); }
    .f-select { appearance: none; cursor: pointer; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 5 5-5' stroke='%236b7280' fill='none' stroke-width='1.5'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 11px center; padding-right: 28px; }

    /* ── Toggle row ──────────────────────────── */
    .toggle-row {
        display: flex; align-items: center; justify-content: space-between;
        padding: 10px 0; border-bottom: 1px solid var(--border);
    }
    .toggle-row:last-child { border-bottom: none; padding-bottom: 0; }
    .toggle-info-label { font-size: 13px; font-weight: 500; }
    .toggle-info-hint  { font-size: 11px; color: var(--text-muted); margin-top: 1px; }

    .toggle-switch {
        position: relative; width: 38px; height: 22px; flex-shrink: 0;
        background: var(--border); border-radius: 11px; cursor: pointer;
        transition: background .15s;
    }
    .toggle-switch.on { background: var(--accent); }
    .toggle-switch::after {
        content: ''; position: absolute;
        top: 3px; left: 3px;
        width: 16px; height: 16px;
        background: #fff; border-radius: 50%;
        transition: transform .15s;
        box-shadow: 0 1px 3px rgba(0,0,0,.3);
    }
    .toggle-switch.on::after { transform: translateX(16px); }

    /* ── Test connection ─────────────────────── */
    .test-result {
        font-size: 12px; padding: 8px 12px; border-radius: 6px; margin-top: 4px;
        display: none;
    }
    .test-result.show { display: block; }
    .test-result.ok  { background: #22c55e10; border: 1px solid #22c55e30; color: var(--green); }
    .test-result.err { background: #ef444410; border: 1px solid #ef444430; color: var(--red);   }

    /* ── ENV hint block ──────────────────────── */
    .env-block {
        background: var(--bg);
        border: 1px solid var(--border);
        border-radius: var(--r);
        padding: 14px;
        font-family: var(--mono);
        font-size: 11px;
        color: var(--text-muted);
        line-height: 2;
        white-space: pre;
        overflow-x: auto;
        max-width: 980px;
        margin-top: 18px;
    }
    .env-block .key   { color: var(--accent); }
    .env-block .val   { color: var(--green); }
    .env-block .cmt   { color: var(--text-dim); }

    /* ── Save bar ────────────────────────────── */
    .save-bar {
        position: sticky; bottom: 0;
        background: var(--bg);
        border-top: 1px solid var(--border);
        padding: 14px 22px;
        display: flex; gap: 10px; justify-content: flex-end;
        margin: 20px -22px -22px;
    }
</style>
@endpush

@section('content')

<form id="settings-form">
@csrf

<div class="settings-layout">

    {{-- ── JIRA ──────────────────────────────────────────────────────────── --}}
    <div class="s-card">
        <div class="s-card-head">
            <div class="s-card-title">🔵 JIRA</div>
            <button type="button" class="btn btn-ghost btn-sm" onclick="testConn('jira')">Test Connection</button>
        </div>
        <div class="s-card-body">
            <div id="jira-result" class="test-result"></div>

            <div class="field">
                <label class="field-label">Base URL</label>
                <input class="f-input" type="url" name="providers[jira][base_url]"
                    placeholder="https://yourorg.atlassian.net"
                    value="{{ $config['providers']['jira']['base_url'] ?? '' }}">
            </div>
            <div class="field">
                <label class="field-label">Email</label>
                <input class="f-input" type="email" name="providers[jira][email]"
                    placeholder="you@company.com"
                    value="{{ $config['providers']['jira']['email'] ?? '' }}">
            </div>
            <div class="field">
                <label class="field-label">API Token</label>
                <input class="f-input" type="password" name="providers[jira][api_token]"
                    placeholder="{{ $config['providers']['jira']['api_token'] ?? '••••••••' }}">
                <div class="field-hint">
                    Get yours at <a href="https://id.atlassian.com/manage-profile/security/api-tokens"
                    target="_blank" style="color:var(--accent)">Atlassian → API Tokens</a>.
                    Stored encrypted in the database.
                </div>
            </div>
        </div>
    </div>

    {{-- ── Confluence ─────────────────────────────────────────────────────── --}}
    <div class="s-card">
        <div class="s-card-head">
            <div class="s-card-title">🟣 Confluence</div>
            <button type="button" class="btn btn-ghost btn-sm" onclick="testConn('confluence')">Test Connection</button>
        </div>
        <div class="s-card-body">
            <div id="confluence-result" class="test-result"></div>

            <div class="field">
                <label class="field-label">Base URL</label>
                <input class="f-input" type="url" name="providers[confluence][base_url]"
                    placeholder="https://yourorg.atlassian.net/wiki"
                    value="{{ $config['providers']['confluence']['base_url'] ?? '' }}">
            </div>
            <div class="field">
                <label class="field-label">Email</label>
                <input class="f-input" type="email" name="providers[confluence][email]"
                    placeholder="you@company.com"
                    value="{{ $config['providers']['confluence']['email'] ?? '' }}">
            </div>
            <div class="field">
                <label class="field-label">API Token</label>
                <input class="f-input" type="password" name="providers[confluence][api_token]"
                    placeholder="{{ $config['providers']['confluence']['api_token'] ?? '••••••••' }}">
                <div class="field-hint">Stored encrypted in the database.</div>
            </div>
        </div>
    </div>

    {{-- ── AI Engine ───────────────────────────────────────────────────────── --}}
    <div class="s-card">
        <div class="s-card-head">
            <div class="s-card-title">🤖 AI Engine</div>
        </div>
        <div class="s-card-body">
            <div class="field">
                <label class="field-label">AI Driver</label>
                <select class="f-select" name="ai[driver]" onchange="switchDriver(this.value)">
                    <option value="openai"    {{ ($config['ai']['driver'] ?? '') === 'openai'    ? 'selected' : '' }}>OpenAI</option>
                    <option value="anthropic" {{ ($config['ai']['driver'] ?? '') === 'anthropic' ? 'selected' : '' }}>Anthropic (Claude)</option>
                </select>
            </div>

            <div id="openai-cfg">
                <div class="field" style="margin-bottom:12px">
                    <label class="field-label">OpenAI API Key</label>
                    <input class="f-input" type="password" name="ai[openai][api_key]"
                        placeholder="{{ $config['ai']['openai']['api_key'] ?? 'sk-...' }}">
                </div>
                <div class="field">
                    <label class="field-label">Model</label>
                    <select class="f-select" name="ai[openai][model]">
                        @foreach(['gpt-4o','gpt-4o-mini','gpt-4-turbo','gpt-3.5-turbo'] as $m)
                            <option {{ ($config['ai']['openai']['model'] ?? 'gpt-4o') === $m ? 'selected' : '' }}>{{ $m }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div id="anthropic-cfg" style="display:none">
                <div class="field" style="margin-bottom:12px">
                    <label class="field-label">Anthropic API Key</label>
                    <input class="f-input" type="password" name="ai[anthropic][api_key]"
                        placeholder="{{ $config['ai']['anthropic']['api_key'] ?? 'sk-ant-...' }}">
                </div>
                <div class="field">
                    <label class="field-label">Model</label>
                    <select class="f-select" name="ai[anthropic][model]">
                        @foreach(['claude-opus-4-6','claude-sonnet-4-6','claude-haiku-4-5-20251001'] as $m)
                            <option {{ ($config['ai']['anthropic']['model'] ?? 'claude-opus-4-6') === $m ? 'selected' : '' }}>{{ $m }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- ── AI Tool Permissions ──────────────────────────────────────────────── --}}
    <div class="s-card">
        <div class="s-card-head">
            <div class="s-card-title">🔧 AI Tool Permissions</div>
        </div>
        <div class="s-card-body">
            @foreach([
                ['read_file',         'Read Files',          'Agent can read project source files'],
                ['write_file',        'Write Files',         'Agent can create and modify files'],
                ['search_codebase',   'Search Codebase',     'Agent can grep and search project code'],
                ['run_shell_command', 'Run Shell Commands',  'php, composer, npm, git only — use caution'],
            ] as [$key, $label, $hint])
                @php $enabled = $config['ai']['tools'][$key] ?? false; @endphp
                <div class="toggle-row">
                    <div>
                        <div class="toggle-info-label">{{ $label }}</div>
                        <div class="toggle-info-hint">{{ $hint }}</div>
                    </div>
                    <div class="toggle-switch {{ $enabled ? 'on' : '' }}"
                         id="sw-{{ $key }}"
                         onclick="toggleTool('{{ $key }}')">
                    </div>
                    <input type="hidden" name="ai[tools][{{ $key }}]"
                           id="inp-{{ $key }}" value="{{ $enabled ? '1' : '0' }}">
                </div>
            @endforeach
        </div>
    </div>

</div>

{{-- .env reference ──────────────────────────────────────────────────────── --}}
<div style="margin-top:20px;max-width:980px;">
    <div style="font-size:12px;color:var(--text-muted);margin-bottom:8px;">
        📋 Required <code style="color:var(--accent);font-family:var(--mono)">.env</code> variables
    </div>
    <div class="env-block"><span class="cmt"># Provider</span>
<span class="key">AGENT_BOARD_PROVIDER</span>=<span class="val">jira</span>
<span class="key">AGENT_BOARD_ENABLED</span>=<span class="val">jira,confluence</span>

<span class="cmt"># JIRA</span>
<span class="key">JIRA_BASE_URL</span>=<span class="val">https://yourorg.atlassian.net</span>
<span class="key">JIRA_EMAIL</span>=<span class="val">you@company.com</span>
<span class="key">JIRA_API_TOKEN</span>=<span class="val">your-token-here</span>

<span class="cmt"># Confluence</span>
<span class="key">CONFLUENCE_BASE_URL</span>=<span class="val">https://yourorg.atlassian.net/wiki</span>
<span class="key">CONFLUENCE_EMAIL</span>=<span class="val">you@company.com</span>
<span class="key">CONFLUENCE_API_TOKEN</span>=<span class="val">your-token-here</span>

<span class="cmt"># AI</span>
<span class="key">AGENT_BOARD_AI_DRIVER</span>=<span class="val">openai</span>
<span class="key">OPENAI_API_KEY</span>=<span class="val">sk-...</span>
<span class="key">ANTHROPIC_API_KEY</span>=<span class="val">sk-ant-...</span>

<span class="cmt"># Queue</span>
<span class="key">AGENT_BOARD_QUEUE_NAME</span>=<span class="val">agent-tasks</span></div>
</div>

<div class="save-bar">
    <button type="button" class="btn btn-ghost" onclick="location.reload()">Discard</button>
    <button type="submit" class="btn btn-primary">Save Settings</button>
</div>
</form>

@endsection

@push('scripts')
<script>
document.getElementById('settings-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    Spinner.show('Saving settings...');
    const formData = new FormData(e.target);
    const body     = {};
    formData.forEach((v, k) => { body[k] = v; });

    try {
        const data = await apiPost('/agent-board/settings', body);
        Spinner.hide();
        data.success
            ? toast('Settings saved successfully.', 'success')
            : toast(data.message || 'Save failed.', 'error');
    } catch (err) {
        Spinner.hide();
        toast(err.message, 'error');
    }
});

async function testConn(provider) {
    const el = document.getElementById(`${provider}-result`);
    el.className = 'test-result show';
    el.textContent = '⟳ Testing connection...';
    el.style.color = 'var(--text-muted)';

    try {
        const res  = await fetch(`/agent-board/settings/test/${provider}`, {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
        });
        const data = await res.json();
        el.className = `test-result show ${data.success ? 'ok' : 'err'}`;
        el.textContent = data.success ? `✓ ${data.message}` : `✗ ${data.message}`;
    } catch (err) {
        el.className = 'test-result show err';
        el.textContent = `✗ ${err.message}`;
    }
}

function switchDriver(driver) {
    document.getElementById('openai-cfg').style.display    = driver === 'openai'    ? 'block' : 'none';
    document.getElementById('anthropic-cfg').style.display = driver === 'anthropic' ? 'block' : 'none';
}

function toggleTool(key) {
    const sw  = document.getElementById(`sw-${key}`);
    const inp = document.getElementById(`inp-${key}`);
    const on  = sw.classList.contains('on');
    sw.classList.toggle('on', !on);
    inp.value = on ? '0' : '1';
}

// Init
switchDriver(document.querySelector('[name="ai[driver]"]')?.value || 'openai');
</script>
@endpush

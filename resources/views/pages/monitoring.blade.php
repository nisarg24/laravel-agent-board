@extends('agent-board::layouts.app')

@section('title', 'Monitoring')
@section('page-title', 'Monitoring')
@section('page-subtitle', 'Agent activity, costs & system health')

@push('styles')
<style>
    /* ── Monitoring grid ─────────────────────── */
    .mon-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 12px;
        margin-bottom: 22px;
    }

    .mon-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        padding: 16px 18px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }
    .mon-card-label { font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: var(--text-muted); }
    .mon-card-value { font-size: 28px; font-weight: 700; font-family: var(--mono); line-height: 1.1; }
    .mon-card-sub   { font-size: 12px; color: var(--text-muted); margin-top: 2px; }

    /* ── Two-column layout ───────────────────── */
    .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 22px; }
    @media(max-width: 900px) { .two-col { grid-template-columns: 1fr; } }

    /* ── Panel ───────────────────────────────── */
    .panel {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        overflow: hidden;
    }
    .panel-head {
        padding: 13px 18px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .panel-title { font-size: 13px; font-weight: 700; display: flex; align-items: center; gap: 7px; }
    .panel-body  { padding: 0; }

    /* ── Agent log table ─────────────────────── */
    .log-table { width: 100%; border-collapse: collapse; font-size: 12px; }
    .log-table th {
        text-align: left;
        padding: 9px 16px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        color: var(--text-dim);
        border-bottom: 1px solid var(--border);
        background: var(--bg);
    }
    .log-table td {
        padding: 9px 16px;
        border-bottom: 1px solid var(--border);
        vertical-align: middle;
    }
    .log-table tr:last-child td { border-bottom: none; }
    .log-table tr:hover td { background: var(--bg-hover); }

    .status-badge {
        display: inline-flex; align-items: center; gap: 5px;
        font-size: 11px; font-weight: 600; padding: 2px 8px;
        border-radius: 4px;
    }
    .status-completed { background: #22c55e12; color: var(--green);  border: 1px solid #22c55e30; }
    .status-failed    { background: #ef444412; color: var(--red);    border: 1px solid #ef444430; }
    .status-running   { background: #60a5fa12; color: var(--blue);   border: 1px solid #60a5fa30; }
    .status-pending   { background: #ffffff08; color: var(--text-muted); border: 1px solid var(--border); }

    .agent-tag { font-family: var(--mono); font-size: 11px; color: var(--accent); }
    .task-link { font-weight: 500; cursor: pointer; }
    .task-link:hover { color: var(--accent); }
    .conf-low  { color: var(--amber); font-weight: 600; }
    .conf-ok   { color: var(--text-muted); }

    /* ── Cost breakdown ──────────────────────── */
    .cost-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 18px;
        border-bottom: 1px solid var(--border);
        font-size: 13px;
    }
    .cost-row:last-child { border-bottom: none; }
    .cost-project { font-weight: 500; }
    .cost-bar-wrap { flex: 1; margin: 0 14px; height: 4px; background: var(--border); border-radius: 2px; overflow: hidden; }
    .cost-bar { height: 100%; background: var(--accent); border-radius: 2px; }
    .cost-amount { font-family: var(--mono); font-size: 12px; color: var(--text-muted); white-space: nowrap; }

    /* ── Circuit breaker ─────────────────────── */
    .circuit-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 12px; padding: 16px; }
    .circuit-card {
        background: var(--bg);
        border: 1px solid var(--border);
        border-radius: var(--r);
        padding: 14px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .circuit-card.open   { border-color: #ef444450; background: #ef444408; }
    .circuit-card.closed { border-color: #22c55e30; }

    .circuit-name   { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
    .circuit-status { font-size: 11px; font-weight: 700; display: flex; align-items: center; gap: 5px; }
    .circuit-open   { color: var(--red); }
    .circuit-closed { color: var(--green); }
    .circuit-failures { font-size: 11px; color: var(--text-muted); font-family: var(--mono); }

    /* ── Period selector ─────────────────────── */
    .period-tabs { display: flex; gap: 4px; }
    .period-tab {
        font-size: 11px; font-weight: 600; padding: 3px 10px;
        border-radius: 5px; border: 1px solid var(--border);
        background: transparent; color: var(--text-muted);
        cursor: pointer; font-family: var(--font);
        transition: all .1s;
    }
    .period-tab.active { border-color: var(--accent); color: var(--accent); background: var(--accent-glow); }
    .period-tab:hover:not(.active) { color: var(--text); border-color: var(--border-hi); }

    /* ── Empty state ─────────────────────────── */
    .empty-state { padding: 30px; text-align: center; color: var(--text-dim); font-size: 13px; }
</style>
@endpush

@section('topbar-actions')
    <div class="period-tabs">
        <button class="period-tab active" data-period="today" onclick="setPeriod('today', this)">Today</button>
        <button class="period-tab" data-period="week"  onclick="setPeriod('week', this)">Week</button>
        <button class="period-tab" data-period="month" onclick="setPeriod('month', this)">Month</button>
    </div>
    <button class="btn btn-ghost btn-sm" onclick="refreshAll()">⟳ Refresh</button>
@endsection

@section('content')

{{-- KPI strip --}}
<div class="mon-grid" id="kpi-grid">
    <div class="mon-card">
        <div class="mon-card-label">Total Runs</div>
        <div class="mon-card-value" id="kpi-total" style="color:var(--text)">{{ $stats['total'] }}</div>
        <div class="mon-card-sub">agent executions</div>
    </div>
    <div class="mon-card">
        <div class="mon-card-label">Succeeded</div>
        <div class="mon-card-value" id="kpi-ok" style="color:var(--green)">{{ $stats['succeeded'] }}</div>
        <div class="mon-card-sub">tasks completed</div>
    </div>
    <div class="mon-card">
        <div class="mon-card-label">Failed</div>
        <div class="mon-card-value" id="kpi-fail" style="color:var(--red)">{{ $stats['failed'] }}</div>
        <div class="mon-card-sub">need review</div>
    </div>
    <div class="mon-card">
        <div class="mon-card-label">Avg Confidence</div>
        <div class="mon-card-value" id="kpi-conf" style="color:var(--amber)">{{ $stats['avg_confidence'] }}</div>
        <div class="mon-card-sub">out of 1.00</div>
    </div>
    <div class="mon-card">
        <div class="mon-card-label">Monthly Cost</div>
        <div class="mon-card-value" id="kpi-cost" style="color:var(--teal)">${{ number_format($costSummary['monthly_cost_usd'], 4) }}</div>
        <div class="mon-card-sub">{{ number_format($costSummary['monthly_tokens']) }} tokens</div>
    </div>
    <div class="mon-card">
        <div class="mon-card-label">Cost / Task</div>
        <div class="mon-card-value" id="kpi-per-task" style="color:var(--text)">${{ number_format($costSummary['cost_per_task'], 4) }}</div>
        <div class="mon-card-sub">average this month</div>
    </div>
</div>

{{-- Agent logs + Cost breakdown --}}
<div class="two-col">

    {{-- Agent execution log --}}
    <div class="panel">
        <div class="panel-head">
            <div class="panel-title">◎ Recent Agent Runs</div>
        </div>
        <div class="panel-body">
            @if(count($recentRuns) > 0)
                <table class="log-table">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Task</th>
                            <th>Agent</th>
                            <th>Tokens</th>
                            <th>Conf.</th>
                        </tr>
                    </thead>
                    <tbody id="log-tbody">
                        @foreach($recentRuns as $run)
                            <tr>
                                <td>
                                    <span class="status-badge status-{{ $run->status }}">
                                        {{ match($run->status) {
                                            'completed' => '✓',
                                            'failed'    => '✗',
                                            'running'   => '⟳',
                                            default     => '○'
                                        } }}
                                        {{ $run->status }}
                                    </span>
                                </td>
                                <td>
                                    <div class="task-link" title="{{ $run->task_title }}">
                                        {{ Str::limit($run->task_title, 36) }}
                                    </div>
                                    <div style="font-size:10px;color:var(--text-dim);font-family:var(--mono)">{{ $run->task_id }}</div>
                                </td>
                                <td><span class="agent-tag">{{ Str::after($run->agent_id ?? '', ':') ?: $run->agent_id }}</span></td>
                                <td style="font-family:var(--mono);font-size:11px;color:var(--text-muted)">
                                    {{ $run->tokens_used ? number_format($run->tokens_used) : '—' }}
                                </td>
                                <td>
                                    <span class="{{ ($run->confidence_score ?? 1) < 0.7 ? 'conf-low' : 'conf-ok' }}">
                                        {{ $run->confidence_score ?? '—' }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state">No agent runs recorded yet.</div>
            @endif
        </div>
    </div>

    {{-- Cost by project --}}
    <div class="panel">
        <div class="panel-head">
            <div class="panel-title">💰 Cost by Project (this month)</div>
        </div>
        <div class="panel-body" id="cost-panel">
            @php $maxCost = collect($costSummary['by_project'])->max('cost') ?: 1; @endphp
            @forelse($costSummary['by_project'] as $row)
                <div class="cost-row">
                    <div class="cost-project" style="min-width:80px">{{ $row['project_id'] }}</div>
                    <div class="cost-bar-wrap">
                        <div class="cost-bar" style="width: {{ round(($row['cost'] / $maxCost) * 100) }}%"></div>
                    </div>
                    <div class="cost-amount">
                        ${{ number_format($row['cost'], 4) }}
                        <span style="color:var(--text-dim);font-size:10px;margin-left:4px">
                            {{ number_format($row['tokens'] / 1000, 1) }}k tok
                        </span>
                    </div>
                </div>
            @empty
                <div class="empty-state">No cost data yet.</div>
            @endforelse
        </div>
    </div>

</div>

{{-- Circuit breaker health --}}
<div class="panel">
    <div class="panel-head">
        <div class="panel-title">⚡ Circuit Breaker Status</div>
        <button class="btn btn-ghost btn-sm" onclick="refreshCircuits()">⟳ Refresh</button>
    </div>
    <div class="circuit-grid" id="circuit-grid">
        @foreach($circuitStatus as $service => $info)
            <div class="circuit-card {{ $info['status'] }}" id="circuit-{{ $service }}">
                <div class="circuit-name">{{ $service }}</div>
                <div class="circuit-status {{ $info['status'] === 'open' ? 'circuit-open' : 'circuit-closed' }}">
                    {{ $info['status'] === 'open' ? '✗ OPEN' : '✓ Closed' }}
                </div>
                <div class="circuit-failures">{{ $info['failures'] }} failure{{ $info['failures'] !== 1 ? 's' : '' }}</div>
                @if($info['status'] === 'open')
                    <button class="btn btn-danger btn-sm" onclick="resetCircuit('{{ $service }}')">Reset</button>
                @endif
            </div>
        @endforeach
    </div>
</div>

@endsection

@push('scripts')
<script>
let currentPeriod = 'month';

async function setPeriod(period, btn) {
    currentPeriod = period;
    document.querySelectorAll('.period-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    await refreshStats();
}

async function refreshStats() {
    try {
        const res  = await fetch(`/agent-board/monitoring/stats?period=${currentPeriod}`);
        const data = await res.json();
        const s    = data.stats;

        document.getElementById('kpi-total').textContent = s.total;
        document.getElementById('kpi-ok').textContent    = s.succeeded;
        document.getElementById('kpi-fail').textContent  = s.failed;
        document.getElementById('kpi-conf').textContent  = s.avg_confidence;

        renderLogTable(data.recent_runs || []);
    } catch { /* silent */ }
}

function renderLogTable(runs) {
    const icons  = { completed: '✓', failed: '✗', running: '⟳', pending: '○' };
    const tbody  = document.getElementById('log-tbody');
    if (! tbody) return;

    tbody.innerHTML = runs.slice(0, 20).map(r => `
        <tr>
            <td><span class="status-badge status-${r.status}">${icons[r.status] || '○'} ${r.status}</span></td>
            <td>
                <div class="task-link" title="${r.task_title}">${r.task_title?.substring(0, 36) || '—'}${(r.task_title?.length > 36) ? '…' : ''}</div>
                <div style="font-size:10px;color:var(--text-dim);font-family:var(--mono)">${r.task_id}</div>
            </td>
            <td><span class="agent-tag">${(r.agent_id || '').split(':')[1] || r.agent_id || '—'}</span></td>
            <td style="font-family:var(--mono);font-size:11px;color:var(--text-muted)">${r.tokens_used ? r.tokens_used.toLocaleString() : '—'}</td>
            <td><span class="${(r.confidence_score || 1) < 0.7 ? 'conf-low' : 'conf-ok'}">${r.confidence_score || '—'}</span></td>
        </tr>`
    ).join('');
}

async function refreshCircuits() {
    try {
        const res  = await fetch('/agent-board/monitoring/circuit-breaker');
        const data = await res.json();

        Object.entries(data).forEach(([service, info]) => {
            const card = document.getElementById(`circuit-${service}`);
            if (! card) return;
            card.className = `circuit-card ${info.status}`;
            card.querySelector('.circuit-status').textContent  = info.status === 'open' ? '✗ OPEN' : '✓ Closed';
            card.querySelector('.circuit-failures').textContent = `${info.failures} failure${info.failures !== 1 ? 's' : ''}`;
        });
    } catch { /* silent */ }
}

async function resetCircuit(service) {
    Spinner.show(`Resetting circuit for ${service}...`);
    try {
        const data = await apiPost(`/agent-board/monitoring/circuit-breaker/${service}/reset`);
        Spinner.hide();
        data.success
            ? toast(`Circuit reset for ${service}`, 'success')
            : toast(data.error || 'Reset failed', 'error');
        if (data.success) refreshCircuits();
    } catch (e) {
        Spinner.hide();
        toast(e.message, 'error');
    }
}

async function refreshAll() {
    await refreshStats();
    await refreshCircuits();
    toast('Monitoring refreshed', 'info');
}
</script>
@endpush

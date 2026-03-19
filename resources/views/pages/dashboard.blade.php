@extends('agent-board::layouts.app')

@section('title', 'Kanban Board')
@section('page-title', 'Kanban Board')
@section('page-subtitle', 'AI-powered task automation')

@push('styles')
<style>
    /* ── Toolbar ─────────────────────────────── */
    .toolbar {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .toolbar-select {
        background: var(--bg-card);
        border: 1px solid var(--border);
        color: var(--text);
        padding: 7px 12px;
        border-radius: var(--r);
        font-family: var(--font);
        font-size: 13px;
        outline: none;
        cursor: pointer;
        min-width: 180px;
        transition: border-color .12s;
    }
    .toolbar-select:focus { border-color: var(--accent); }
    .conn-status { font-size: 12px; display: flex; align-items: center; gap: 5px; }
    .conn-dot { width: 7px; height: 7px; border-radius: 50%; }
    .conn-dot.ok   { background: var(--green);  box-shadow: 0 0 6px var(--green); }
    .conn-dot.err  { background: var(--red); }
    .conn-dot.spin { background: var(--amber); animation: spin .8s linear infinite; }

    /* ── Stats strip ─────────────────────────── */
    .stats-row { display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap; }
    .stat-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        padding: 14px 18px;
        flex: 1;
        min-width: 110px;
        transition: border-color .15s;
    }
    .stat-card:hover { border-color: var(--border-hi); }
    .stat-value { font-size: 24px; font-weight: 700; line-height: 1; margin-bottom: 3px; font-family: var(--mono); }
    .stat-label { font-size: 11px; color: var(--text-muted); font-weight: 500; letter-spacing: 0.4px; text-transform: uppercase; }

    /* ── Board layout ────────────────────────── */
    .board-wrap {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 12px;
    }

    .kanban-col {
        min-width: 238px;
        width: 238px;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
    }

    .col-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 9px 12px;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-bottom: 2px solid;
        border-radius: var(--r-lg) var(--r-lg) 0 0;
    }
    .col-name {
        display: flex; align-items: center; gap: 7px;
        font-size: 11px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;
    }
    .col-dot { width: 8px; height: 8px; border-radius: 50%; }
    .col-count {
        font-size: 11px; font-family: var(--mono);
        background: var(--bg-hover); color: var(--text-muted);
        padding: 1px 7px; border-radius: 10px;
    }

    .col-body {
        flex: 1;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-top: none;
        border-radius: 0 0 var(--r-lg) var(--r-lg);
        padding: 10px;
        min-height: 420px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    /* Sortable drag ghost */
    .sortable-ghost { opacity: .35; }
    .sortable-drag  { opacity: .9; cursor: grabbing !important; }

    /* ── Task cards ──────────────────────────── */
    .task-card {
        background: var(--bg);
        border: 1px solid var(--border);
        border-radius: var(--r);
        padding: 10px 12px;
        cursor: grab;
        transition: border-color .12s, transform .1s;
        position: relative;
    }
    .task-card:hover { border-color: var(--border-hi); transform: translateY(-1px); }
    .task-card.ai-assigned { border-left: 3px solid var(--purple); padding-left: 10px; }

    .task-card-top { display: flex; align-items: flex-start; justify-content: space-between; gap: 6px; margin-bottom: 7px; }
    .task-id { font-family: var(--mono); font-size: 10px; color: var(--text-dim); }
    .task-ai-badge { font-size: 11px; line-height: 1; }

    .task-title { font-size: 13px; font-weight: 500; line-height: 1.4; margin-bottom: 9px; }

    .task-foot { display: flex; align-items: center; gap: 6px; }
    .priority {
        font-size: 10px; font-weight: 700; padding: 2px 7px;
        border-radius: 4px; text-transform: uppercase; letter-spacing: 0.3px;
    }
    .priority-critical { background: #ef444415; color: var(--red);    border: 1px solid #ef444430; }
    .priority-high     { background: #f59e0b15; color: var(--amber);  border: 1px solid #f59e0b30; }
    .priority-medium   { background: #60a5fa15; color: var(--blue);   border: 1px solid #60a5fa30; }
    .priority-low      { background: #ffffff08; color: var(--text-muted); border: 1px solid var(--border); }

    .avatar {
        margin-left: auto; width: 22px; height: 22px; border-radius: 50%;
        background: var(--accent-glow); border: 1px solid var(--accent);
        display: flex; align-items: center; justify-content: center;
        font-size: 9px; font-weight: 700; color: var(--accent);
        flex-shrink: 0;
    }

    .btn-automate-card {
        margin-left: 4px;
        padding: 2px 7px;
        font-size: 10px;
        border-radius: 4px;
        border: 1px solid #6366f140;
        background: transparent;
        color: var(--accent);
        cursor: pointer;
        font-family: var(--font);
        font-weight: 600;
        transition: background .1s;
        white-space: nowrap;
    }
    .btn-automate-card:hover { background: var(--accent-glow); }

    .empty-col { flex: 1; display: flex; align-items: center; justify-content: center; color: var(--text-dim); font-size: 12px; min-height: 80px; }

    /* ── Activity feed ───────────────────────── */
    .page-grid { display: grid; grid-template-columns: 1fr 280px; gap: 16px; }
    @media (max-width: 1200px) { .page-grid { grid-template-columns: 1fr; } .feed-panel { display: none; } }

    .feed-panel {
        display: flex;
        flex-direction: column;
        gap: 0;
    }
    .feed-header {
        font-size: 12px; font-weight: 700; text-transform: uppercase;
        letter-spacing: 0.6px; color: var(--text-muted);
        padding: 0 0 10px;
        display: flex; align-items: center; gap: 7px;
    }
    .feed-live-dot { width: 7px; height: 7px; background: var(--green); border-radius: 50%; box-shadow: 0 0 6px var(--green); animation: blink 2s infinite; }
    @keyframes blink { 0%,100%{ opacity: 1; } 50%{ opacity: .4; } }

    .feed-list {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        overflow: hidden;
        flex: 1;
    }
    .feed-item {
        padding: 10px 14px;
        border-bottom: 1px solid var(--border);
        display: flex;
        flex-direction: column;
        gap: 3px;
    }
    .feed-item:last-child { border-bottom: none; }
    .feed-item-head { display: flex; align-items: center; gap: 6px; }
    .feed-status { font-size: 13px; line-height: 1; }
    .feed-agent { font-family: var(--mono); font-size: 10px; color: var(--accent); }
    .feed-task  { font-size: 12px; font-weight: 500; line-height: 1.3; }
    .feed-meta  { font-size: 11px; color: var(--text-muted); display: flex; gap: 8px; }
    .feed-tokens { font-family: var(--mono); }

    .feed-empty { padding: 30px; text-align: center; color: var(--text-dim); font-size: 12px; }

    /* ── Task detail modal ───────────────────── */
    .modal-backdrop {
        display: none;
        position: fixed; inset: 0;
        background: rgba(0,0,0,.75);
        z-index: 1000;
        align-items: center; justify-content: center;
    }
    .modal-backdrop.open { display: flex; }
    .modal {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--r-lg);
        padding: 26px;
        width: 500px;
        max-width: 96vw;
        max-height: 82vh;
        overflow-y: auto;
    }
    .modal-title { font-size: 16px; font-weight: 700; margin-bottom: 4px; }
    .modal-meta  { font-size: 11px; color: var(--text-muted); font-family: var(--mono); margin-bottom: 16px; }
    .modal-desc  { font-size: 13px; line-height: 1.7; color: var(--text); padding-top: 14px; border-top: 1px solid var(--border); margin-bottom: 18px; }
    .modal-actions { display: flex; gap: 8px; justify-content: flex-end; }

    /* ── Auto-refresh indicator ──────────────── */
    .refresh-badge {
        font-size: 11px;
        color: var(--text-dim);
        display: flex; align-items: center; gap: 4px;
    }
    .refresh-badge.ticking { color: var(--green); }
</style>
@endpush

@section('topbar-actions')
    <div class="refresh-badge" id="refresh-badge">⟳ auto-refresh off</div>
    <button class="btn btn-ghost btn-sm" onclick="syncBoard()">⟳ Refresh</button>
    <button class="btn btn-primary btn-pulse" onclick="runAutomation()">🤖 Run AI Agents</button>
@endsection

@section('content')

{{-- Toolbar --}}
<div class="toolbar">
    <select class="toolbar-select" id="sel-provider" onchange="loadProjects()">
        @foreach($providers as $p)
            <option value="{{ $p }}" {{ $p === $activeProvider ? 'selected' : '' }}>{{ strtoupper($p) }}</option>
        @endforeach
    </select>

    <select class="toolbar-select" id="sel-project" onchange="loadBoard()">
        <option value="">— Select project —</option>
    </select>

    <div class="conn-status">
        <div class="conn-dot spin" id="conn-dot"></div>
        <span id="conn-text" style="color:var(--text-muted)">Connecting...</span>
    </div>
</div>

{{-- Stats --}}
<div class="stats-row" id="stats-row">
    <div class="stat-card"><div class="stat-value" id="s-total"    style="color:var(--text)">—</div><div class="stat-label">Total Tasks</div></div>
    <div class="stat-card"><div class="stat-value" id="s-progress" style="color:var(--blue)">—</div><div class="stat-label">In Progress</div></div>
    <div class="stat-card"><div class="stat-value" id="s-ai"       style="color:var(--purple)">—</div><div class="stat-label">AI Completed</div></div>
    <div class="stat-card"><div class="stat-value" id="s-review"   style="color:var(--pink)">—</div><div class="stat-label">Dev Review</div></div>
    <div class="stat-card"><div class="stat-value" id="s-done"     style="color:var(--green)">—</div><div class="stat-label">Done</div></div>
</div>

{{-- Board + Feed --}}
<div class="page-grid">
    <div style="min-width:0; overflow: auto;">
        <div class="board-wrap" id="board">
            <div style="color:var(--text-muted);font-size:13px;padding:40px;align-self:center;">
                Select a project to load the board.
            </div>
        </div>
    </div>

    <div class="feed-panel">
        <div class="feed-header">
            <div class="feed-live-dot"></div> Agent Activity
        </div>
        <div class="feed-list" id="feed-list">
            <div class="feed-empty">No recent activity.</div>
        </div>
    </div>
</div>

{{-- Task modal --}}
<div class="modal-backdrop" id="task-modal" onclick="if(event.target===this)closeModal()">
    <div class="modal">
        <div class="modal-title" id="m-title">Task</div>
        <div class="modal-meta"  id="m-meta"></div>
        <div class="modal-desc"  id="m-desc"></div>
        <div class="modal-actions">
            <button class="btn btn-ghost" onclick="closeModal()">Close</button>
            <button class="btn btn-primary" id="m-automate">🤖 Automate</button>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
const COLS = [
    { key:'todo',             label:'To Do',            color:'#353c4a', textColor:'var(--text-muted)' },
    { key:'in_progress',      label:'In Progress',      color:'var(--blue)',   textColor:'var(--blue)' },
    { key:'in_review',        label:'In Review',        color:'var(--amber)',  textColor:'var(--amber)' },
    { key:'ai_completed',     label:'AI Completed',     color:'var(--purple)', textColor:'var(--purple)' },
    { key:'developer_review', label:'Developer Review', color:'var(--pink)',   textColor:'var(--pink)' },
    { key:'done',             label:'Done',             color:'var(--green)',  textColor:'var(--green)' },
];

let refreshTimer  = null;
let currentTask   = null;
const REFRESH_MS  = 30000;

// ── Bootstrap ───────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    loadProjects();
    loadFeed();
    startAutoRefresh();
});

// ── Provider / project ──────────────────────────────────────────────────────
const getProvider = () => document.getElementById('sel-provider').value;
const getProject  = () => document.getElementById('sel-project').value;

async function loadProjects() {
    const provider = getProvider();
    const sel = document.getElementById('sel-project');
    sel.innerHTML = '<option value="">Loading...</option>';
    setConn('spin', 'Connecting...');

    try {
        const res      = await fetch(`/agent-board/projects/${provider}`);
        const projects = await res.json();

        if (projects.error) throw new Error(projects.error);

        sel.innerHTML = '<option value="">— Select project —</option>';
        projects.forEach(p => {
            const opt = document.createElement('option');
            opt.value       = p.id;
            opt.textContent = `[${p.key}] ${p.name}`;
            sel.appendChild(opt);
        });

        setConn('ok', `Connected · ${projects.length} project${projects.length !== 1 ? 's' : ''}`);
    } catch (e) {
        sel.innerHTML = '<option value="">— Connection failed —</option>';
        setConn('err', e.message);
    }
}

async function loadBoard() {
    const projectId = getProject();
    const provider  = getProvider();

    if (! projectId) return;

    document.getElementById('board').innerHTML =
        '<div style="color:var(--text-muted);padding:40px;font-size:13px;">Loading board...</div>';

    try {
        const res  = await fetch(`/agent-board/kanban/${provider}/${projectId}`);
        const data = await res.json();

        if (data.error) throw new Error(data.error);

        renderBoard(data);
        updateStats(data);
    } catch (e) {
        document.getElementById('board').innerHTML =
            `<div style="color:var(--red);padding:40px;font-size:13px;">Error: ${e.message}</div>`;
    }
}

// ── Board rendering ─────────────────────────────────────────────────────────
function renderBoard(data) {
    const board = document.getElementById('board');
    board.innerHTML = '';

    COLS.forEach(col => {
        const tasks = data[col.key]?.tasks || [];
        const el    = document.createElement('div');
        el.className = 'kanban-col';
        el.innerHTML = `
            <div class="col-head" style="border-bottom-color:${col.color}">
                <div class="col-name" style="color:${col.textColor}">
                    <span class="col-dot" style="background:${col.color}"></span>
                    ${col.label}
                </div>
                <span class="col-count">${tasks.length}</span>
            </div>
            <div class="col-body" id="col-${col.key}" data-status="${col.key}">
                ${tasks.length === 0
                    ? '<div class="empty-col">No tasks</div>'
                    : tasks.map(t => cardHtml(t)).join('')
                }
            </div>`;
        board.appendChild(el);
    });

    // Attach SortableJS drag-drop to every column body
    document.querySelectorAll('.col-body').forEach(col => {
        Sortable.create(col, {
            group:     'kanban',
            animation: 140,
            ghostClass: 'sortable-ghost',
            dragClass:  'sortable-drag',
            onEnd(evt) {
                const taskId    = evt.item.dataset.taskId;
                const newStatus = evt.to.dataset.status;
                if (evt.from !== evt.to && taskId) {
                    moveTask(taskId, newStatus);
                }
            },
        });
    });
}

function cardHtml(task) {
    const initials = (task.assigneeName || 'U')
        .split(' ').map(w => w[0]).join('').slice(0, 2).toUpperCase();
    const isAI = !! task.aiAgentId;
    const p    = task.priority || 'medium';
    const enc  = JSON.stringify(task).replace(/"/g, '&quot;');

    return `
        <div class="task-card ${isAI ? 'ai-assigned' : ''}"
             data-task-id="${task.id}"
             onclick="openModal(${enc})">
            <div class="task-card-top">
                <span class="task-id">${task.id}</span>
                ${isAI ? '<span class="task-ai-badge" title="AI assigned">🤖</span>' : ''}
            </div>
            <div class="task-title">${task.title}</div>
            <div class="task-foot">
                <span class="priority priority-${p}">${p}</span>
                <button class="btn-automate-card"
                        onclick="event.stopPropagation(); automateTask(${enc})">
                    ⚡ Auto
                </button>
                <div class="avatar" title="${task.assigneeName}">${initials}</div>
            </div>
        </div>`;
}

function updateStats(data) {
    const count = k => data[k]?.tasks?.length || 0;
    const total = COLS.reduce((s, c) => s + count(c.key), 0);
    document.getElementById('s-total').textContent    = total;
    document.getElementById('s-progress').textContent = count('in_progress');
    document.getElementById('s-ai').textContent       = count('ai_completed');
    document.getElementById('s-review').textContent   = count('developer_review');
    document.getElementById('s-done').textContent     = count('done');
}

// ── Drag-drop move ──────────────────────────────────────────────────────────
async function moveTask(taskId, newStatus) {
    const provider = getProvider();
    try {
        const data = await apiPost(`/agent-board/tasks/${provider}/${taskId}/move`, {
            status: newStatus,
        });
        if (! data.success) toast('Could not move task: ' + (data.message || ''), 'error');
    } catch (e) {
        toast('Move failed: ' + e.message, 'error');
    }
}

// ── Modal ───────────────────────────────────────────────────────────────────
function openModal(task) {
    currentTask = task;
    document.getElementById('m-title').textContent =
        task.title;
    document.getElementById('m-meta').textContent  =
        `${task.id}  ·  ${task.projectName}  ·  ${(task.priority || 'medium').toUpperCase()}  ·  ${task.status}`;
    document.getElementById('m-desc').textContent  =
        task.description || 'No description provided.';
    document.getElementById('m-automate').onclick = () => {
        closeModal();
        automateTask(task);
    };
    document.getElementById('task-modal').classList.add('open');
}
function closeModal() {
    document.getElementById('task-modal').classList.remove('open');
    currentTask = null;
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

// ── Automation ──────────────────────────────────────────────────────────────
async function runAutomation() {
    Spinner.show('🤖 Dispatching AI agents to in-progress tasks...');
    try {
        const data = await apiPost('/agent-board/automate', { provider: getProvider() });
        Spinner.hide();
        if (data.success) {
            toast(`${data.message}`, 'success');
            setTimeout(() => { loadBoard(); loadFeed(); }, 1500);
        } else {
            toast(data.error || 'Automation failed', 'error');
        }
    } catch (e) {
        Spinner.hide();
        toast(e.message, 'error');
    }
}

async function automateTask(task) {
    Spinner.show(`Assigning agent to: ${task.title.substring(0, 40)}...`);
    try {
        const data = await apiPost(
            `/agent-board/automate/${getProvider()}/${task.id}`
        );
        Spinner.hide();
        data.success
            ? toast(`Task queued: ${task.id}`, 'success')
            : toast(data.error || 'Failed', 'error');
        if (data.success) setTimeout(() => { loadBoard(); loadFeed(); }, 1200);
    } catch (e) {
        Spinner.hide();
        toast(e.message, 'error');
    }
}

// ── Activity feed ───────────────────────────────────────────────────────────
async function loadFeed() {
    try {
        const res  = await fetch('/agent-board/monitoring/stats');
        const data = await res.json();
        renderFeed(data.recent_runs || []);
    } catch { /* silent */ }
}

function renderFeed(runs) {
    const list = document.getElementById('feed-list');
    if (! runs.length) {
        list.innerHTML = '<div class="feed-empty">No recent activity.</div>';
        return;
    }
    const icons = { completed: '✅', failed: '❌', running: '⟳', pending: '○' };
    list.innerHTML = runs.slice(0, 12).map(r => `
        <div class="feed-item">
            <div class="feed-item-head">
                <span class="feed-status">${icons[r.status] || '○'}</span>
                <span class="feed-agent">${(r.agent_id || '').split(':')[1] || r.agent_id}</span>
            </div>
            <div class="feed-task">${r.task_title}</div>
            <div class="feed-meta">
                <span>${r.project_id}</span>
                ${r.tokens_used ? `<span class="feed-tokens">${r.tokens_used.toLocaleString()} tok</span>` : ''}
                ${r.confidence_score < 1 ? `<span style="color:var(--amber)">conf ${r.confidence_score}</span>` : ''}
            </div>
        </div>
    `).join('');
}

// ── Auto-refresh ────────────────────────────────────────────────────────────
function startAutoRefresh() {
    const badge = document.getElementById('refresh-badge');
    refreshTimer = setInterval(() => {
        if (getProject()) loadBoard();
        loadFeed();
        badge.classList.add('ticking');
        badge.textContent = '⟳ refreshed';
        setTimeout(() => {
            badge.classList.remove('ticking');
            badge.textContent = '⟳ auto-refresh on';
        }, 1000);
    }, REFRESH_MS);
    badge.textContent = '⟳ auto-refresh on';
    badge.classList.add('ticking');
}

async function syncBoard() {
    await loadBoard();
    await loadFeed();
    toast('Board refreshed', 'info');
}

// ── Helpers ─────────────────────────────────────────────────────────────────
function setConn(state, msg) {
    const dot  = document.getElementById('conn-dot');
    const text = document.getElementById('conn-text');
    dot.className  = 'conn-dot ' + state;
    text.textContent = msg;
    text.style.color = state === 'ok' ? 'var(--green)' : state === 'err' ? 'var(--red)' : 'var(--text-muted)';
}
</script>
@endpush

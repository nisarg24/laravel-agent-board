<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Agent Board') — AI Task Automation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <style>
        :root {
            --bg:          #0b0d11;
            --bg-card:     #12151b;
            --bg-hover:    #191d26;
            --border:      #22262f;
            --border-hi:   #353c4a;
            --text:        #dde1eb;
            --text-muted:  #616878;
            --text-dim:    #2e333d;
            --accent:      #6366f1;
            --accent-glow: #6366f11a;
            --green:       #22c55e;
            --amber:       #f59e0b;
            --red:         #ef4444;
            --purple:      #a78bfa;
            --pink:        #f472b6;
            --blue:        #60a5fa;
            --teal:        #2dd4bf;
            --font:        'Space Grotesk', system-ui, sans-serif;
            --mono:        'JetBrains Mono', monospace;
            --r:           8px;
            --r-lg:        14px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { background: var(--bg); color: var(--text); font-family: var(--font); font-size: 14px; line-height: 1.6; min-height: 100vh; }

        ::-webkit-scrollbar { width: 5px; height: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--border-hi); }

        /* ── Layout shell ────────────────────────────── */
        .shell { display: flex; height: 100vh; overflow: hidden; }

        /* ── Sidebar ─────────────────────────────────── */
        .sidebar {
            width: 214px;
            min-width: 214px;
            background: var(--bg-card);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }

        .sidebar-logo {
            height: 54px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 18px;
            border-bottom: 1px solid var(--border);
            flex-shrink: 0;
        }
        .logo-icon {
            width: 28px; height: 28px;
            background: linear-gradient(135deg, var(--accent), var(--purple));
            border-radius: 7px;
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; flex-shrink: 0;
        }
        .logo-text { font-size: 14px; font-weight: 700; letter-spacing: -0.2px; }
        .logo-text em { color: var(--accent); font-style: normal; }

        .nav-group { padding: 12px 0; }
        .nav-group + .nav-group { border-top: 1px solid var(--border); }
        .nav-group-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.1px;
            text-transform: uppercase;
            color: var(--text-dim);
            padding: 0 18px 5px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 8px 18px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.1s;
            border-left: 2px solid transparent;
        }
        .nav-link:hover  { color: var(--text); background: var(--bg-hover); }
        .nav-link.active { color: var(--accent); background: var(--accent-glow); border-left-color: var(--accent); }
        .nav-link svg    { width: 15px; height: 15px; opacity: 0.8; flex-shrink: 0; }

        .sidebar-footer {
            margin-top: auto;
            padding: 14px 18px;
            border-top: 1px solid var(--border);
        }
        .provider-pills { display: flex; gap: 5px; margin-bottom: 8px; }
        .pill {
            font-size: 10px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 20px;
            border: 1px solid;
            letter-spacing: 0.3px;
        }
        .pill-jira       { border-color: var(--blue);   color: var(--blue);   background: #60a5fa0d; }
        .pill-confluence { border-color: var(--purple); color: var(--purple); background: #a78bfa0d; }
        .driver-line { font-size: 11px; color: var(--text-dim); }
        .driver-line code { font-family: var(--mono); color: var(--accent); font-size: 10px; }

        /* ── Main area ───────────────────────────────── */
        .main { flex: 1; display: flex; flex-direction: column; overflow: hidden; min-width: 0; }

        .topbar {
            height: 54px;
            min-height: 54px;
            background: var(--bg-card);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            padding: 0 22px;
            gap: 10px;
            flex-shrink: 0;
        }
        .topbar-title { font-size: 15px; font-weight: 600; flex: 1; }
        .topbar-title small { color: var(--text-muted); font-weight: 400; font-size: 12px; margin-left: 8px; }

        .content { flex: 1; overflow: auto; padding: 22px; }

        /* ── Buttons ─────────────────────────────────── */
        .btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 14px; border-radius: var(--r);
            font-family: var(--font); font-size: 13px; font-weight: 600;
            cursor: pointer; border: 1px solid; transition: all 0.12s;
            text-decoration: none; white-space: nowrap; line-height: 1.5;
        }
        .btn-primary { background: var(--accent); border-color: var(--accent); color: #fff; }
        .btn-primary:hover { filter: brightness(1.12); }
        .btn-ghost   { background: transparent; border-color: var(--border); color: var(--text-muted); }
        .btn-ghost:hover { color: var(--text); border-color: var(--border-hi); }
        .btn-danger  { background: transparent; border-color: #ef444440; color: var(--red); }
        .btn-danger:hover { background: #ef444415; }
        .btn-sm { padding: 4px 10px; font-size: 12px; }
        @keyframes pulse-glow {
            0%,100% { box-shadow: 0 0 0 0 #6366f130; }
            50%      { box-shadow: 0 0 0 7px transparent; }
        }
        .btn-pulse { animation: pulse-glow 2.5s infinite; }

        /* ── Alerts ──────────────────────────────────── */
        .alert { padding: 11px 15px; border-radius: var(--r); margin-bottom: 16px; font-size: 13px; }
        .alert-success { background: #22c55e12; border: 1px solid #22c55e30; color: var(--green); }
        .alert-error   { background: #ef444412; border: 1px solid #ef444430; color: var(--red);   }

        /* ── Loading spinner overlay ─────────────────── */
        .spinner-overlay {
            display: none;
            position: fixed; inset: 0;
            background: rgba(0,0,0,.7);
            z-index: 9999;
            align-items: center; justify-content: center;
            flex-direction: column; gap: 14px;
        }
        .spinner-overlay.active { display: flex; }
        .spinner {
            width: 36px; height: 36px;
            border: 3px solid var(--border);
            border-top-color: var(--accent);
            border-radius: 50%;
            animation: spin .7s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        .spinner-text { color: var(--text-muted); font-size: 13px; font-family: var(--font); }

        /* ── Toast notifications ─────────────────────── */
        .toast-container { position: fixed; bottom: 20px; right: 20px; z-index: 9998; display: flex; flex-direction: column; gap: 8px; }
        .toast {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--r);
            padding: 10px 14px;
            font-size: 13px;
            min-width: 240px;
            max-width: 340px;
            display: flex;
            align-items: center;
            gap: 9px;
            animation: slide-in .2s ease;
        }
        .toast.success { border-color: #22c55e40; }
        .toast.error   { border-color: #ef444440; }
        @keyframes slide-in { from { transform: translateX(20px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
    </style>
    @stack('styles')
</head>
<body>
<div class="shell">
    {{-- Sidebar --}}
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="logo-icon">⬡</div>
            <div class="logo-text">Agent<em>Board</em></div>
        </div>

        <nav class="nav-group">
            <div class="nav-group-label">Workspace</div>
            <a href="{{ route('agent-board.dashboard') }}" class="nav-link {{ request()->routeIs('agent-board.dashboard') ? 'active' : '' }}">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="1" width="6" height="6" rx="1.5"/><rect x="9" y="1" width="6" height="6" rx="1.5"/><rect x="1" y="9" width="6" height="6" rx="1.5"/><rect x="9" y="9" width="6" height="6" rx="1.5"/></svg>
                Kanban Board
            </a>
            <a href="{{ route('agent-board.monitoring') }}" class="nav-link {{ request()->routeIs('agent-board.monitoring*') ? 'active' : '' }}">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="1,12 5,7 8,9 11,4 15,8"/><line x1="1" y1="15" x2="15" y2="15"/></svg>
                Monitoring
            </a>
        </nav>

        <nav class="nav-group">
            <div class="nav-group-label">System</div>
            <a href="{{ route('agent-board.settings') }}" class="nav-link {{ request()->routeIs('agent-board.settings*') ? 'active' : '' }}">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="8" cy="8" r="2.5"/><path d="M8 1v2M8 13v2M1 8h2M13 8h2M3.05 3.05l1.41 1.41M11.54 11.54l1.41 1.41M3.05 12.95l1.41-1.41M11.54 4.46l1.41-1.41"/></svg>
                Settings
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="provider-pills">
                @foreach(config('agent-board.enabled_providers', []) as $p)
                    <span class="pill pill-{{ $p }}">{{ strtoupper($p) }}</span>
                @endforeach
            </div>
            <div class="driver-line">AI engine: <code>{{ config('agent-board.ai.driver', 'openai') }}</code></div>
        </div>
    </aside>

    {{-- Main --}}
    <div class="main">
        <div class="topbar">
            <div class="topbar-title">
                @yield('page-title', 'Dashboard')
                <small>@yield('page-subtitle')</small>
            </div>
            @yield('topbar-actions')
        </div>

        <div class="content">
            @if(session('success'))<div class="alert alert-success">✓ {{ session('success') }}</div>@endif
            @if(session('error'))<div class="alert alert-error">✗ {{ session('error') }}</div>@endif
            @yield('content')
        </div>
    </div>
</div>

{{-- Spinner --}}
<div class="spinner-overlay" id="spinner">
    <div class="spinner"></div>
    <div class="spinner-text" id="spinner-msg">Processing...</div>
</div>

{{-- Toast container --}}
<div class="toast-container" id="toasts"></div>

<script>
// ── Global helpers ──────────────────────────────────────────────────────────
const Spinner = {
    show(msg = 'Processing...') {
        document.getElementById('spinner-msg').textContent = msg;
        document.getElementById('spinner').classList.add('active');
    },
    hide() { document.getElementById('spinner').classList.remove('active'); },
};

function toast(message, type = 'success', duration = 3500) {
    const icons = { success: '✓', error: '✗', info: 'ℹ' };
    const colors = { success: 'var(--green)', error: 'var(--red)', info: 'var(--blue)' };
    const el = document.createElement('div');
    el.className = `toast ${type}`;
    el.innerHTML = `<span style="color:${colors[type]};font-weight:700;">${icons[type]}</span> ${message}`;
    document.getElementById('toasts').appendChild(el);
    setTimeout(() => el.style.opacity = '0', duration - 300);
    setTimeout(() => el.remove(), duration);
}

async function apiPost(url, data = {}) {
    const res = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify(data),
    });
    return res.json();
}
</script>
@stack('scripts')
</body>
</html>

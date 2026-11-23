<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Points Ledger - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
<style>
.points-wrap{max-width:760px;margin:0 auto;}
.point-card{border:2px solid var(--line);border-radius:14px;padding:14px;margin-bottom:12px;background:#111A2E;}
.point-card.neg{border-color:rgba(239,68,68,.4);background:rgba(239,68,68,.1);}
.point-card.pos{border-color:rgba(16,185,129,.4);background:rgba(16,185,129,.1);}
.pc-top{display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap;}
.pc-date{font-weight:700;font-size:.9rem;color:var(--text-gray);}
.pc-amount{font-weight:800;font-size:1.05rem;padding:4px 14px;border-radius:20px;}
.pc-amount.neg{background:rgba(239,68,68,.2);color:#FCA5A5;}
.pc-amount.pos{background:rgba(16,185,129,.2);color:#6EE7B7;}
.pc-reason{margin:10px 0;line-height:1.8;font-size:.95rem;}
.pc-bottom{display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;font-size:.82rem;color:var(--text-gray);border-top:1px dashed var(--line);padding-top:8px;}
</style>
</head>
<body class="dashboard-body">
<div class="dashboard-container">
    <aside class="sidebar">
    <div class="sidebar-header">
        <span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span>
    </div>
    <nav class="sidebar-nav">
        <a href="scan_checkin.php" class="nav-item " style="background:linear-gradient(135deg,#1E40AF,#2563EB);color:#fff;border-radius:12px;margin:6px 10px;">
            <span class="icon">📷</span> Check In        </a>
        <a href="dashboard.php" class="nav-item ">
            <span class="icon">📊</span> Overview        </a>
        <a href="notifications.php" class="nav-item ">
            <span class="icon">🔔</span> Notifications                    </a>
        <a href="attendance.php" class="nav-item ">
            <span class="icon">📅</span> Attendance Log        </a>
        <a href="points.php" class="nav-item active"><span class="icon">🎯</span> My Points</a>
        <a href="absence_confirm.php" class="nav-item ">
            <span class="icon">📣</span> Attendance Reports        </a>
        <a href="requests.php" class="nav-item ">
            <span class="icon">📝</span> My Requests        </a>
        <a href="schedule.php" class="nav-item ">
            <span class="icon">🕒</span> My Schedule        </a>
        <a href="../holidays.php" class="nav-item ">
            <span class="icon">🎉</span> Holidays        </a>
        <a href="https://lms.solicode.ma" target="_blank" rel="noopener" class="nav-item">
            <span class="icon">🎓</span> LMS Platform
        </a>
    </nav>
    <div class="sidebar-footer">
        <a href="../login.php" class="nav-item logout">
            <span class="icon">🚪</span> Logout        </a>
    </div>
</aside>

    <div class="dashboard-main">
        <header class="top-header">
    <div class="header-left">
        <button class="menu-toggle" id="menuToggle">☰</button>
        <h2>My Points Ledger</h2>
    </div>

    <div class="header-right">
        
        <div class="user-profile">
            <div class="user-avatar student-avatar">S</div>
            <div class="user-info">
                <span class="user-name">
                    Student                </span>
                <span class="user-role">Student</span>
            </div>
        </div>
    </div>
</header>
<script>

(function () {
    if (window.__mobileNavReady) return;
    window.__mobileNavReady = true;
    var ov = document.createElement('div');
    ov.className = 'sidebar-overlay';
    document.body.appendChild(ov);
    function sb() { return document.querySelector('.sidebar'); }
    function setOpen(o) {
        var s = sb(); if (!s) return;
        s.classList.toggle('open', o);
        ov.classList.toggle('show', o);
        document.body.style.overflow = o ? 'hidden' : '';
    }
    document.addEventListener('click', function (e) {
        var t = e.target;
        if (!t || !t.closest) return;
        if (t.closest('#menuToggle')) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var s = sb();
            setOpen(!(s && s.classList.contains('open')));
            return;
        }
        if (t === ov || t.closest('.sidebar a')) setOpen(false);
    }, true);
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') setOpen(false); });
    window.addEventListener('resize', function () { if (window.innerWidth > 992) setOpen(false); });
})();</script>

        <main class="dashboard-content">
<div class="alert" style="background:#16213A;color:#FBBF24;border:1px solid #3A4564;border-radius:12px;padding:12px 16px;margin-bottom:20px;">Coming soon - In progress as I learn.</div>
            <div class="page-header"><h1>🎯 My Points Ledger</h1></div>
            <div class="points-wrap">
                <div class="content-card" style="text-align:center;">
                    <h3 class="card-title">Current balance</h3>
                    <p class="stat-value points-danger" style="font-size:2.2rem;font-weight:800;margin:6px 0;">—</p>
                </div>
                                    <div class="content-card"><p style="color:var(--text-gray);">No operations yet — full balance.</p></div>
                            </div>
        </main>
    </div>
</div>

<script>document.getElementById('menuToggle').addEventListener('click',()=>document.querySelector('.sidebar').classList.toggle('open'));</script>
</body></html>
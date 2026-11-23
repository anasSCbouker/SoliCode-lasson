<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Group Sessions - SoliCode Log</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="dashboard-body">
<div class="dashboard-container">
    <aside class="sidebar">
    <div class="sidebar-header"><span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span></div>
    <nav class="sidebar-nav">
        <a href="dashboard.php" class="nav-item "><span class="icon">📊</span> Overview</a>
        <a href="directory.php" class="nav-item "><span class="icon">🎓</span> Student directory</a>
        <a href="my_schedule.php" class="nav-item "><span class="icon">🕰️</span> My Work Schedule</a>
        <a href="schedule.php" class="nav-item active"><span class="icon">🏫</span> Group Sessions</a>
        <a href="../holidays.php" class="nav-item "><span class="icon">🎉</span> Holidays</a>
                <a href="manual_attendance.php" class="nav-item "><span class="icon">✍️</span> Manual Attendance</a>
                <a href="attendance_review.php" class="nav-item "><span class="icon">👁️</span> Attendance Monitoring</a>
        <a href="notifications.php" class="nav-item "><span class="icon">🔔</span> Notifications</a>
    </nav>
    <div class="sidebar-footer"><a href="../login.php" class="nav-item logout"><span class="icon">🚪</span> Logout</a></div>
</aside>

    <div class="dashboard-main">
        <header class="top-header">
    <div class="header-left">
        <button class="menu-toggle" id="menuToggle">☰</button>
        <h2>Guard Dashboard</h2>
    </div>
    
    <div class="header-right">
        
        <div class="user-profile">
            <div class="user-avatar guard-avatar">G</div>
            <div class="user-info">
                <span class="user-name">Guard </span>
                <span class="user-role">Guard</span>
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
            <div class="page-header">
                <h1>Weekly Group Sessions</h1>
            </div>

            <div class="alert alert-success">
                                These are all group sessions as set by the admin in the schedule. Your personal shifts are under "My Work Schedule".            </div>

            <div class="content-card">
                                    <div class="empty-state"><p>No sessions scheduled</p></div>
                            </div>

            <div class="content-card" id="holidays" style="margin-top:20px;">
                <h3 class="card-title">Upcoming Holidays</h3>
                                    <p style="color: var(--text-gray);">No holidays registered</p>
                            </div>
        </main>
    </div>
</div>

<script>
document.getElementById('menuToggle').addEventListener('click', function () {
    document.querySelector('.sidebar').classList.toggle('open');
});</script>
</body>
</html>
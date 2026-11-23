<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Face Verification Strictness - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css"></head>
<body class="dashboard-body">
<div class="dashboard-container">
    <aside class="sidebar">
    <div class="sidebar-header">
        <span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span>
    </div>
    <nav class="sidebar-nav">
        <a href="dashboard.php" class="nav-item ">
            <span class="icon">📊</span> Admin Dashboard        </a>

        <div class="nav-section-title">Management</div>
        <a href="students.php" class="nav-item ">
            <span class="icon">👥</span> Students Management        </a>
        <a href="teachers.php" class="nav-item ">
            <span class="icon">🧑</span> Teachers Management        </a>
        <a href="guards.php" class="nav-item ">
            <span class="icon">🛡️</span> Guards Management        </a>
        <a href="guard_schedule.php" class="nav-item ">
            <span class="icon">🕰️</span> Guard Work Schedules        </a>
        <a href="groups.php" class="nav-item ">
            <span class="icon">🏫</span> Groups Management        </a>
        <a href="rooms.php" class="nav-item ">
            <span class="icon">🚪</span> Rooms        </a>
        <a href="directory.php" class="nav-item ">
            <span class="icon">🎓</span> Student directory        </a>
        <a href="face_enroll.php" class="nav-item ">
            <span class="icon">🧬</span> Face Enrollment        </a>

        <div class="nav-section-title">Organization</div>
        <a href="schedule.php" class="nav-item ">
            <span class="icon">🕒</span> Schedule        </a>
        <a href="holidays.php" class="nav-item ">
            <span class="icon">🎉</span> Holidays        </a>

        <div class="nav-section-title">Attendance & Discipline</div>
        <a href="attendance.php" class="nav-item ">
            <span class="icon">📅</span> Attendance Management        </a>
        <a href="attendance_methods.php" class="nav-item ">
            <span class="icon">🎛️</span> Attendance Method        </a>
        <a href="absence_reports.php" class="nav-item ">
            <span class="icon">📣</span> Absence Reports        </a>
        <a href="attendance_disputes.php" class="nav-item ">
            <span class="icon">⚖️</span> Attendance Disputes        </a>
        <a href="manual_attendance.php" class="nav-item ">
            <span class="icon">✍️</span> Manual Attendance        </a>
        <a href="discipline.php" class="nav-item ">
            <span class="icon">🚦</span> Conduct Grid        </a>
        <a href="requests_review.php" class="nav-item ">
            <span class="icon">📋</span> Requests Review        </a>
        <a href="screens.php" class="nav-item ">
            <span class="icon">🖥️</span> Classroom Screens        </a>

        <div class="nav-section-title">Analytics & System</div>
        <a href="reports.php" class="nav-item ">
            <span class="icon">📈</span> Reports & Statistics        </a>
        <a href="audit_log.php" class="nav-item ">
            <span class="icon">🧾</span> Audit Log        </a>
        <a href="settings.php" class="nav-item ">
            <span class="icon">⚙️</span> Settings        </a>
        <a href="notifications.php" class="nav-item ">
            <span class="icon">🔔</span> Notifications                    </a>
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
        <h2>Admin Dashboard</h2>
    </div>
    
    <div class="header-right">
        
        <div class="user-profile">
            <div class="user-avatar admin-avatar">A</div>
            <div class="user-info">
                <span class="user-name">Administrator</span>
                <span class="user-role">Administrator</span>
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
                <h1>🎚️ Face Verification Strictness</h1>
                <a href="face_enroll.php" class="btn btn-secondary">⟵ Face enrollment</a>
            </div>
                                    <div class="alert alert-success">💡 Any disabled component is removed from both the student check and the server validation.</div>
            <form>
                                <div class="content-card">
                    <h3 class="card-title">🎯 Matching & sensitivity</h3>
                    <div class="form-row">
                        <div class="form-group"><label>Face descriptor threshold (lower = stricter; default 0.45)</label><input type="number" class="form-control" step="0.05" value="" disabled></div>                        <div class="form-group"><label>Min face detection confidence (%)</label><input type="number" class="form-control" step="1" value="" disabled></div>                    </div>
                </div>
                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">🧬 Liveness (all components)</h3>
                    <div class="form-group"><label><input type="checkbox" disabled> Enable liveness entirely (if off: detection + matching only)</label></div>                </div>
                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">🔄 Head movement challenge</h3>
                    <div class="form-group"><label><input type="checkbox" disabled> Require head movement</label></div>                    <div class="form-row">
                        <div class="form-group"><label>Required yaw range</label><input type="number" class="form-control" step="0.01" value="" disabled></div>                        <div class="form-group"><label>Required pitch range</label><input type="number" class="form-control" step="0.01" value="" disabled></div>                    </div>
                </div>
                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">👁️ Blink</h3>
                    <div class="form-group"><label><input type="checkbox" disabled> Require natural blink</label></div>                    <div class="form-row"><div class="form-group"><label>Eye-closure ratio counted as blink (lower = stricter)</label><input type="number" class="form-control" step="0.01" value="" disabled></div></div>
                </div>
                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">😮 Mouth open</h3>
                    <div class="form-group"><label><input type="checkbox" disabled> Require clear mouth open</label></div>                    <div class="form-row"><div class="form-group"><label>Minimum mouth openness</label><input type="number" class="form-control" step="0.01" value="" disabled></div></div>
                </div>
                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">📵 Phone stillness</h3>
                    <div class="form-group"><label><input type="checkbox" disabled> Require still phone (blocks moving phone over a photo)</label></div>                    <div class="form-row">
                        <div class="form-group"><label>Max allowed tilt (deg)</label><input type="number" class="form-control" step="1" value="" disabled></div>                        <div class="form-group"><label>Max rotation rate (deg/s)</label><input type="number" class="form-control" step="1" value="" disabled></div>                    </div>
                </div>
                <button type="button" class="btn btn-primary" style="margin-top:20px;">💾 Save settings</button>
            </form>
        </main>
    </div>
</div>

<script>document.getElementById('menuToggle').addEventListener('click',()=>document.querySelector('.sidebar').classList.toggle('open'));</script>
</body></html>
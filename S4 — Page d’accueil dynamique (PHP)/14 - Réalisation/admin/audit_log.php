<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Audit Log - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
<style>
.audit-wrap{max-width:900px;margin:0 auto;}
.audit-card{border:2px solid var(--line);border-radius:14px;padding:14px 16px;margin-bottom:12px;background:#111A2E;}
.ac-top{display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;align-items:center;font-size:.85rem;color:var(--text-gray);}
.ac-action{font-size:1.05rem;font-weight:800;margin:10px 0 4px;color:var(--primary-blue);line-height:1.7;}
.ac-table{font-size:.85rem;color:var(--text-gray);margin-bottom:8px;}
.ac-details{line-height:1.9;font-size:.92rem;background:var(--bg);border-radius:10px;padding:10px 12px;word-break:break-word;}
.audit-filters form{display:flex;gap:10px;flex-wrap:wrap;align-items:flex-end;}
.audit-filters .form-group{flex:1 1 150px;margin:0;}
.audit-filters button{flex:0 0 auto;}
@media (max-width:640px){
    .audit-filters form{flex-direction:column;align-items:stretch;}
    .audit-filters button{width:100%;}
    .ac-top{flex-direction:column;align-items:flex-start;gap:4px;}
}
</style>
</head>
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
        <a href="audit_log.php" class="nav-item active">
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
            <div class="page-header"><h1>🧾 Audit Log</h1></div>

            <div class="content-card audit-filters">
                <form>
                    <div class="form-group" style="flex:2 1 200px;">
                        <label>Operation</label>
                        <input type="text" name="q" class="form-control" placeholder="Search operations or records..." value="">
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <select name="user" id="f_user" class="form-control">
                            <option value="">All</option>
                                                    </select>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" id="f_role" class="form-control">
                            <option value="">All</option>
                                                    </select>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="">
                    </div>
                    <button type="button" class="btn btn-primary">Filter</button>
                </form>
            </div>

            <div class="audit-wrap" style="margin-top:20px;">
                                    <div class="content-card"><p style="color:var(--text-gray);">No matching records.</p></div>
                            </div>
                    </main>
    </div>
</div>

<script>
document.getElementById('menuToggle').addEventListener('click',()=>document.querySelector('.sidebar').classList.toggle('open'));
(function(){
    var roleSel = document.getElementById('f_role'), userSel = document.getElementById('f_user');
    function filterUsers(){
        var r = roleSel.value;
        Array.prototype.forEach.call(userSel.options, function(op){
            var dr = op.getAttribute('data-role');
            var hide = r && dr && dr !== r;
            op.hidden = !!hide; op.disabled = !!hide;
        });
        if (userSel.selectedOptions.length && userSel.selectedOptions[0].hidden) userSel.value = '';
    }
    roleSel.addEventListener('change', filterUsers);
    filterUsers();
})();</script>
</body></html>
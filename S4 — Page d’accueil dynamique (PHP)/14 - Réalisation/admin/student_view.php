<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Complete Profile - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
<style>.doc-img{width:150px;border-radius:12px;border:2px solid var(--line);object-fit:cover;}</style>
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
                <h1>Student Complete Profile</h1>
                <div style="display:flex;gap:10px;">
                    <a href="students.php" class="btn btn-secondary">Back to List</a>
                    <button class="btn btn-primary">Export PDF 🖨️</button>
                </div>
            </div>
            
            <div class="content-card student-profile-card">
                <div class="profile-header">
                    <div class="profile-avatar"></div>
                    <div class="profile-info">
                        <h2>Student</h2>
                        <p class="profile-code">—</p>
                        <div class="profile-badges">
                            <span class="badge-info">-</span>
                            <span class="badge-info">-</span>
                            <span class="badge-info">-</span>
                        </div>
                    </div>
                    <div class="profile-points">
                        <div class="points-circle danger">
                            <span class="points-value">0.00</span>
                            <span class="points-label">/ 20.00</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="content-card">
                <h3 class="card-title">Identity Verification Documents</h3>
                                    <p style="color:var(--text-gray);">No documents yet — space locked until upload and approval.</p>
                            </div>

            <div class="content-card">
                <h3 class="card-title">Personal Information</h3>
                <div class="info-grid">
                    <div class="info-item"><label>Email</label><p>—</p></div>
                    <div class="info-item"><label>Phone</label><p>—</p></div>
                    <div class="info-item"><label>National ID</label><p>—</p></div>
                    <div class="info-item"><label>Join Date</label><p>01/01/1970</p></div>
                    <div class="info-item"><label>Second Language</label><p>—</p></div>
                    <div class="info-item"><label>Status</label><p><span class="status-badge-sm">—</span></p></div>
                </div>
            </div>

            <div class="content-card">
                <h3 class="card-title">Parent Information</h3>
                <div class="info-grid">
                    <div class="info-item"><label>Parent Name</label><p>—</p></div>
                    <div class="info-item"><label>Parent Phone</label><p>—</p></div>
                </div>
                            </div>

            <div class="content-card">
                <h3 class="card-title">Points History</h3>
                <p style="color:var(--text-gray);">No data available</p>
                            </div>

            <div class="content-card">
                <h3 class="card-title">Attendance History</h3>
                <p style="color:var(--text-gray);">No data available</p>
                            </div>

            <div class="content-card">
                <h3 class="card-title">Requests History</h3>
                <p style="color:var(--text-gray);">No data available</p>
                            </div>

                    </main>
    </div>
</div>

<script>document.getElementById('menuToggle').addEventListener('click', function(){ document.querySelector('.sidebar').classList.toggle('open'); });</script>
</body></html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add New Student - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
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
                <h1>Add New Student</h1>
                <a href="students.php" class="btn btn-secondary">Cancel</a>
            </div>

            
            <div class="content-card">
                <form enctype="multipart/form-data" class="student-form">
                                        
                    <div class="form-section">
                        <h3 class="section-title-sm">Personal Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name *</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone *</label>
                                <input type="tel" id="phone" name="phone" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cin">National ID *</label>
                            <input type="text" id="cin" name="cin" class="form-control" value="" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3 class="section-title-sm">Parent Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="parent_name">Parent Name *</label>
                                <input type="text" id="parent_name" name="parent_name" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="parent_phone">Parent Phone *</label>
                                <input type="tel" id="parent_phone" name="parent_phone" class="form-control" value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3 class="section-title-sm">Academic Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="group_id">Group *</label>
                                <select id="group_id" name="group_id" class="form-control" required>
                                    <option value="">Select Group</option>
                                                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="track_id">Track *</label>
                                <select id="track_id" name="track_id" class="form-control" required>
                                    <option value="">Select Track</option>
                                                                    </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="level_id">Level *</label>
                                <select id="level_id" name="level_id" class="form-control" required>
                                    <option value="">Select Level</option>
                                                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="second_language">Second Language *</label>
                                <select id="second_language" name="second_language" class="form-control" required>
                                    <option value="english" >English</option>
                                    <option value="french"  >Français</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="previous_education">Previous Education</label>
                                <input type="text" id="previous_education" name="previous_education" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="join_date">Join Date *</label>
                                <input type="date" id="join_date" name="join_date" class="form-control" value="" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label>Face Reference Photo (optional)</label>
                            <input type="file" name="face_ref" class="form-control" accept=".jpg,.jpeg,.png">
                            <small style="color: var(--text-gray); font-size: .85rem;">
                                Upload now to approve it directly, or leave empty; the student will be forced to attach it at first login after password change.                            </small>
                                                    </div>

                        <div class="form-group">
                            <label for="medical_notes">Medical Notes (Optional)</label>
                            <textarea id="medical_notes" name="medical_notes" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-primary">Save</button>
                        <a href="students.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
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
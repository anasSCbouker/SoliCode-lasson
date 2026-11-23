<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports & Statistics - SoliCode Log</title>
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
        <a href="reports.php" class="nav-item active">
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
                    <h1>Reports & Statistics</h1>
                    <div style="display: flex; gap: 10px;">
                        <button class="btn btn-secondary">🖨️ Print / Save as PDF</button>
                        <button class="btn btn-primary">📊 Export Excel</button>
                    </div>
                </div>

                
                <div class="content-card">
                    <form class="filter-form">
                        <div class="form-group" style="flex: 1;">
                            <label>From</label>
                            <input type="date" name="from" class="form-control" value="">
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label>To</label>
                            <input type="date" name="to" class="form-control" value="">
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label>Group</label>
                            <select name="group" class="form-control">
                                <option value="">All Groups</option>
                                                            </select>
                        </div>
                        <div class="form-group" style="align-self: flex-end;">
                            <button type="button" class="btn btn-primary">Generate Report</button>
                        </div>
                    </form>
                </div>

                
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(59,130,246,.14);">👥</div>
                        <div class="stat-info">
                            <h3>Total Students</h3>
                            <p class="stat-value">—</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(16,185,129,.14);">✓</div>
                        <div class="stat-info">
                            <h3>Attendance Rate</h3>
                            <p class="stat-value" style="color: #059669;">%</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(251,191,36,.12);">⏰</div>
                        <div class="stat-info">
                            <h3>Late Rate</h3>
                            <p class="stat-value" style="color: #D97706;">%</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(239,68,68,.14);">✗</div>
                        <div class="stat-info">
                            <h3>Absence Rate</h3>
                            <p class="stat-value" style="color: #DC2626;">%</p>
                        </div>
                    </div>
                </div>

                
                <div class="content-card">
                    <h3 class="card-title">Daily Statistics</h3>
                    <div style="position: relative; height: 350px;">
                        <canvas id="dailyChart"></canvas>
                    </div>
                </div>

                
                <div class="content-card">
                    <h3 class="card-title">Groups Statistics</h3>
                    <div style="position: relative; height: 350px;">
                        <canvas id="groupsChart"></canvas>
                    </div>
                </div>

                <div class="reports-grid">
                    
                    <div class="content-card">
                        <h3 class="card-title">⚠️ Critical Students</h3>
                                                    <p style="color: var(--text-gray); text-align: center; padding: 20px;">
                                No students in critical condition                            </p>
                                            </div>

                    
                    <div class="content-card">
                        <h3 class="card-title">📊 Most Absent</h3>
                                                    <p style="color: var(--text-gray); text-align: center; padding: 20px;">
                                No data for the selected period                            </p>
                                            </div>
                </div>

            </main>
        </div>
    </div>

    
    <script>
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });

        
        const dailyData = null;
        const dailyLabels = dailyData.map(d => d.date);
        const presentData = dailyData.map(d => d.present);
        const lateData = dailyData.map(d => d.late);
        const absentData = dailyData.map(d => d.absent);

        
        const dailyCtx = document.getElementById('dailyChart').getContext('2d');
        new Chart(dailyCtx, {
            type: 'line',
            data: {
                labels: dailyLabels,
                datasets: [
                    {
                        label: 'Present',
                        data: presentData,
                        borderColor: '#059669',
                        backgroundColor: 'rgba(5, 150, 105, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Late',
                        data: lateData,
                        borderColor: '#D97706',
                        backgroundColor: 'rgba(217, 119, 6, 0.1)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Absent',
                        data: absentData,
                        borderColor: '#DC2626',
                        backgroundColor: 'rgba(220, 38, 38, 0.1)',
                        tension: 0.3,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: { font: { family: 'Cairo', size: 13 } }
                    }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        
        const groupsData = null;
        const groupsLabels = groupsData.map(g => g.name);
        const groupsPresent = groupsData.map(g => {
            const total = parseInt(g.total_records) || 1;
            return Math.round((parseInt(g.attended) / total) * 100);
        });

        const groupsCtx = document.getElementById('groupsChart').getContext('2d');
        new Chart(groupsCtx, {
            type: 'bar',
            data: {
                labels: groupsLabels,
                datasets: [{
                    label: 'Attendance Rate (%)',
                    data: groupsPresent,
                    backgroundColor: '#1E40AF',
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        labels: { font: { family: 'Cairo', size: 13 } }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: { callback: value => value + '%' }
                    }
                }
            }
        });

        
        function exportReport(type) {
            const params = new URLSearchParams(window.location.search);
            params.set('export', type);
            window.location.href = 'report_export.php?' + params.toString();
        }
    </script>
</body>
</html>
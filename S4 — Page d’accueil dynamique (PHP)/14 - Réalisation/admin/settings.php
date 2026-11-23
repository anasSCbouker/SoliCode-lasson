<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>System Settings - SoliCode Log</title>
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
        <a href="settings.php" class="nav-item active">
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
            <div class="page-header"><h1>⚙️ System Settings</h1></div>
                        
            <form>
                                <div class="content-card">
                    <h3 class="card-title">🎯 Points & Penalties</h3>
                    <div class="form-row">
                        <div class="form-group"><label>Late penalty</label><input type="number" step="0.05" name="late_penalty" class="form-control" value="0.25"></div>
                        <div class="form-group"><label>Absence penalty</label><input type="number" step="0.05" name="absence_penalty" class="form-control" value="0.5"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label>Late grace (min)</label><input type="number" name="late_grace_minutes" class="form-control" value="10"></div>
                        <div class="form-group"><label>Partial absence grace (min)</label><input type="number" name="partial_absence_grace_minutes" class="form-control" value="10"></div>
                    </div>
                </div>

                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">📉 Caps & Conduct Grid</h3>
                    <div class="form-row">
                        <div class="form-group"><label>Justified absence cap (days)</label><input type="number" name="justified_absence_cap_days" class="form-control" value="10"></div>
                        <div class="form-group"><label>Unjustified absence cap (days)</label><input type="number" name="unjustified_absence_cap_days" class="form-control" value="10"></div>
                        <div class="form-group"><label>Grid adds extra deductions?</label>
                            <select name="is_grid_additive" class="form-control">
                                <option value="0" selected>No</option>
                                <option value="1" >Yes</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="content-card" style="margin-top:20px;border:2px solid var(--primary-blue);">
                    <h3 class="card-title">🌐 School Network (applies instantly to barcode & screen)</h3>
                    <div class="alert alert-success">💡 Any change here reflects immediately on barcode check-in and the classroom screen without restart. Leave CIDR and DDNS empty with check disabled for development only.</div>
                    <div class="form-row">
                        <div class="form-group"><label>Enforce network check / Disable network check (dev)</label>
                            <select name="checkin_network_only" class="form-control">
                                <option value="1" selected>Enforce network check</option>
                                <option value="0" >Disable network check (dev)</option>
                            </select>
                        </div>
                        <div class="form-group"><label>Read real client IP via proxy (ngrok/Cloudflare)</label>
                            <select name="trust_proxy_headers" class="form-control">
                                <option value="1" >Enabled (needed for ngrok)</option>
                                <option value="0" selected>Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label>Accept local connections (127.0.0.1) as school network — development only</label>
                            <select name="allow_loopback" class="form-control">
                                <option value="0" selected>No (safe default)</option>
                                <option value="1" >Yes (unsafe with ngrok: lets everyone in)</option>
                            </select>
                        </div>
                        <div class="form-group"><label>Trusted proxies (comma separated IPs)</label>
                            <input type="text" name="trusted_proxies" class="form-control" placeholder="127.0.0.1,::1" value="127.0.0.1,::1">
                        </div>
                    </div>
                    <div class="form-group"><label>Allowed IPv4 CIDRs (comma separated)</label>
                        <textarea name="school_allowed_cidrs" class="form-control" rows="2" placeholder="192.168.1.0/24,154.144.225.88/32"></textarea>
                    </div>
                    <div class="form-group"><label>Allowed IPv6 (CIDR, comma separated)</label>
                        <input type="text" name="school_allowed_ipv6" class="form-control" placeholder="2001:db8:abcd::/48" value="">
                    </div>
                    <div class="form-group"><label>School DDNS host or public IP</label>
                        <input type="text" name="school_ddns_host" class="form-control" placeholder="school-ddns.example.com  IP" value="">
                    </div>
                </div>

                <div class="content-card" style="margin-top:20px;">
                    <h3 class="card-title">📷 Check-in Settings</h3>
                    <div class="form-row">
                        <div class="form-group"><label>QR refresh (sec)</label><input type="number" name="qr_refresh_seconds" class="form-control" value="300"></div>
                        <div class="form-group"><label>Face descriptor threshold (lower=stricter)</label><input type="number" step="0.05" name="face_descriptor_threshold" class="form-control" value="0.45"></div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary" style="margin-top:20px;">💾 Save Settings</button>
            </form>
        </main>
    </div>
</div>

<script>document.getElementById('menuToggle').addEventListener('click',()=>document.querySelector('.sidebar').classList.toggle('open'));</script>
</body></html>
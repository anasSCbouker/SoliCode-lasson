<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Requests - SoliCode Log</title>
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
        <a href="scan_checkin.php" class="nav-item " style="background:linear-gradient(135deg,#1E40AF,#2563EB);color:#fff;border-radius:12px;margin:6px 10px;">
            <span class="icon">📷</span> Check In        </a>
        <a href="dashboard.php" class="nav-item ">
            <span class="icon">📊</span> Overview        </a>
        <a href="notifications.php" class="nav-item ">
            <span class="icon">🔔</span> Notifications                    </a>
        <a href="attendance.php" class="nav-item ">
            <span class="icon">📅</span> Attendance Log        </a>
        <a href="points.php" class="nav-item "><span class="icon">🎯</span> My Points</a>
        <a href="absence_confirm.php" class="nav-item ">
            <span class="icon">📣</span> Attendance Reports        </a>
        <a href="requests.php" class="nav-item active">
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
        <h2>My Requests</h2>
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
            <div class="page-header">
                <h1>My Requests & Appeals</h1>
                <button class="btn btn-primary" id="newRequestBtn" style="">New Request +</button>
            </div>

                        
            <div class="content-card request-form-card" id="requestFormCard" style="display: none;">
                <h3 class="card-title">New Request</h3>
                <form enctype="multipart/form-data" class="request-form">
                                        <div class="form-row">
                        <div class="form-group">
                            <label for="request_type">Request Type *</label>
                            <select id="request_type" name="request_type" class="form-control" required>
                                <option value="justification" >Absence Justification</option>
                                <option value="appeal" >Point Deduction Appeal</option>
                                <option value="permission" >Advance Permission Request</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="related_date">Date of Incident *</label>
                            <input type="date" id="related_date" name="related_date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="related_session">Related Session</label>
                        <select id="related_session" name="related_session" class="form-control">
                            <option value="">Unspecified (full day)</option>
                                                            <option value="" disabled>No sessions scheduled for your group yet</option>
                                                    </select>
                        <small style="color:var(--text-gray);font-size:.82rem;">Real sessions of your group for the chosen day — synced with admin changes.</small>
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason & Details *</label>
                        <textarea id="reason" name="reason" class="form-control" rows="5" required placeholder="Explain in detail..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="attachment">Attach Proof File (Optional)</label>
                        <input type="file" id="attachment" name="attachment" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                        <small style="color: var(--text-gray); font-size: 0.85rem;">PDF, JPG, PNG - Max 5 MB</small>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-primary">Submit Request</button>
                        <button type="button" class="btn btn-secondary" id="cancelBtn">Back to List</button>
                    </div>
                </form>
            </div>

            <div class="content-card">
                <h3 class="card-title">Previous Requests History</h3>
                                    <div class="empty-state"><p>You have not submitted any requests yet</p></div>
                            </div>
        </main>
    </div>
</div>

<script>
document.getElementById('menuToggle').addEventListener('click', function(){ document.querySelector('.sidebar').classList.toggle('open'); });
document.getElementById('newRequestBtn').addEventListener('click', function(){
    document.getElementById('requestFormCard').style.display = 'block';
    this.style.display = 'none';
});
document.getElementById('cancelBtn').addEventListener('click', function(){
    document.getElementById('requestFormCard').style.display = 'none';
    document.getElementById('newRequestBtn').style.display = 'block';
});


(function(){
    function dowOf(val){
        if(!val) return null;
        var m = val.match(/^(\d{4})-(\d{2})-(\d{2})$/);
        if(!m){ var m2 = val.match(/^(\d{1,2})[\/-](\d{1,2})[\/-](\d{4})$/); if(m2) m = [null, m2[3], m2[2], m2[1]]; }
        if(!m) return null;
        var d = new Date(+m[1], +m[2]-1, +m[3], 12);
        return ['sunday','monday','tuesday','wednesday','thursday','friday','saturday'][d.getDay()];
    }
    function filterSessions(){
        var sel = document.getElementById('related_session');
        var dateEl = document.getElementById('related_date');
        if(!sel || !dateEl) return;
        var dow = dowOf(dateEl.value);
        Array.prototype.forEach.call(sel.options, function(op){
            var od = op.getAttribute('data-dow');
            var hide = dow && od && od !== dow;
            op.hidden = !!hide;
            op.disabled = !!hide;
        });
        if (sel.selectedOptions.length && sel.selectedOptions[0].hidden) sel.value = '';
    }
    var dateEl = document.getElementById('related_date');
    if (dateEl) ['input','change','blur'].forEach(function(ev){ dateEl.addEventListener(ev, function(){ setTimeout(filterSessions, 0); }); });
    document.addEventListener('DOMContentLoaded', filterSessions);
    window.addEventListener('load', filterSessions);
})();</script>
</body>
</html>
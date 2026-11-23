<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Attendance Screen - </title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
    font-family:'Cairo','Inter',sans-serif;
    background:linear-gradient(135deg,#0F172A 0%,#1E3A8A 55%,#1E40AF 100%);
    color:#fff; height:100vh;
    display:flex; flex-direction:column; align-items:center;
    padding:28px 20px 18px; gap:18px;
    overflow:hidden; user-select:none;
}
.connection-status { position:fixed; top:18px; inset-inline-end:22px; display:flex; align-items:center; gap:8px; font-size:.9rem; color:rgba(255,255,255,.75); }
.status-dot { width:12px; height:12px; border-radius:50%; background:#10B981; animation:pulse-dot 2s infinite; }
.status-dot.offline { background:#EF4444; animation:none; }
@keyframes pulse-dot { 0%,100%{opacity:1} 50%{opacity:.45} }
.screen-header { text-align:center; }
.screen-logo { font-size:1.9rem; font-weight:800; }
.logo-blue { color:#60A5FA; } .logo-yellow { color:#FBBF24; }
.group-name { font-size:1.35rem; font-weight:700; margin-top:6px; color:rgba(255,255,255,.92); }
.teacher-name { font-size:.95rem; color:rgba(255,255,255,.6); margin-top:2px; }
.qr-container { background:#fff; padding:22px; border-radius:22px; box-shadow:0 22px 55px rgba(0,0,0,.45); text-align:center; width:340px; }
#qrcode { display:flex; align-items:center; justify-content:center; min-height:280px; }
.qr-empty { min-height:280px; display:flex; align-items:center; justify-content:center; font-size:4.5rem; }
.qr-label { color:#1E40AF; font-weight:700; font-size:1.05rem; margin-top:12px; }
.session-info { text-align:center; }
.session-badge { display:inline-block; background:rgba(251,191,36,.18); border:2px solid #FBBF24; color:#FBBF24; padding:10px 26px; border-radius:50px; font-weight:700; font-size:1.1rem; }
.time-remaining { margin-top:10px; font-size:2.2rem; font-weight:800; }
.no-session { font-size:1.25rem; color:rgba(255,255,255,.55); }
.refresh-hint { margin-top:auto; font-size:.8rem; color:rgba(255,255,255,.35); }
</style>
</head>
<body>
    <div class="connection-status">
        <div class="status-dot" id="statusDot"></div>
        <span id="statusText">Connected</span>
    </div>

    <div class="screen-header">
        <div class="screen-logo"><span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span></div>
        <div class="group-name"></div>
        <div class="teacher-name"></div>
    </div>

    <div class="qr-container">
                    <div class="qr-empty" id="qrEmpty">🕒</div>
                <div class="qr-label">Barcode disabled for this group — manual recording</div>
    </div>

    <div class="session-info" id="sessionInfo">
                    <div class="no-session">No active session at the moment</div>
            </div>

    <div class="refresh-hint">Auto-refreshing</div>

    
    
</body>
</html>
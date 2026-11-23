<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SoliCode Log — Vocational Training Center</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
:root{--blue:#3B82F6;--blue-d:#60A5FA;--yellow:#FBBF24;--ink:#E6EDF7;--gray:#94A3B8;--bg:#0F1626;--line:#26324D;--surface:#111A2E;color-scheme:dark}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Cairo','Inter',sans-serif;color:var(--ink);background:#0A0F1C;line-height:1.7}
img{max-width:100%;display:block}
a{text-decoration:none;color:inherit}
.container{width:min(1120px,92%);margin-inline:auto}

.topnav{position:sticky;top:0;background:rgba(10,15,28,.92);backdrop-filter:blur(10px);box-shadow:0 2px 12px rgba(0,0,0,.5);z-index:50}
.nav-inner{display:flex;align-items:center;gap:20px;padding:14px 0}
.brand{font-size:1.4rem;font-weight:800}
.logo-blue{color:var(--blue)} .logo-yellow{color:var(--yellow)}
.nav-links{display:flex;align-items:center;gap:22px;margin-inline-start:auto;font-weight:600}
.nav-links a{color:#CBD5E1;transition:color .2s}
.nav-links a:hover{color:var(--blue)}
.nav-login{background:var(--blue);color:#fff !important;padding:9px 22px;border-radius:50px}
.nav-login:hover{background:#2563EB}
.nav-lang{border:2px solid var(--line);padding:7px 14px;border-radius:50px;font-size:.85rem}
.nav-toggle{display:none;background:none;border:none;font-size:1.6rem;cursor:pointer;color:var(--blue);margin-inline-start:auto}

.hero{background:linear-gradient(180deg,#0A0F1C 0%,#0F1626 100%);color:#fff;padding:90px 0;border-bottom:1px solid var(--line)}
.hero-grid{display:flex;align-items:center;gap:50px;flex-wrap:wrap}
.hero-text{flex:1 1 420px}
.hero h1{font-size:clamp(2rem,5vw,3.2rem);font-weight:800;line-height:1.25;margin-bottom:18px}
.hero p{color:#CBD5E1;font-size:1.1rem;margin-bottom:30px;max-width:560px}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap}
.btn-y{background:var(--yellow);color:#111827;padding:13px 30px;border-radius:50px;font-weight:700;transition:transform .2s}
.btn-y:hover{transform:translateY(-3px)}
.btn-o{border:2px solid rgba(255,255,255,.6);color:#fff;padding:13px 30px;border-radius:50px;font-weight:700;transition:background .2s}
.btn-o:hover{background:rgba(255,255,255,.12)}
.hero-card{flex:1 1 300px;background:var(--surface);border:1px solid var(--line);border-radius:20px;padding:34px;text-align:center;backdrop-filter:blur(6px)}
.hero-card .big{font-size:3rem}
.hero-card .line{height:10px;border-radius:6px;background:rgba(255,255,255,.35);margin:14px auto 0;width:80%}
.hero-card .line.s{width:55%}

section{padding:80px 0}
.sec-head{text-align:center;margin-bottom:44px}
.sec-head h2{font-size:clamp(1.6rem,3.5vw,2.3rem);font-weight:800;color:var(--blue-d)}
.sec-head p{color:var(--gray);margin-top:8px}
.alt{background:var(--bg)}

.about-grid{display:flex;gap:46px;align-items:center;flex-wrap:wrap}
.about-text{flex:1 1 420px}
.about-text h3{color:var(--blue);font-size:1.3rem;margin-bottom:14px}
.about-text p{color:#CBD5E1;margin-bottom:14px}
.features{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:14px;margin-top:22px}
.feature{background:var(--surface);border:2px solid var(--line);border-radius:14px;padding:16px;text-align:center;font-weight:700;color:var(--blue-d)}
.about-img{flex:1 1 320px;border-radius:20px;overflow:hidden;box-shadow:0 18px 40px rgba(0,0,0,.55)}

.table-card{background:var(--surface);border:2px solid var(--line);border-radius:18px;overflow:hidden;max-width:640px;margin:0 auto;box-shadow:0 12px 30px rgba(0,0,0,.45)}
.table-card table{width:100%;border-collapse:collapse}
.table-card th{background:var(--blue);color:#fff;padding:14px;font-weight:700;text-align:start}
.table-card td{padding:13px 16px;border-top:1px solid var(--line);text-align:start}
.table-card tr.break td{background:rgba(251,191,36,.12);color:#FCD34D;font-style:italic}
.sched-note{text-align:center;color:#FCD34D;background:rgba(251,191,36,.12);border:1px solid rgba(251,191,36,.4);border-radius:12px;padding:12px;max-width:640px;margin:18px auto 0}

.contact-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px}
.contact-card{background:var(--surface);border:2px solid var(--line);border-radius:16px;padding:26px;text-align:center;transition:transform .2s,border-color .2s}
.contact-card:hover{transform:translateY(-4px);border-color:var(--blue)}
.contact-card .ic{font-size:2rem}
.contact-card h4{color:var(--blue-d);margin:10px 0 6px}
.contact-card p{color:var(--gray)}

footer{background:#070B14;color:#CBD5E1;padding:60px 0 0}
.foot-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:34px;padding-bottom:40px}
.foot-grid h4{color:#fff;margin-bottom:16px;font-size:1.05rem}
.foot-grid a{display:block;color:#94A3B8;padding:5px 0;transition:color .2s}
.foot-grid a:hover{color:var(--yellow)}
.foot-brand p{color:#94A3B8;margin-top:12px;font-size:.95rem}
.foot-bottom{border-top:1px solid #1E293B;padding:18px 0;display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;font-size:.88rem}
.powered{font-size:.82rem;color:#64748B}
.powered a{color:var(--yellow);font-weight:700}
.powered a:hover{text-decoration:underline}

@media (max-width:900px){
.nav-toggle{display:block}
.nav-links{display:none;position:absolute;top:100%;inset-inline:0;background:#0F1626;flex-direction:column;align-items:stretch;padding:16px 4%;gap:4px;box-shadow:0 14px 30px rgba(0,0,0,.5)}
.nav-links.open{display:flex}
.nav-links a{padding:12px 10px;border-radius:10px}
.nav-login{text-align:center}
.nav-lang{text-align:center}
.hero{padding:60px 0}
section{padding:56px 0}
.foot-bottom{justify-content:center;text-align:center}
}
</style>
</head>
<body>

<nav class="topnav">
<div class="container nav-inner">
<a class="brand" href="index.php"><span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span></a>
<button class="nav-toggle" id="navToggle" aria-label="menu">☰</button>
<div class="nav-links" id="navLinks">
<a href="#home">Home</a>
<a href="#about">About</a>
<a href="gate.php?page=schedule">Schedule</a>
<a href="gate.php?page=holidays">Holidays</a>
<a href="#contact">Contact</a>

<a class="nav-login" href="login.php">🔐 Login</a>
</div>
</div>
</nav>

<header class="hero" id="home">
<div class="container hero-grid">
<div class="hero-text">
<h1>Welcome to SoliCode Log</h1>
<p>Your official digital gateway to connect with SoliCode center and discover our training programs and services for trainees and partners.</p>
<div class="hero-btns">
<a class="btn-y" href="#about">Discover More</a>

<a class="btn-o" href="https://solicode.co/" target="_blank" rel="noopener">Register at Center ↗</a>
</div>
</div>
<style>
.hero-card{padding:0;overflow:hidden;text-align:start}
.hero-card img{width:100%;height:320px;object-fit:cover;display:block}
.hero-caption{display:flex;align-items:center;gap:10px;padding:14px 18px;color:#E0E7FF;font-size:.95rem;font-weight:600}
.cap-dot{width:10px;height:10px;border-radius:50%;background:#34D399;flex:0 0 10px;animation:pulse-dot 2s infinite}
@media (max-width:900px){ .hero-card img{height:230px} }
</style>
<div class="hero-card">
<img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=900&h=650&fit=crop" alt="SoliCode Log">
<div class="hero-caption">
<span class="cap-dot"></span>
A secure official platform for affiliates — services access with an admin-issued account</div>
</div>
</div>
</header>

<section id="about">
<div class="container">
<div class="sec-head">
<h2>About SoliCode</h2>
<p>A leading training center dedicated to excellence in digital education</p>
</div>
<div class="about-grid">
<div class="about-text">
<h3>A leading training center dedicated to excellence in digital education</h3>
<p>SoliCode is a specialized training center located in the heart of Tangier, Morocco. We offer comprehensive programs in web development, mobile application development, and other digital fields, preparing our trainees for the demands of the modern job market.</p>
<p>Our mission is to provide high-quality, practical training that bridges the gap between education and professional life.</p>
<div class="features">
<?php foreach ($features as $feature): ?>
<div class="feature"><?= htmlspecialchars($feature, ENT_QUOTES, "UTF-8") ?></div>
<?php endforeach; ?>

</div>
</div>
<div class="about-img">
<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="SoliCode">
</div>
</div>
</div>
</section>


<section id="contact" class="alt">
<style>
.contact-wrap{display:flex;gap:34px;flex-wrap:wrap;align-items:stretch}
.map-box{flex:1 1 380px;min-height:340px;border-radius:18px;overflow:hidden;box-shadow:0 14px 34px rgba(0,0,0,.5)}
#scMap{width:100%;height:100%;min-height:340px}
.contact-info{flex:1 1 300px;display:flex;flex-direction:column;gap:14px}
.info-row{display:flex;gap:14px;align-items:flex-start;background:var(--surface);border:2px solid var(--line);border-radius:14px;padding:15px}
.info-row .ic{width:44px;height:44px;flex:0 0 44px;border-radius:12px;background:rgba(251,191,36,.12);display:flex;align-items:center;justify-content:center;font-size:1.3rem}
.info-row h4{color:var(--blue-d);margin:0 0 4px}
.info-row p{color:var(--gray);margin:0}
.socials{display:flex;gap:10px;justify-content:flex-end;margin-top:4px;flex-wrap:wrap}
[dir="rtl"] .socials{justify-content:flex-start}
.socials a{width:42px;height:42px;border-radius:12px;background:#1C2945;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;transition:background .2s}
.socials a:hover{background:var(--blue)}
</style>
<div class="container">
<div class="sec-head">
<h2>Contact Us</h2>
<p>Get in touch with SoliCode</p>
</div>
<div class="contact-wrap">
<div class="map-box"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.1868300078363!2d-5.822824037045183!3d35.74621242652113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87c216892bc7%3A0x48bdf85995e9c186!2sSolicode%20Tanger!5e0!3m2!1sar!2sma!4v1792752509553!5m2!1sar!2sma" width="100%" height="100%" style="border:0;min-height:340px;display:block" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe></div>
<div class="contact-info">
<div class="info-row"><div class="ic">📍</div><div><h4>Address</h4><p>Tangier, Morocco</p></div></div>
<div class="info-row"><div class="ic">📞</div><div><h4>Phone</h4><p>+212 5XX-XXXXXX</p></div></div>
<div class="info-row"><div class="ic">✉️</div><div><h4>Email</h4><p>contact@solicode.ma</p></div></div>
<div class="info-row"><div class="ic">🕐</div><div><h4>Working Hours</h4><p>Monday – Friday: 09:00 – 17:00</p></div></div>
<div class="socials">
<a href="#" aria-label="Facebook">f</a>
<a href="#" aria-label="Instagram">📷</a>
<a href="#" aria-label="LinkedIn">in</a>
<a href="#" aria-label="YouTube">▶</a>
<a href="#" aria-label="WhatsApp">💬</a>
</div>
</div>
</div>
</div>
</section>

<footer>
<div class="container">
<div class="foot-grid">
<div class="foot-brand">
<a class="brand" href="index.php"><span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span></a>
<p>The official digital platform of SoliCode center for communication and discovering our training programs. Internal services are available to affiliates with an admin-issued account.</p>
</div>
<div>
<h4>Quick Links</h4>
<a href="#home">Home</a>
<a href="#about">About Us</a>
<a href="gate.php?page=schedule">Schedule</a>
<a href="gate.php?page=holidays">Holidays</a>
<a href="#contact">Contact</a>
</div>
<div>
<h4>Legal</h4>
<a href="privacy.php">Privacy Policy</a>
<a href="terms.php">Terms of Service</a>
<a href="rules.php">Internal Regulations</a>
</div>
<div>
<h4>Resources</h4>
<a href="guide.php">Trainee Guide</a>
<a href="faq.php">FAQ</a>
<a href="support.php">Support</a>
<a href="index.php#contact">Sitemap</a>
</div>
</div>
<div class="foot-bottom">
<span>© 2026 SoliCode Log. All rights reserved.</span>
<span class="powered" dir="ltr" style="direction:ltr !important; unicode-bidi:embed;">Powered by <a href="https://www.instagram.com/anas._.bouker" target="_blank" rel="noopener">Anas Bouker</a></span>
</div>
</div>
</footer>
<script>
document.getElementById('navToggle').addEventListener('click', function () {
document.getElementById('navLinks').classList.toggle('open');
});
document.querySelectorAll('#navLinks a').forEach(function (a) {
a.addEventListener('click', function () {
document.getElementById('navLinks').classList.remove('open');
});
});</script>
</body>
</html>
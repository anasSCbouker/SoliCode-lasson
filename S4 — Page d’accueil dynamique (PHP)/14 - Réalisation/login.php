<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unified Login - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-body">
<div class="auth-wrapper">
<div class="auth-card fade-in visible">
<div class="alert" style="background:#16213A;color:#FBBF24;border:1px solid #3A4564;border-radius:12px;padding:12px 16px;margin-bottom:20px;">Coming soon - In progress as I learn.</div>
<div class="logo">
<span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span>
</div>
<h2 style="margin-bottom: 10px; color: var(--primary-blue);">Unified Login</h2>
<p style="color: var(--text-gray); margin-bottom: 30px; font-size: 0.95rem;">Enter your credentials to access your dashboard</p>
<form class="login-form">
<div class="form-group">
<label for="email">Email Address</label>
<input type="email" id="email" name="email" class="form-control" required autocomplete="email" placeholder="example@solicode.ma">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" name="password" class="form-control" required autocomplete="current-password">
</div>
<button type="button" class="btn btn-primary btn-full">Sign In</button>
</form>
<div class="auth-footer">
<a href="auth/forgot_password.php">Forgot Password?</a>
<span style="margin: 0 10px; color: #CBD5E1;">|</span>
<a href="index.php">Home</a>
</div>
<div style="margin-top: 20px;">

</div>
</div>
</div>
</body>
</html>
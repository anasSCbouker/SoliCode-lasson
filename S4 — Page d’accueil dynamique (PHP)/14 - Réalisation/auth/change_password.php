<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change password - SoliCode Log</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css"></head>
<body class="auth-body">
<div class="auth-wrapper"><div class="auth-card">
<div class="alert" style="background:#16213A;color:#FBBF24;border:1px solid #3A4564;border-radius:12px;padding:12px 16px;margin-bottom:20px;">Coming soon - In progress as I learn.</div>
    <div class="logo"><span class="logo-blue">SoliCode</span><span class="logo-yellow">Log</span></div>
    <h2 style="color:var(--primary-blue);">🔑 Change password</h2>
        <p style="color:var(--text-gray);font-size:.9rem;">Minimum 8 characters.</p>
    <form>
                <div class="form-group"><label>Current (temporary) password</label><input type="password" name="old_password" class="form-control" required autocomplete="current-password"></div>
        <div class="form-group"><label>New password</label><input type="password" name="new_password" class="form-control" required autocomplete="new-password"></div>
        <div class="form-group"><label>Confirm password</label><input type="password" name="confirm_password" class="form-control" required autocomplete="new-password"></div>
        <button type="button" class="btn btn-primary btn-full">Save & continue</button>
    </form>
</div></div>
</body></html>
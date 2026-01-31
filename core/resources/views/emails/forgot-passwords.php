<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body style="background:#f4f4f4; padding:30px; font-family:Arial">

<table width="100%">
<tr>
<td align="center">

<table width="600" style="background:#fff; padding:30px; border-radius:10px">
<tr>
<td align="center">

<h2>Reset Your Password</h2>

<p>Hello {{ $name }},</p>

<p>
You requested a password reset for your FinSphere Expo account.
Click the button below to reset your password.
</p>

<a href="{{ $resetUrl }}"
   style="display:inline-block;
          margin-top:20px;
          background:#e85a3c;
          color:#fff;
          padding:12px 30px;
          border-radius:6px;
          text-decoration:none;
          font-weight:bold">
RESET PASSWORD
</a>

<p style="margin-top:30px; font-size:12px; color:#777">
If you did not request this, please ignore this email.
</p>

</td>
</tr>
</table>

</td>
</tr>
</table>

</body>
</html>

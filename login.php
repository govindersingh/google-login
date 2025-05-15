<?php
session_start();
define('ALLOW_CONFIG_ACCESS', true);
require_once 'config.php';

$login_url = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login with Google</title>
<style>
  /* Reset some defaults */
  body, html {
    margin: 0; padding: 0; height: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f7f9fc;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .login-container {
    background: white;
    padding: 40px 60px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    text-align: center;
    max-width: 320px;
    width: 100%;
  }
  h1 {
    font-weight: 700;
    margin-bottom: 24px;
    color: #202124;
  }
  a.login-btn {
    display: inline-block;
    background-color: #4285F4;
    color: white;
    padding: 12px 24px;
    font-size: 18px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    box-shadow: 0 4px 10px rgba(66, 133, 244, 0.4);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }
  a.login-btn:hover, a.login-btn:focus {
    background-color: #357ae8;
    box-shadow: 0 6px 15px rgba(53, 122, 232, 0.6);
  }
  .info-text {
    margin-top: 20px;
    font-size: 14px;
    color: #5f6368;
  }
</style>
</head>
<body>

<div class="login-container">
  <h1>Sign in with Google</h1>
  <a href="<?= htmlspecialchars($login_url) ?>" class="login-btn" aria-label="Login with Google">Login with Google</a>
  <p class="info-text">You will be redirected to Google to authenticate securely.</p>
</div>

</body>
</html>

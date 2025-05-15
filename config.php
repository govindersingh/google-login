<?php
if (!defined('ALLOW_CONFIG_ACCESS')) {
  http_response_code(403);
  exit('Access denied.');
}

require_once __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig('client_secret.json'); // Path to your client_secret.json file
$client->setRedirectUri('http://localhost:8000/google-oauth.php'); // Change this to your redirect URI
$client->addScope("https://www.googleapis.com/auth/userinfo.email");
$client->addScope("https://www.googleapis.com/auth/userinfo.profile");
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

<?php
session_start();
define('ALLOW_CONFIG_ACCESS', true);
require_once 'config.php';

if (!isset($_GET['code'])) {
    http_response_code(403);
    exit('Access denied.');
}

if (isset($_GET['code'])) {
    try {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

        if (isset($token['error'])) {
            throw new Exception('❌ Google returned an error: ' . $token['error']);
        }

        $client->setAccessToken($token);
        $oauth = new Google_Service_Oauth2($client);
        $userinfo = $oauth->userinfo->get();

        $_SESSION['google_loggedin'] = true;
        $_SESSION['google_email'] = $userinfo->email;
        $_SESSION['google_name'] = $userinfo->name;
        $_SESSION['google_picture'] = $userinfo->picture;

        header('Location: profile.php');
        exit;

    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit;
}

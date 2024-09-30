<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Ensure the path is correct

session_start();

// Google client credentials
$clientID = '1067500891841-p86vaam4qbah71njorghgqceo187fika.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/IWT-Assignment-Y1S2/configurations/callback.php'; // Updated redirect URI

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

if (!isset($_GET['code'])) {
    // Redirect to Google login
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    // Authenticate using the code from Google
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Get user info
    $oauth = new Google_Service_Oauth2($client);
    $userInfo = $oauth->userinfo->get();

    // Example: Store user info in session
    $_SESSION['user_email'] = $userInfo->email;
    $_SESSION['user_name'] = $userInfo->name;

    // Redirect to dashboard
    header('Location: ../dashboard.php');
    exit();
}

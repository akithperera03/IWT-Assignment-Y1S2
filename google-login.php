<?php
require_once 'vendor/autoload.php'; 

session_start();


$clientID = '1067500891841-p86vaam4qbah71njorghgqceo187fika.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/IWT-Assignment-Y1S2/redirect.php';


$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');
$client->addScope('profile');


if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);
    $userInfo = $oauth2->userinfo->get();

   
    $_SESSION['email'] = $userInfo->email;
    $_SESSION['name'] = $userInfo->name;
    $_SESSION['picture'] = $userInfo->picture;

    
    header('Location: index.php');
    exit();
}


if (isset($_SESSION['email'])) {
    echo "Welcome " . $_SESSION['name'] . "!";
    echo "<img src='" . $_SESSION['picture'] . "'>";
    echo "<a href='logout.php'>Logout</a>";
    exit();
}


$loginUrl = $client->createAuthUrl();
header("Location: " . $loginUrl);
?>

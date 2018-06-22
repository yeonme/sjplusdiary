<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setRedirectUri('https://' . $_SERVER['HTTP_HOST'] . '/api/diary/oauth2callback.php');
$client->setScopes([Google_Service_PeopleService::PLUS_LOGIN, Google_Service_PeopleService::USER_EMAILS_READ]);

if (!isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect_uri = 'https://yeon.me/api/diary/login.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

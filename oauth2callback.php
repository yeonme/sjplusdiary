<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/api/diary/oauth2callback.php');
$client->addScope(Google_Service_PeopleService::PLUS_LOGIN);

if (!isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect_uri = 'http://yeon.me/api/diary/login.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

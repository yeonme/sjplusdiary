<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->addScope(Google_Service_PeopleService::CONTACTS_READONLY);
$client->setAccessType('offline');

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    // Get the API client and construct the service object.
    $service = new Google_Service_PeopleService($client);

    // Print the names for up to 10 connections.
    $optParams = array(
        'pageSize' => 10,
        'personFields' => 'names,emailAddresses',
    );
    $results = $service->people_connections->listPeopleConnections('people/me', $optParams);

    if (count($results->getConnections()) == 0) {
        echo "No connections found.\n";
    } else {
        echo "People:\n";
        foreach ($results->getConnections() as $person) {
            if (count($person->getNames()) == 0) {
                echo "No names found for this connection\n";
            } else {
                $names = $person->getNames();
                $name = $names[0];
                printf("%s\n", $name->getDisplayName());
            }
        }
    }

    //echo json_encode($files);
} else {
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/api/diary/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

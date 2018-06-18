<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->addScope(Google_Service_PeopleService::PLUS_LOGIN);
$client->setAccessType('offline');

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    // Get the API client and construct the service object.
    $service = new Google_Service_PeopleService($client);

    // Print the names for up to 10 connections.
    /*$optParams = array(
    'pageSize' => 10,
    'personFields' => 'names,emailAddresses',
    );*/
    $optParams = [
        //'personFields'=>'photos,names,nicknames,emailAddresses'
        'personFields' => 'addresses,ageRanges,biographies,birthdays,braggingRights,coverPhotos,emailAddresses,events,genders,imClients,interests,locales,memberships,metadata,names,nicknames,occupations,organizations,phoneNumbers,photos,relations,relationshipInterests,relationshipStatuses,residences,sipAddresses,skills,taglines,urls,userDefined',
    ];

    //$results = $service->people_connections->listPeopleConnections('people/me', $optParams);
    $results = $service->people->get('people/me', $optParams);

    //$results->getResourceName(); 고유 ID
    if (count($results->getPhotos()) > 0 && null !== ($results->getPhotos()[0]->getUrl())) { //프로필 사진
        echo "<img src=\"" . $results->getPhotos()[0]->getUrl() . "\">";
    }
    if (count($results->getNames()) > 0 && null !== ($results->getNames()[0]->getDisplayName())) { //표시 이름
        echo "<h1>" . $results->getNames()[0]->getDisplayName() . "</h1>";
    }
    if (count($results->getNicknames()) > 0 && null !== ($results->getNicknames()[0]->getValue())) { //값
        echo "<p>" . $results->getNicknames()[0]->getValue() . "</p>";
    }

    echo "<pre>";
    echo var_dump($results->getAddresses()) . "<br/>";
    echo var_dump($results->getAgeRanges()) . "<br/>";
    echo var_dump($results->getBiographies()) . "<br/>";
    echo var_dump($results->getBirthdays()) . "<br/>";
    echo var_dump($results->getBraggingRights()) . "<br/>";
    echo var_dump($results->getCoverPhotos()) . "<br/>";
    echo var_dump($results->getEmailAddresses()) . "<br/>";
    echo var_dump($results->getEtag()) . "<br/>";
    echo var_dump($results->getEvents()) . "<br/>";
    echo var_dump($results->getGenders()) . "<br/>";
    echo var_dump($results->getImClients()) . "<br/>";
    echo var_dump($results->getInterests()) . "<br/>";
    echo var_dump($results->getLocales()) . "<br/>";
    echo var_dump($results->getMemberships()) . "<br/>";
    echo var_dump($results->getMetadata()) . "<br/>";
    echo var_dump($results->getNames()) . "<br/>";
    echo var_dump($results->getNicknames()) . "<br/>";
    echo var_dump($results->getOccupations()) . "<br/>";
    echo var_dump($results->getOrganizations()) . "<br/>";
    echo var_dump($results->getPhoneNumbers()) . "<br/>";
    echo var_dump($results->getPhotos()) . "<br/>";
    echo var_dump($results->getRelations()) . "<br/>";
    echo var_dump($results->getRelationshipInterests()) . "<br/>";
    echo var_dump($results->getRelationshipStatuses()) . "<br/>";
    echo var_dump($results->getResidences()) . "<br/>";
    echo var_dump($results->getResourceName()) . "<br/>";
    echo var_dump($results->getSkills()) . "<br/>";
    echo var_dump($results->getTaglines()) . "<br/>";
    echo var_dump($results->getUrls()) . "<br/>";
    echo var_dump($results->getUserDefined()) . "<br/></pre>";

    echo "<br/>" . $results->getResourceName();

    /*if (count($results->getConnections()) == 0) {
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
    }*/

    //echo json_encode($files);
} else {
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/api/diary/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('955217751688-iejtfp76ck1q8eoiera43bmm4fespne6.apps.googleusercontent.com
');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('Your exact location where you want the code to be run');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
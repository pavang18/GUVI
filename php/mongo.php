<?php

require 'vendor/autoload.php'; 

use MongoDB\Client;




$client = new Client("mongodb://localhost:27017");
$database = $client->selectDatabase('guvi');
$collection = $database->selectCollection('profile_details');


$user_id = $_SESSION['user_id'];


$collection = $database->selectCollection('users');
$profileData = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($user_id)]);


echo json_encode(['profileData' => $profileData]);
?>

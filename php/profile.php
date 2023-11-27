<?php

require 'vendor/autoload.php'; 

use MongoDB\Client;


$client = new Client("mongodb://localhost:27017");


$database = $client->selectDatabase('guvi');
$collection = $database->selectCollection('profile_details');


$age = $_POST['age'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];


$userData = [
    'age' => $age,
    'dob' => $dob,
    'contact' => $contact,
];

$result = $collection->insertOne($userData);

if ($result->getInsertedCount() > 0) {
    echo 'Profile data saved successfully.';
} else {
    echo 'Error saving profile data in MongoDB.';
}
?>

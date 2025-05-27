<?php
session_start();
include_once '../../app/Classess/VehicleManager.php';

$newVehicle = [
    "name" => "Tesla Model S",
    "type" => "Electric",
    "price" => -1500,
    "image" => "https:\/\/shorturl.at\/2a8hm"
];

//add another 
// $newVehicle = [
//     "name" => "BMW i3",
//     "type" => "Electric",
//     "price" => 400002,
//     "image" => "https:\/\/shorturl.at\/Kn89z"
// ];

if(!empty($newVehicle['name']) && !empty($newVehicle['type']) && is_numeric($newVehicle['price']) && !empty($newVehicle['image'])){
    $vehicleManger = new VehicleManager('','','','');
    $vehicleManger->addVehicle($newVehicle);
    $_SESSION['message'] = 'New vehicle added successfully';
}else{
    $_SESSION['message'] = 'Failed. New vehicle not added';
}
header('location:../index.php');
exit;



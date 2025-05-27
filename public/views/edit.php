<?php
session_start();
include_once '../../app/Classess/VehicleManager.php';

$id = 0;
// $updatedVehicle = [
//     "name" => "Tesla Model S",
//     "type" => "Electric",
//     "price" => 79999,
//     "image" => "https:\/\/shorturl.at\/2a8hm"
// ];
//// another vehicle
$updatedVehicle= [
    "name" => "BMW i3",
    "type" => "Electric",
    "price" => 400002,
    "image" => "https:\/\/shorturl.at\/Kn89z"
];

$vehicleManger = new VehicleManager('','','','');
$vehicles = $vehicleManger->getVehicles();

if(!empty($updatedVehicle['name']) && !empty($updatedVehicle['type']) && is_numeric($updatedVehicle['price']) && !empty($updatedVehicle['image']) && in_array($vehicles[$id], $vehicles)){
    $vehicleManger = new VehicleManager('','','','');
    $vehicleManger->editVehicle($id, $updatedVehicle);
    $_SESSION['message'] = "Vehicle ID $id updated successfully";
}else{
    $_SESSION['message'] = 'Vehicle not found to update or invalid input';
}
header('location:../index.php');
exit;
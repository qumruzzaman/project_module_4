<?php
session_start();
include_once '../../app/Classess/VehicleManager.php';
$id = 2;

$vehicleManger = new VehicleManager('','','','');
$vehicles = $vehicleManger->getVehicles();

if(in_array($vehicles[$id], $vehicles)){
    $vehicleManger->deleteVehicle($id);
    $_SESSION['message'] = "Vehicle ID $id deleted successfully";
    }else{
    $_SESSION['message'] = 'Vehicle not found to delete';
    }
header('location:../index.php');
exit;
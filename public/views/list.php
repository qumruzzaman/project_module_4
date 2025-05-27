<?php

include_once '../../app/Classess/VehicleManager.php';

$vehicleManger = new VehicleManager('','','','');
$vehicles = $vehicleManger->getVehicles();

echo '<h3>Vehicle List</h3>';
echo "<a href='../index.php'>back to Index</a><br><br>";

if(!empty($vehicles)){
    foreach($vehicles as $index => $vehicle){
    echo 'ID: ' . $index . '<br>';
    echo 'Name: ' . $vehicle['name'] . '<br>';
    echo 'Type: ' . $vehicle['type'] . '<br>';
    echo 'Price: ' . $vehicle['price'] . '<br>';
    echo 'Image: ' . $vehicle['image'] . '<br>';
    echo '===========================' . '<br>';
}
}else{
    echo "No vehicle in the list";
}


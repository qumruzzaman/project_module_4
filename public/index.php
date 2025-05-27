<?php  
session_start();
require_once '../app/Classess/VehicleManager.php';

$vehicleManager = new VehicleManager('','','', '');
$vehicles = $vehicleManager->getVehicles();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Listing App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <h2>Vehicle Listing</h2>
        <p>Change code in VSCode to add, edit, and delete vehicle, then click the related button below.</p>
        
        <div class="text-center my-2 text-success" style="font-size:24px;">
            <?php
            echo $_SESSION['message'];
            $_SESSION['message'] = '';
            ?>
        </div>

        <div class="mb-3">
            <a href="views/add.php" class="btn btn-primary">Add Vehicle</a>
            <a href="views/edit.php" class="btn btn-warning">Edit Vehicle</a>
            <a href="views/delete.php" class="btn btn-danger">Delete Vehicle</a>
            <a href="views/list.php" class="btn btn-info">Vehicle List</a>
        </div>

        <h3>Vehicle List</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($vehicles)): ?>
                    <tr>
                        <td colspan="6" class="text-center">No vehicles found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($vehicles as $index=>$vehicle): ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo $vehicle['name']; ?></td>
                            <td><?php echo $vehicle['type']; ?></td>
                            <td><?php echo $vehicle['price']; ?></td>
                            <td><img src="<?php echo $vehicle['image']; ?>" alt="No Image" width="100"></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
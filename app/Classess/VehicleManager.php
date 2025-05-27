<?php
include_once 'VehicleBase.php';
include_once 'VehicleActions.php';
include_once 'FileHandler.php';


class VehicleManager extends VehicleBase implements VehicleActions{
    use FileHandler;
    // vehicle add method
    public function addVehicle($data){    
        $vehicles = $this->readFile();
        $vehicles[] = $data;
        $this->writeFile($vehicles);
    }
    //vehicle edit method
    public function editVehicle($id, $data){  
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            $vehicles[$id] = $data;
            $this->writeFile($vehicles);
        }
    }
    // vehicle delete method
    public function deleteVehicle($id){  
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            unset($vehicles[$id]);
            // rearrange ids with corresponding vehicles
            $vehicles = array_values(($vehicles)); 
            $this->writeFile($vehicles);

        }
    }
    // vehicle list method
    public function getVehicles(){  
        return $this->readFile();
    }
    function getDetails(){
        return [
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image
        ];
    }

}
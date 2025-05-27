<?php

trait FileHandler{
    private $filePath = __DIR__ . '/../../data/vehicles.json';
    // function to read json file
    public function readFile(){
        if(!file_exists($this->filePath)){
            file_put_contents($this->filePath, json_encode([]));
        }
        $data = file_get_contents($this->filePath);
        return $data ? json_decode($data, true) :[];
    }
    // function to write in json file
    public function writeFile(array $data_arr):void{
        file_put_contents($this->filePath, json_encode($data_arr, JSON_PRETTY_PRINT));
    }
}
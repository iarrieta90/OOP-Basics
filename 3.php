<?php
//Create an abstract class Device which defines an abstract method called 
//getDetail($deviceId).

//Create these two methods getId which returns the name of this device 
//and getSerialNo returns the serial number for this device.

abstract class Device1 {
    protected $name;
    protected $serialNo;

    abstract protected function getDetail($deviceId);

    public function __construct($name, $serialNo){
        $this->name = $name;
        $this->serialNo = $serialNo;
    }

    public function getId(){
        return $this->name;
    }
    public function getSerialNo(){
        return $this->serialNo;
    }
}

//Now create a class which extends the Device and implements 
//getDetail($deviceId) method. Each device defines in its own way the details. 
//That’s why it is abstracted to let the subclasses implement this method. 
//The other methods are common between devices.

class Mobile extends Device1 {
    protected $camera;
    public function __construct($name, $serialNo, $camera){
        parent::__construct($name, $serialNo);
        $this->camera = $camera;
    }


    public function getDetail($deviceId){
        return 
        " Device Id: " . $deviceId . 
        " Device name: " . $this->getId() . 
        " Serial No: " . $this->getSerialNo();
    }
}

class Tablet extends Device1 {
    protected $memory;
    public function __construct($name, $serialNo, $memory){
        parent::__construct($name, $serialNo);
        $this->memory = $memory;
    }
    public function getDetail($deviceId){
        return 
        " Device Id: " . $deviceId . 
        " Device name: " . $this->getId() . 
        " Serial No: " . $this->getSerialNo();
    }
}


$mobile = new Mobile('Samsung A5', 1234, 'Dual Camera');
$tablet = new Tablet('Galaxy Tab', 5678, '125GB');

echo $mobile->getDetail(1) ."<br>";
echo $tablet->getDetail(2) ."<br>";
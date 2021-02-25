<?php

//Then create another one called Mobile and then another one called Tablet.

//The Device has to define the common properties for a device, like, for 
//example, a method called  getSerialNumber() which returns the Device 
//serial number.

class Device {
    private $serialNumber;
    public function __construct($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    public function getSerialNumber(){
        return $this->serialNumber;
    }
    
}

//The Mobile and Tablet classes have to extend the Device class and 
//define some particular properties by their own. 

class Mobile extends Device {
    public $camera;
    public function __construct($serialNumber, $camera)
    {
        parent::__construct($serialNumber);
        $this->camera = $camera;
    }

}

class Tablet extends Device {
    public $memory;
    public function __construct($serialNumber, $memory)
    {
        parent::__construct($serialNumber);
        $this->memory = $memory;
    }
}

$mobile = new Mobile(1234,'Dual Camera');
$tablet = new Tablet(5678, '150GB');

echo $mobile->camera . '<br>';
echo $tablet->memory . '<br>';


//You should also create a class called DeviceManager. This class has to have
//a method called getDeviceSerialNumber(Device $device) which has to call the 
//getSerialNumber() method of Device objects.

class DeviceManager {
    public function getDeviceSerialNumber(Device $device)
    {
        return $device->getSerialNumber();
    }
}


//The DeviceManager Instance calls the getDeviceSerialNumber
//method with each one of the devices objects.

$deviceManager = new DeviceManager();

// $device = new Device(0001);
$mobile = new Mobile(1234,'Dual Camera');
$tablet = new Tablet(5678, '150GB');

// echo $deviceManager->getDeviceSerialNumber($device) . '<br>';
echo $deviceManager->getDeviceSerialNumber($mobile) . '<br>';
echo $deviceManager->getDeviceSerialNumber($tablet) . '<br>';

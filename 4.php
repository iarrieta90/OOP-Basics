<?php

//Now let’s create an interface for a Device repository.
//First create a Device class with some properties, as you like. 

class Device
{
    private $deviceId;
    private $name;
    private $model;
    private $memory;

    public function __construct($deviceId, $name, $model, $memory){
        $this->deviceId = $deviceId;
        $this->name = $name;
        $this->model = $model;
        $this->memory = $memory;
    }

    public function getId(){
        return $this->deviceId;
    }
}

//Then create an interface called DeviceRepository, which defines 
//two methods create(Device $device) which has an injection of the Device 
//class you have created, and findById($deviceId) which with the $deviceId 
//returns the Device object but remember this is an interface do not implement 
//methods, it just defines them. 


interface DeviceRepository
{
    public function create(Device $device);
    public function findById($deviceId);
}

//Now we need an implementation of the interface DeviceRepository so we are 
//going to create a class called MemoryRepository which implements the 
//DeviceRepository. Here you can define the methods as you like. 

class MemoryRepository implements DeviceRepository
{
    private $storage = [];
    public function create(Device $device)
    {
        array_push($this->storage, $device);
    }

    public function findById($deviceId)
    {
        foreach($this->storage as $device) {
            if ($device->getId() == $deviceId){
                return $device;
            }
        }
    }
}


//Finally we need to create a class called DeviceManager, which defines a method 
//addDevice(DeviceRepository $repository, Device $device).

class DeviceManager
{
    public function addDevice(DeviceRepository $repository, Device $device)
    {
        $repository->create($device);
    }
}

//Create an instance of it and inject to this method the implementation you have done.

$repository = new MemoryRepository();
$deviceManager = new DeviceManager();

$deviceManager->addDevice($repository, new Device(1,"mobile","Samsung A5", "125GB"));
$deviceManager->addDevice($repository, new Device(2,"mobile","Iphone X", "150GB"));
$deviceManager->addDevice($repository, new Device(3,"mobile","BQ Aquaris", "100GB"));

print_r($repository->findById(1)) . "<br>";
print_r($repository->findById(2)) . "<br>";
print_r($repository->findById(3)) . "<br>";


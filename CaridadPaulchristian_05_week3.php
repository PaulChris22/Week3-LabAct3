<?php
class Vehicle {
    public string $make;
    public string $model;
    protected int $year;
    
    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter for year
    protected function getYear(): int {
        return $this->year;
    }
}

class Car extends Vehicle {
    public int $doors;
    
    public function __construct(string $make, string $model, int $year, int $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }
    
    public function getInfo(): string {
        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->getYear() . 
               "\nThis is a car with " . $this->doors . " doors.";
    }
}

class Motorcycle extends Vehicle {
    public string $type;
    
    public function __construct(string $make, string $model, int $year, string $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }
    
    public function getInfo(): string {
        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->getYear() . 
               "\nThis is a motorcycle of type: " . $this->type . ".";
    }
}

class ElectricCar extends Car {
    public function __construct(string $make, string $model, int $year, int $doors) {
        parent::__construct($make, $model, $year, $doors);
    }
    
    public function getBatteryInfo(): string {
        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->getYear() . 
               "\nThis is an electric car with " . $this->doors . " doors.\nBattery charged to 100%.";
    }
}

// Example usage
$car1 = new Car("Toyota", "Corolla", 2022, 4);
echo $car1->getInfo() . "\n";

$motorcycle = new Motorcycle("Harley-Davidson", "Street 750", 2021, "Cruiser");
echo $motorcycle->getInfo() . "\n";

$electricCar = new ElectricCar("Tesla", "Model S", 2023, 4);
echo $electricCar->getBatteryInfo() . "\n";
?>
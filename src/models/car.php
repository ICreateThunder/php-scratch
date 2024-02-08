<?php 
    require "../utils/string.php";

class Car {
    public $make;
    public $model;
    private $vin;

    function __construct($make, $model) {
        $this->make = is_null($make) ? "Volkswagen" : "$make";
        $this->model = is_null($make) ? "Golf" : "$model" ;
        $this->vin = random_int(25565, 65565);
    }

    /**
     * @brief Function to format car properties and return formatted string
     *
     * @return Formatted string with car properties
     */
    function to_string() {
        return (string) (str_format(">> %12s - %-12s", "Object", "Car") . "make: $this->make, model: $this->model, vin: $this->vin");
    }

    // Getter for vin
    function get_vin() {
        return $this->vin;
    }

    // Setter for vin
    function set_vin($vin) {
        if (is_integer($vin)) {
            $this->vin = $vin;
        } else {
            print("[!] ERROR :: Vin number was not an integer, could not set");
        }
    }
}

?>

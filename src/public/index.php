<?php
  require "../defines.php";

  require "../utils/utils.php";
  require "../utils/debug.php";

  require_once "../models/car.php";

  // Create a instantiation
  $car_1 = new Car(NULL, NULL);
  $car_2 = new Car("Aston Martin", "DB9");
  $car_3 = new Car("Vauxhall", "Astra");

  $car_array = [$car_1, $car_2, $car_3];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <h1>PHP Scratch & Testing Area</h1>
    <?php if (DEBUG) echo debug_info(); ?>
    <div>
      <h2>Cars</h2>
      <div>
        <h3>[All Cars]</h3>
        <h4>Paragraphs</h4>
        <?php echo_objects_from_list($car_array); ?>
        <p>The paragraphs above demonstrates simple functions for iterating over an array, calling a method on an object, formatting a string and echoing output back to document</p>
        <h4>Ordered list</h4>
        <ol>
          <?php echo_objects_from_list_using_function($car_array, 'echo_object_items'); ?>
        </ol>
        <p>This ordered list demonstrates the same features/behaviour as the paragraph object echo adding function name passthrough and execution</p>
      </div>
      <div>
        <h3>[Mutability & Variables]</h3>
        <h4>Accessing data from an object</h4>
        <div>
          <p>Initial car_1 data:</p>
          <p>
            <?php echo $car_1->to_string(); ?>
          </p>
        </div>
        <div>
          <p>Initial car_1 data as individual variables:</p>
          <p>
            <?php 
              echo "make: $car_1->make, ";
              echo "model: $car_1->model, ";
              // echo "vin: $car_1->vin, "; - Due to variable being private, only accessible through setters and getters
              echo "vin: " . $car_1->get_vin();
            ?>
          </p>
        </div>
        <div>
          <p>>> Modifying car_1 data</p>
          <?php $car_1->model = "Fox"; ?>
        </div>
        <div>
          <p>Final car_1 data:</p>
          <p>
            <?php echo $car_1->to_string(); ?>
          </p>
        </div>
      </div>
      
    </div>
  </body>
</html>

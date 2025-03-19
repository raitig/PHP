<?php
// Define an associative array with fruits and their colors
$arr = array("Apple" => "Green", "Banana" => "yellow", "Cherry" => "red", "Dates" => "brown");

// Check if the form is submitted and a value is passed
if (isset($_POST['color'])) {
    $value = $_POST['color']; // Get the selected color value

    // Find the key corresponding to the selected color using array_search()
    $key = array_search($value, $arr);

    // Check if the key exists for the given value
    if ($key !== false) {
        echo "The key for value '$value' is: $key";
    } else {
        echo "No such element found";
    }
}
?>
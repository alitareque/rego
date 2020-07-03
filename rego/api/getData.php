<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../src/database.php';
include_once '../src/registrations.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// Get the Rego from the URI
$user_id = '';
if (isset($_GET['uid'])) {
    $user_id = trim($_GET['uid']);
    //Only allow Integer
    if (!filter_var($user_id, FILTER_VALIDATE_INT)) {
        // set response code - 404 Not found
        http_response_code(404);
        // tell the user no rego found
        echo json_encode(
            array("message" => "No rego found.")
        );
        die();
    }
}
  
// initialize rego object
$registrations = new Rego($db, $user_id);
  
// query rego
$result = $registrations->read();
$num = $result->rowCount();
  
// check if more than 0 record found
if ( $num > 0 ){
  
    // rego array
    $rego_arr = array();
    $rego_arr["registrations"] = array();
  
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $rego_item=array(
            "plate_number" => $plate_number,
            "registration" => array(
                               "expired" => $reg_expired,
                               "expiry_date" => $reg_exp_date ),
            "vehicle" => array(
                            "type" => $vehicle_type,
                            "make" => $vehicle_make,
                            "model" => $vehicle_model,
                            "colour" => $vehicle_colour,
                            "vin" => $vehicle_vin,
                            "tare_weight" => $vehicle_tare_weight,
                            "gross_mass" => $vehicle_gross_mass ),
            "insurer" => array(
                            "name" => $insurer_name,
                            "code" => $insurer_code )
        );
  
        array_push($rego_arr["registrations"], $rego_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
    // show products data in json format
    echo json_encode($rego_arr);
}
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no rego found
    echo json_encode(
        array("message" => "No rego found.")
    );
}

?>

<?php

/****************************************
*######## RESTful WEB SERVICE ##########*
*                                       *
* Client process the request VIA URL    *
* http://address.com/webservice.php?id=1*
* and gets the JSON result.             *
****************************************/
// Set Content-Type header to application/json
header("Content-Type:application/json");

// Check if the id has a value
if(!empty($_GET['id'])){
   $id=$_GET['id'];                 // Get the id value in the variable
   require_once("db_check.php");    // Require db_check.php file (check the id in the database and get the name and the price)

   if(empty($name) && empty($price)){ // If the name and the price are empty - id doesn't exist - car not found
       response(200, "car not found", NULL, NULL, NULL);
   }
   else{                                // If the name and the price aren't empty - id exists - car found
       response(200, "car found", $name, $price, $picture);
   }
}
else {                      // If the id is not set - request is not valid
   response(400, "Invalid request", NULL, NULL, NULL);
}

// Function for delivering a JSON response
function response($status,$status_message,$car_name,$price,$picture){
   // $response array
   $response['status']=$status;
   $response['status_message']=$status_message;
   $response['car_name']=$car_name;
   $response['price']=$price;
   $response['picture']=$picture;

   //Generating JSON from the $response array
   $json_response=json_encode($response);

   // Outputting JSON to the client
   echo $json_response;
}

?>
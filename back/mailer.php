<?php
header("Access-Control-Allow-Origin: *");
include 'class_libs/main.php';

// instiating a new object from class_libs/login using the register class
$act = new actions();
//getting user data the json way
$postdata = file_get_contents("php://input");
// decoding the json
$request = json_decode($postdata);

$subject = $request->subject;
$from = $request->from;
$people = $request->emails;
$people = explode(",",$people); 
$body =  $act->getTemplate();
$arr = array();
foreach ($people as $to) {
  $act->sendMail($to,$from,$body,$subject);
}

echo json_encode($people);
?>

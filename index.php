<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
 */

//At this point I already wish I used python.
include 'driver.php';
$driver = new Driver();
$data = json_decode(file_get_contents('php://input'), true);
$id= $data["message"]["chat"]["id"];
$text=$data["message"]["text"];


//sample data for the bot to use
// change to json data later
$products=array('Order parts','Request Service');

$firstMarkup=array('keyboard' => array(array($products[0]),array($products[1])));

print_r($driver->allmakes());

$makeMarkup = array(
    'keyboard' =>
    $driver->make()
);

//death by if statements
if ($text=='Order parts'){
    $driver->sendmessage($id, "Great! Tell us about your car");
    $driver->send_custom_keyboard($id, "Make", json_encode($makeMarkup));
    
}
elseif (in_array($text,$driver->allmakes())){
    $driver->send_custom_keyboard($id,"Model",json_encode($driver->model($text)));

}
else {
    // initial point where the text is not recognised by the if statement.
    $driver->send_custom_keyboard($id, "Which product would you like to use?", json_encode($firstMarkup));
}

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * How can I create my own licence?
 */

//At this point I already wish I used python.
include 'driver.php';
$driver = new Driver();
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$id= $data["message"]["chat"]["id"];
$text=$data["message"]["text"];
$contact=$data["message"]["contact"];
$all[]=$text;
$_SESSION['texts']=$all;
print_r($_SESSION['texts']);
//sample data for the bot to use
// change to json data later
$products=array('Order parts','Request Service');

$firstMarkup=array('keyboard' => array(array($products[0]),array($products[1])));

//print_r($driver->allmakes());

$makeMarkup = array(
    'keyboard' =>
    $driver->make()
);

$removeKeyboard=array('remove_keyboard' => true);

//death by if statements
if ($text=='Order parts'){
    $driver->sendMessage($id, "Great! Tell us about your car");
    $driver->send_custom_keyboard($id, "Make", json_encode($makeMarkup));
}
elseif (in_array($text,$driver->allmakes())){
    $driver->send_custom_keyboard($id,"Model",json_encode($driver->model($text)));
//    $driver->sendmessage($id,json_encode($_SESSION['texts']));
}
elseif (in_array($text,$driver->allmodels())){
    $driver->send_custom_keyboard($id,"Year",json_encode($removeKeyboard));
}
elseif (preg_match('~^\d{4}$~', $text)){
    $driver->sendMessage($id,"Nice! Now, Which part would you like to order?");

}
else {
    // initial point where the text is not recognised by the if statement.
    $driver->sendMessage($id,json_encode($contact));
    $driver->send_custom_keyboard($id, "Which product would you like to use?", json_encode($firstMarkup));
}

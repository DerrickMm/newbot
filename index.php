<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'driver.php';
$driver = new Driver();
$data = json_decode(file_get_contents('php://input'), true);

$id= $data["message"]["chat"]["id"];
$text=$data["message"]["text"];
//print_r($data);
$products=array('Order parts','Request Service');
$part= array("Volvo", "BMW", "Toyota","Nissan","Subaru","Jaguar","Mitsubishi");
$firstMarkup=array('keyboard' => array(array($products[0]),array($products[1])));

print_r($firstMarkup);
$replyMarkup = array(
    'keyboard' => array(
        array($part[0]),
        array($part[1]),
        array($part[2]),
        array($part[3]),
        array($part[4]),
        array($part[5]),
        array($part[6])
    )
);

if ($text=='Order parts'){
    $driver->sendmessage($id, "You selected:'$text', What is your car make,model and year?");
    $driver->send_custom_keyboard($id, "Make", json_encode($replyMarkup));
    
}
elseif (in_array($text,$part)){
    $driver->send_custom_keyboard($id,"model","");

}


else {
    $driver->send_custom_keyboard($id, "Which product would you like to use?", json_encode($firstMarkup));
}

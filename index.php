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
$make= array("Volvo", "BMW", "Toyota","Nissan","Subaru","Jaguar","Mitsubishi");
$model=array(array("volvo1","volvo2"), array("BMW1","BMW2"),array("toyota1","toyota2"),array());
$firstMarkup=array('keyboard' => array(array($products[0]),array($products[1])));

print_r(array(
    array($make[0]),
    array($make[1]),
    array($make[2]),
    array($make[3]),
    array($make[4]),
    array($make[5]),
    array($make[6])
));
print_r($driver->makemodel("Audi"));

$replyMarkup = array(
    'keyboard' => array(
        array($make[0]),
        array($make[1]),
        array($make[2]),
        array($make[3]),
        array($make[4]),
        array($make[5]),
        array($make[6])
    )
);
$modelmarkup=array(
    'keyboard' =>array(
        $driver->makemodel("Audi")
    )
);
//death by if statements
if ($text=='Order parts'){
    $driver->sendmessage($id, "Great! Tell us about your car");
    $driver->send_custom_keyboard($id, "Make", json_encode($replyMarkup));
    
}
elseif (in_array($text,$make)){
    $driver->send_custom_keyboard($id,"Model",$modelmarkup);

}
else {
    // initial point where the text is not recognised by the if statement.
    $driver->send_custom_keyboard($id, "Which product would you like to use?", json_encode($firstMarkup));
}

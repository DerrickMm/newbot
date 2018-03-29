<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of driver
 *
 * @author derrick.mungai
 */
class driver {
    //put your code here

    /**
     * @param $id
     * @param $text
     * @return mixed
     */
    public function sendmessage($id,$text){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot572620584:AAHOh9RVrlKn2bPZdSzXtljOxIt2Or5MOpc/sendMessage");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "chat_id=$id&text=$text");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
// receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
// further processing ....
        return $server_output;
    }

    /**
     * @param $id
     * @param $text
     * @param $markup
     * @return mixed
     */
    
    public function send_custom_keyboard($id,$text,$markup){
        
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot572620584:AAHOh9RVrlKn2bPZdSzXtljOxIt2Or5MOpc/sendMessage");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "chat_id=$id&text=$text&reply_markup=$markup");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
// receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
// further processing ....
        return $server_output;
    }
}
<?php

define("NOW", time());

// eitaa main class
class Eitaa {
    // properties
    public $token;
    public $channel_id;

    // methods
    function __construct($token, $channel_id) {
        $this->token = $token;
        $this->channel_id = $channel_id;
    }

    function sendMessage($text, $other=[]) {
        // send a message to channel
        $url = "https://eitaayar.ir/api/$this->token/sendMessage";
        $fields = array(
            "chat_id" => $this->channel_id,
            "text" => $text,
        );
        $fields += $other;
        $request = curl_init($url);
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($request, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($request);
        curl_close($request);
        return $output;
    }

}

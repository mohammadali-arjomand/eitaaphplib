<?php

// include library file in project
include "../eitaa.php";

// set token and channel id
$token = "bot16344:6d3e4430-****-****-****-************";
$channel_id = 23333622; // or use channel id like: "eitaa_faq" for https://eitaa.com/eitaa_faq/

// create object from EitaaPHP class
$eitaa = new EitaaPHP($token, $channel_id);

// use sendMessage method for send message in your channel or supergroup
$eitaa->sendMessage("hello, how are you?");
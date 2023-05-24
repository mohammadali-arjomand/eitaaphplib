<?php

// include library file in project
include "../eitaa.php";

// set token and channel id
$token = "bot16344:6d3e4430-****-****-****-************";
$channel_id = 23333622; // or use channel id like: "eitaa_faq" for https://eitaa.com/eitaa_faq/

// create object from EitaaPHP class
$eitaa = new EitaaPHP($token, $channel_id);

// set other
$other = [
    CAPTION => "hello, i take this photo", // set caption
    TITLE => "nature photo",  // set in eitaayar panel
    DISABLE_NOTIFICATION => false, // enable notification (it's default)
    REPLY_TO_MESSAGE_ID => 5, // reply to message id 5
    DATE => time() + 30, // send after 30 seconds
    PIN => true, // will pinned
    VIEW_COUNT_FOR_DELETE => 1000 // will deleted after 1k see
];

// use sendFile method for send file in your channel or supergroup
$eitaa->sendFile("./nature.jpg", $other);
<?php

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

}

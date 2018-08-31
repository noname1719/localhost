<?php

class GuestBookRecord{
    protected $message;
    function __construct($message)
    {
        $this->message = $message;
    }
    public function getMessage(){
        return $this->message;
    }
}
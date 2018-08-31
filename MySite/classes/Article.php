<?php
/**
 * Created by PhpStorm.
 * User: Reimu
 * Date: 14.08.2018
 * Time: 7:28
 */

class Article{
    protected $name;
    protected $message;
    protected $topic;
    protected $count;
    function __construct($message, $count)
    {
        $this->message = $message;
        $this->name = 'Новость номер '.$count;
        $this->topic = preg_split('[\.]',$this->message)[0];
        $this->count = $count;
    }
    public function getMessage(){
        return $this->message;
    }
    public function getTopic(){
        return $this->topic;
    }
    public function getName(){
        return $this->name;
    }
    public function getCount(){
        return $this->count;
    }
}
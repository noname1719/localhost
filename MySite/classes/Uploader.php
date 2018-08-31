<?php

class Uploader{
    protected $formFieldName;
    public function __construct($formFieldName)
    {
        $this->formFieldName = $formFieldName;
    }
    public function isUploaded(){
        if(isset($_FILES[$this->formFieldName])){
            return true;
        }else{
            return false;
        }
    }
    public function upload(){
        if($this->isUploaded()){
            move_uploaded_file($_FILES[$this->formFieldName]['tmp_name'],
                __DIR__.'/images/'.$_FILES[$this->formFieldName]['name']);
        }
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Reimu
 * Date: 13.08.2018
 * Time: 5:53
 */

class View
{
    protected $data = [];
    public function assign($name, $value){
        $this->data[$name] = $value;
    }

    public function render($template){
        foreach ($this->data as $var => $value){
            $$var = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template){
        echo $this->render($template);
    }
}


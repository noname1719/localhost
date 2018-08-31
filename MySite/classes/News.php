<?php
/**
 * Created by PhpStorm.
 * User: Reimu
 * Date: 14.08.2018
 * Time: 7:27
 */

require_once __DIR__.'/Article.php';

class News {

    protected $news = [];
    protected $path;
    protected $name;
    function __construct()
    {
        $count = 1;
        $this->path = __DIR__ . '/../news.txt';
        $data =  mb_split('@',file_get_contents($this->path));
        foreach ($data as $article){
            $this->news[] = new Article($article, $count);
            $count+=1;
        }

    }
    public function getRecords(){
        return $this->news;
    }
}
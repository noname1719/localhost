<?php
require_once __DIR__.'/classes/News.php';
require_once __DIR__.'/classes/View.php';
include __DIR__ . '/templates/header.html';
$news = new News();
$view = new View();
$template = __DIR__ . '/templates/article.php';


$view->assign('news', $news);
$test = $view->display($template);

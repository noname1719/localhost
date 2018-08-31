<?php

require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/View.php';
include __DIR__ . '/templates/header.html';

$guestBook = new GuestBook();
$view = new View();
$template = __DIR__ . '/templates/index.php';

$view->assign('guestBook', $guestBook);
$view->display($template);


<?php
// Class autoload
include_once "includes/classes.inc.php";
// index page
$model = new Poststable();
$view = new Index($model);
$view->GetHead();
$view->GetBody();
$view->GetFoot();

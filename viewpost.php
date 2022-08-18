<?php
// Class autoload
include_once "includes/classes.inc.php";
// viewpost page
$model = new Singlepoststable();
$view = new Viewpost($model, $_GET['id']);
$view->GetHead();
$view->GetBody();
$view->GetFoot();

<?php
// Class autoload
include_once "includes/classes.inc.php";
// about page

$view = new About();
$view->GetHead();
$view->GetBody();
$view->GetFoot();


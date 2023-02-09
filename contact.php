<?php
// Class autoload
include_once "includes/classes.inc.php";
// contact page

$view = new Contact();
$view->GetHead();
$view->GetBody();
$view->GetFoot();


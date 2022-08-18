<?php
// Class autoload
include_once "includes/classes.inc.php";
// Model usage
$model = new Poststable();
// View usage
$view = new Index($model);
$view->GetHead();
$view->GetPostsTable();
$view->GetFoot();

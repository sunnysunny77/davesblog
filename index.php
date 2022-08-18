<?php
// Class autoload
include_once "includes/classes.inc.php";
// Model usage
$model = new poststable();
// View usage
$view = new index($model);
$view->IndexHead();
$view->IndexPostsTable();
$view->IndexFoot();

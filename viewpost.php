<?php
// Class autoload
include_once "includes/classes.inc.php";
// Model usage
$model = new Singlepoststable();
// View usage
$view = new Viewpost($model,$_GET['id']);
$view->GetHead();
$view->GetSinglePostsTable();
$view->GetFoot();

<?php
include_once "includes/classes.inc.php";
$model = new poststable();
$view = new index($model);
$view->Head();
$view->ViewPostsTable();
$view->Foot();
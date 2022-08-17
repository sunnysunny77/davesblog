<?php
include "includes/classes.inc.php";

$model = new poststable();
$view = new index($model);
$view->ViewPostsTable();

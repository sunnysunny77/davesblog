<?php
// Class autoload
include_once "includes/classes.inc.php";
// index page
if (isset($_GET["action"]) && $_GET["action"] == "viewpost" && isset($_GET["id"])) {

    $model = new Blogposts();
    $view = new Viewpost($_GET['id'], $model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
$model = new Blogposts();
$view = new Index($model);
$view->GetHead();
$view->GetBody();
$view->GetFoot();

<?php
// Class autoload
include_once "includes/classes.inc.php";
// index page

// viewpost action
if (isset($_GET["action"]) && $_GET["action"] == "viewpost" && isset($_GET["id"])) {

    $model = new Blogposts();
    $view = new Viewpost($model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}

// root
$model = new Blogposts();
$view = new Index($model);
$view->GetHead();
$view->GetBody();
$view->GetFoot();

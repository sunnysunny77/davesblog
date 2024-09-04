<?php
// Class autoload
include_once "includes/classes.inc.php";
// index page

// search action
if (isset($_GET["action"]) && $_GET["action"] == "search" && isset($_POST['submit'])) {

    $model = new Blogposts();
    $controller = new Handlesearch($model);
    $output = $controller->GetLikeBlogPosts();
    $view = new Viewsearch($output);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}

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

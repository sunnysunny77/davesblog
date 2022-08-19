<?php
// Class autoload
include_once "includes/classes.inc.php";
// viewpost page
if (isset($_GET["action"]) && $_GET["action"] == "single") {

    $model = new Blogposts();
    $view = new Viewpost($_GET['id'], $model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
}

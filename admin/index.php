<?php
// Class autoload
include_once "../includes/classes.inc.php";
session_start();
// index admin page
if (isset($_POST['submit'])) {
    
    $model = new Authorization();
    $controller = new Handellogin($_POST['username'], $_POST['password'], $model);
    $message = $controller->HandelAuthorization(); 
}
if (!$_SESSION["loggedin"]) {

    $view = new Login($message);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
}
if ($_SESSION["loggedin"]) {

    $model = new Blogposts();
    $view = new Admin($model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
}
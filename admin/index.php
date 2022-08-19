<?php
// Class autoload
include_once "../includes/classes.inc.php";
session_start();
// index admin page
if (!$_SESSION["loggedin"] && isset($_GET['action']) && $_GET['action'] == "login" &&  isset($_POST['username']) &&  isset($_POST['password'])) {
    
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
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "logout") {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "users") {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "add") {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "edit" && isset($_GET["id"]) ) {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET["id"]) ) {

}
if ($_SESSION["loggedin"]) {

    $model = new Blogposts();
    $view = new Admin($model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
}
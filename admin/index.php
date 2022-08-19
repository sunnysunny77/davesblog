<?php
// Class autoload
include_once "../includes/classes.inc.php";
session_start();
// index admin page
if (!$_SESSION["loggedin"] && isset($_GET['action']) && $_GET['action'] == "login" &&  isset($_POST['submit'])) {
    
    $model = new Blogmembers();
    $controller = new Handellogin($_POST['username'], $_POST['password'], $model);
    $output = $controller->AuthorizeBlogMembers(); 
}
if (!$_SESSION["loggedin"]) {

    $view = new Login($output);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "logout") {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "users") {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "add" && isset($_POST['submit'])) {
    $model = new  Blogposts();
    $controller = new Handeladd($_POST,$model);
    $output = $controller->AddBlogPosts();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "add") {

    $view = new Add($output);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "edit" && isset($_GET["id"])) {

}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET["id"])) {

    $model = new Blogposts();
    $controller = new Handeldelete($_GET["id"], $model);
    $controller->DeleteBlogPosts(); 
}
if ($_SESSION["loggedin"]) {

    $model = new Blogposts();
    $view = new Admin($model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
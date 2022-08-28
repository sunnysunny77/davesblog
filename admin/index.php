<?php
// Class autoload
include_once "../includes/classes.inc.php";
// Session config
include_once "../includes/session.inc.php";
// admin/index page
// Login actions
if (!$_SESSION["loggedin"] && isset($_GET['action']) && $_GET['action'] == "login" && isset($_POST['submit'])) {

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

    session_destroy();
    header('Location: ./');
    exit();
}
// Users actions
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "adduser" && isset($_POST['submit'])) {

    $model = new Blogmembers();
    $controller = new Handeladduser($_POST, $model);
    $output = $controller->AddBlogMembers();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "adduser") {

    $view = new Adduser($output);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "edituser" && isset($_POST['submit']) && isset($_GET["id"])) {

    $model = new Blogmembers();
    $controller = new Handeledituser($_POST, $model);
    $output = $controller->EditUserBlogMembers();   
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "edituser" && isset($_GET["id"])) {

    $model = new Blogmembers();
    $view = new Edituser($_GET["id"], $output, $model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "users" && isset($_GET["id"])) {

    $model = new Blogmembers();
    $controller = new Handeldeleteuser($_GET["id"], $model);
    $output = $controller->DeleteUserBlogMembers();
}
// Users page root
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "users") {

    $model = new Blogmembers();
    $view = new Users($output, $model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();    
}
// Blog actions
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "add" && isset($_POST['submit'])) {

    $model = new Blogposts();
    $controller = new Handeladd($_POST, $model);
    $output = $controller->AddBlogPosts();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "add") {

    $view = new Add($output);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "edit" && isset($_POST['submit']) && isset($_GET["id"])) {

    $model = new Blogposts();
    $controller = new Handeledit($_POST, $model);
    $output = $controller->EditBlogPosts();
}
if ($_SESSION["loggedin"] && isset($_GET["action"]) && $_GET["action"] == "edit" && isset($_GET["id"])) {

    $model = new Blogposts();
    $view = new Edit($_GET["id"], $output, $model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}
if ($_SESSION["loggedin"] && isset($_GET["id"])) {

    $model = new Blogposts();
    $controller = new Handeldelete($_GET["id"], $model);
    $output = $controller->DeleteBlogPosts();
}
// blog page root
if ($_SESSION["loggedin"]) {

    $model = new Blogposts();
    $view = new Admin($output, $model);
    $view->GetHead();
    $view->GetBody();
    $view->GetFoot();
    exit();
}

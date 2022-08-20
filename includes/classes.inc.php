<?php
// Class autoloader
spl_autoload_register("autoloader");
function autoloader($class)
{

    $class = strtolower($class);

    $pathContorller = 'classes/controller/' . $class . ".class.php";
    $patView = 'classes/view/' . $class . ".class.php";
    $pathModel = 'classes/model/' . $class . ".class.php";
    $pathLibs = 'classes/libs/' . $class . ".class.php";

    if (file_exists($pathContorller)) {
        require_once $pathContorller;
    } elseif (file_exists($patView)) {
        require_once $patView;
    } elseif (file_exists($pathModel)) {
        require_once $pathModel;
    } elseif (file_exists($pathLibs)) {
        require_once $pathLibs;
    }

    $pathContorller = '../classes/controller/' . $class . ".class.php";
    $patView = '../classes/view/' . $class . ".class.php";
    $pathModel = '../classes/model/' . $class . ".class.php";
    $pathLibs = '../classes/libs/' . $class . ".class.php";

    if (file_exists($pathContorller)) {
        require_once $pathContorller;
    } elseif (file_exists($patView)) {
        require_once $patView;
    } elseif (file_exists($pathModel)) {
        require_once $pathModel;
    } elseif (file_exists($pathLibs)) {
        require_once $pathLibs;
    }

}

<?php
// Class autoloader
spl_autoload_register("autoloader");
function autoloader($class)
{

    $class = strtolower($class);

    $path = "classes/" . $class . ".class.php";

    if (file_exists($path)) {

        require_once $path;
    }

    $path = "../classes/" . $class . ".class.php";

    if (file_exists($path)) {

        require_once $path;
    }
}

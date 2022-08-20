<?php
/**
 * Login View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 * @property private $output Holds message for body
 *
 */
class Login
{

    private $root = "../";
    private $title = "Admin Login";
    private $output;

    public function __construct($output)
    {

        $this->output = $output;
    }

    public function GetHead()
    {
        
        include_once "../components/head.html.php";
    }

    public function GetBody()
    {

        include_once "../components/loginform.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("../components/foot.html");
    }
}

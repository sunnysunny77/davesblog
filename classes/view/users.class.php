<?php
/**
 * Users View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogmembers model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $output Holds message for body
 *
 */
class Users
{

    private $result;
    private $root = "../";
    private $title = "Admin - Users";
    private $output;

    public function __construct($output, $model)
    {

       $this->result = $model->GetUsersBlogMembers();
       $this->output = $output;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {
    
        include_once "../components/users.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("../components/deleteuserscript.html");
        include_once "../components/foot.html.php";
    }
}

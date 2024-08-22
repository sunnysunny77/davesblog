<?php
/**
 * Edituser View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogmembers model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $output Holds message for body
 *
 */
class Edituser
{

    private $result;
    private $root = "../";
    private $title = "Admin - Edit User";
    private $output;

    public function __construct($output, $model)
    {
        $this->result = $model->GetUserBlogMembers($_GET["id"]); 
        $this->output = $output;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {

        include_once "../components/edituserform.html.php";
    }

    public function GetFoot()
    {
        include_once "../components/foot.html.php";
    }
}

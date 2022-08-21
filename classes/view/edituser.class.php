<?php
/**
 * Edituser View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
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

    public function __construct($memberID, $output, $model)
    {
        $this->result = $model->GetUserBlogMembers($memberID); 
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
        echo file_get_contents("../components/foot.html");
    }
}

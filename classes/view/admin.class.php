<?php
/**
 * Admin View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $output Holds message for body
 *
 */
class Admin
{

    private $result;
    private $root = "../";
    private $title = "Admin";
    private $output;

    public function __construct($output, $model)
    {

        $this->result = $model->GetAdminBlogPosts();
        $this->output = $output;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {
    
        include_once "../components/admin.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("../components/deletescript.html");
        include_once "../components/foot.html.php";
    }
}

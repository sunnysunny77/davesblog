<?php
/**
 * Admin View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 *
 */
class Admin
{

    private $result;
    private $root = "../";
    private $title = "Admin";

    public function __construct($model)
    {

        $this->result = $model->GetAdminBlogPosts();
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
        echo file_get_contents("../components/foot.html");
    }
}

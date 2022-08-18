<?php
/**
 * Admin View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 *
 */
class Admin
{

    private $model;
    private $root = "../";
    private $title = "Admin";

    public function __construct($model)
    {

        $this->model = $model;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {
        
        $result = $this->model->GetBlogPosts();
    
        include_once "../components/admin.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("../components/script.html");
        echo file_get_contents("../components/foot.html");
    }
}

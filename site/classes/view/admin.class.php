<?php
/**
 * Admin View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $output Holds message for body
 * @property private $page Holds page for the link
 *
 */
class Admin
{

    private $result;
    private $root = "../";
    private $title = "Admin";
    private $output;
    private $page;

    public function __construct($output, $model)
    {

        $result = $model->GetAdminBlogPosts();
        $this->result = empty($result) ? false : array_chunk($result, 5, true);
        $this->output = $output;
        $this->page = isset($_GET["page"]) ? '&page=' . $_GET["page"] : '&page=' . 1;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {
    
        include_once "../components/admin.html.php";
        include_once "../components/pages.html.php";
        include_once "../components/top.html";
    }

    public function GetFoot()
    {

        include_once "../components/foot.html.php";
    }
}

<?php
/**
 * Index View for index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $page Holds page for the link
 *
 */
class Index
{

    private $result;
    private $root = "./";
    private $title = "Blog";
    private $page;

    public function __construct($model)
    {
    
        $result = $model->GetIndexBlogPosts();
        $this->result = empty($result) ? false : array_chunk($result, 5, true);
        $this->page = isset($_GET["page"]) ? '&page=' . $_GET["page"] : '&page=' . 1;
    }

    public function GetHead()
    {

        include_once "components/headsearch.html.php";
    }

    public function GetBody()
    {

        include_once "components/index.html.php";
        include_once "components/pages.html.php";
        include_once "components/top.html";
    }

    public function GetFoot()
    {

        include_once "components/foot.html.php";
    }
}

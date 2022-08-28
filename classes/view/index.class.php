<?php
/**
 * Index View for index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 *
 */
class Index
{

    private $result;
    private $root = "./";
    private $title = "Blog";

    public function __construct($model)
    {
    
        $this->result = $model->GetIndexBlogPosts(); 
    }

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        include_once "components/index.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

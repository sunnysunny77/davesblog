<?php
/**
 * Index View for index.php
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 *
 */
class Index
{

    private $model;
    private $root = "./";
    private $title = "Blog";

    public function __construct($model)
    {

        $this->model = $model;
    }

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        $result = $this->model->GetIndexPostsTable();

        include_once "components/index.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

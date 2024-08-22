<?php
/**
 * Viewpost View for index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 *
 */
class Viewpost
{

    private $result;
    private $root = "./";
    private $title;

    public function __construct($model)
    {

        $this->result = $model->GetViewPostBlogPosts($_GET['id']);

        $id = isset($this->result->errorInfo) ? true : $this->result['postID'];

        if (!$id) {

            return header('Location: ./');
        }

        $this->title = isset($this->result->errorInfo) ?  "Blog" : "Blog - " . $this->result['postTitle'];
    }

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        include_once "components/viewpost.html.php";
    }

    public function GetFoot()
    {

        include_once "components/foot.html.php";
    }
}

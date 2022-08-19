<?php
/**
 * Viewpost View for viewpost.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 *
 */
class Viewpost
{

    private $result;
    private $root = "./";
    private $title;

    public function __construct($postID, $model)
    {

        $this->result = $model->GetViewPostBlogPosts($postID);

        if (!$this->result) {

            header('Location: ./');
            exit;
        }
        
        $this->result->errorInfo ? $this->title = "Blog" : $this->title = "Blog - " . $this->result['postTitle'];
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

        echo file_get_contents("components/foot.html");
    }
}

<?php
/**
 * Viewpost View for viewpost.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Singlepoststable model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 *
 */
class Viewpost
{

    private $result;
    private $root = "./";
    private $title = "Blog";

    public function __construct($model, $postID)
    {

        $this->result = $model->GetSinglePostsTable($postID);

        if (!$this->result->errorInfo) {

            $this->title = "Blog - " . $this->result['postTitle'];
        }
    }

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        $result = $this->result;
        
        if (!$result) {

            header('Location: ./');
            exit;
        }

        include_once "components/viewpost.html.php";
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

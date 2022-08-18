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

        if (!$this->result) {

            header('Location: ./');
            exit;
        }

        echo "<div id='wrapper'>
            <h1>Blog</h1>
            <hr />";

        if ($this->result->errorInfo) {

            echo $this->result->getMessage();
            echo '</div>';
            header("Refresh:5; url=./");
            exit;
        }

        echo "<p>
                <a href='./'>Blog Index</a>
            </p>";

        echo '<div>';
        echo '<h1>' . $this->result['postTitle'] . '</h1>';
        echo '<p>Posted on ' . date('jS M Y', strtotime($this->result['postDate'])) . '</p>';
        echo '<p>' . $this->result['postCont'] . '</p>';
        echo '</div>';
        echo '</div>';
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

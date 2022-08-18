<?php
/**
 * Viewpost presents the viewpost page
 *
 * @author Daniel Costello
 * @property private $result Holds result constructed from the model parameter
 * @property private $title Holds title from the result for the html head page title
 *
 */
class Viewpost
{

    private $result;
    private $title;

    public function __construct($model, $postID)
    {

        $this->result = $model->GetSinglePostsTable($postID);
        $this->title = "Blog - " . $this->result['postTitle'];
    }

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetSinglePostsTable()
    {

        if ($this->result['postID'] == '') {

            header('Location: ./');
            exit;
        }
    
        echo    "<p>
                    <a href='./'>Blog Index</a>
                </p>";

        echo '<div>';
        echo '<h1>' . $this->result['postTitle'] . '</h1>';
        echo '<p>Posted on ' . date('jS M Y', strtotime($this->result['postDate'])) . '</p>';
        echo '<p>' . $this->result['postCont'] . '</p>';
        echo '</div>';
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

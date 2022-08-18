<?php
/**
 * Index View for index.php
 *
 * @author Daniel Costello
 * @property private $model Holds the Poststable model
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

        $result = $this->model->GetPostsTable();

        echo "<div id='wrapper'>
        <h1>Blog</h1>
        <hr />";

        if ($result->errorInfo) {

            echo $result->getMessage();
            exit();
        }

        foreach ($result as $row) {

            echo '<div>';
            echo '<h1><a href="viewpost.php?id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h1>';
            echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
            echo '<p>' . $row['postDesc'] . '</p>';
            echo '<p><a href="viewpost.php?id=' . $row['postID'] . '">Read More</a></p>';
            echo '</div>';
        }

        echo '</div>';
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

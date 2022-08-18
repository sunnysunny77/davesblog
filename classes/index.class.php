<?php
/**
 * Index presents the index page
 *
 * @author Daniel Costello
 * @property private $model Holds the Poststable model
 * @property private $title Holds the html head page title
 *
 */
class Index
{

    private $model;
    public $title = "Blog";

    public function __construct($model)
    {

        $this->model = $model;
    }

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetPostsTable()
    {

        $result = $this->model->GetPostsTable();

        foreach ($result as $row) {

            echo '<div>';
            echo '<h1><a href="viewpost.php?id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h1>';
            echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
            echo '<p>' . $row['postDesc'] . '</p>';
            echo '<p><a href="viewpost.php?id=' . $row['postID'] . '">Read More</a></p>';
            echo '</div>';
        }
    }

    public function GetFoot()
    {

        echo file_get_contents("components/foot.html");
    }
}

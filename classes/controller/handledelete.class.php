<?php
/**
 * Handledelete controlls the delete action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $postID Holds get value for postID
 *
 */
class Handledelete
{

    private $model;
    private $postID;

    public function __construct($postID, $model)
    {

        $this->model = $model;
        $this->postID = $postID;
    }

    public function DeleteBlogPosts()
    {

        $result = $this->model->SetDeleteBlogPosts($this->postID);

        if (isset($result->errorInfo)) {

            return $result;
        }

        if (isset($result)) {

            return "Post deleted.";
        }
    }
}

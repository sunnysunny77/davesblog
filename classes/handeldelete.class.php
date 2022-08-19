<?php
/**
 * Handeldelete controlls the delete action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $postID Holds get value for postID
 *
 */
class Handeldelete extends Password
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

        $result = $this->model->DeleteAdminBlogPosts($this->postID);

        if ($result->errorInfo) {

           return $result->getMessage();
        }

        if ($result) {

          return 'Post deleted.';
        }
    }
}

<?php
/**
 * Handeldeleteuser controlls the deleteuser action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $postID Holds get value for postID
 *
 */
class Handeldeleteuser
{

    private $model;
    private $postID;

    public function __construct($postID, $model)
    {

        $this->model = $model;
        $this->postID = $postID;
    }

    public function DeleteUserBlogMembers()
    {

        $result = $this->model->SetDeleteUserBlogMembers($this->postID);

        

        if ($result->errorInfo) {

            return header("Location: ./?action=users&error=" . $result->getMessage());
        }

        if ($result) {

            return header("Location: ./?action=users&output=User deleted.");
        }
    }
}

<?php
/**
 * Handledeleteuser controlls the deleteuser action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogmembers model
 * @property private $postID Holds get value for postID
 *
 */
class Handledeleteuser
{

    private $model;
    private $postID;

    public function __construct($model)
    {

        $this->model = $model;
        $this->postID = $_GET["id"];
    }

    public function DeleteUserBlogMembers()
    {

        if ($this->postID == 1) { 

            return;
        } 

        $result = $this->model->SetDeleteUserBlogMembers($this->postID);

        if (isset($result->errorInfo)) {

            return $result;
        }

        if (isset($result)) {

            return "User deleted.";
        }
    }
}

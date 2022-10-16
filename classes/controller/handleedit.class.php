<?php
/**
 * Handleedit controlls the edit action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $post Holds the $_POST object
 *
 */
class Handleedit
{

    private $model;
    private $post;

    public function __construct($model)
    {

        $this->model = $model;
        $this->post = $_POST;
    }

    public function EditBlogPosts()
    {

        $_POST = array_map('stripslashes', $this->post);

        extract($_POST);

        if ($postID == '') {
            $error[] = 'This post is missing a valid id!.';
        }

        if ($postTitle == '') {
            $error[] = 'Please enter the title.';
        }

        if ($postDesc == '') {
            $error[] = 'Please enter the description.';
        }

        if ($postCont == '') {
            $error[] = 'Please enter the content.';
        }

        if (isset($error)) {

            return $error;
        }

        if (!isset($error)) {

            $result = $this->model->SetEditBlogPosts($postTitle, $postDesc, $postCont, $postID);

            if (isset($result->errorInfo)) {

                return header("Location: ./?error=" . $result->getMessage());
            }

            if (isset($result)) {

                return header("Location: ./?output=Post updated.");
            }
        }
    }
}

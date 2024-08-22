<?php
/**
 * Handleedit controlls the edit action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $post Holds the $_POST object
 * @property private $files Holds the $_FILES object
 *
 */
class Handleedit
{

    private $model;
    private $post;
    private $files;

    public function __construct($model)
    {

        $this->model = $model;
        $this->post = $_POST;
        $this->files = $_FILES;
    }

    public function EditBlogPosts()
    {

        $_POST = array_map('stripslashes', $this->post);

        extract($_POST);

        $uploadname = $this->files["upload"]["name"];
        $uploadtype = $this->files["upload"]["type"];
        $uploaddata = $this->files["upload"]["tmp_name"] ? file_get_contents($this->files["upload"]["tmp_name"]) : false;

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

        if ($uploaddata && !in_array($uploadtype, ['image/png', 'image/jpeg'])) {
            $error[] =  "png OR jpg files allowed.";
        }

        if (isset($error)) {

            return $error;
        }

        if (!isset($error)) {

            if ($uploaddata) {

                $result = $this->model->SetEditBlogPostsImage($postTitle, $postDesc, $postCont, $postID, $uploadtype, $uploadname, $uploaddata);
            } else {

                $result = $this->model->SetEditBlogPosts($postTitle, $postDesc, $postCont, $postID);
            }

            if (isset($result->errorInfo)) {

                return header("Location: ./?error=" . $result->getMessage());
            }

            if (isset($result)) {

                return header("Location: ./?output=Post updated.");
            }
        }
    }
}

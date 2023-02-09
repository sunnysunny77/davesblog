<?php
/**
 * Handleadd controlls the add action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $post Holds the $_POST object
 *
 */
class Handleadd
{

    private $model;
    private $post;

    public function __construct($model)
    {

        $this->model = $model;
        $this->post = $_POST;
    }

    public function AddBlogPosts()
    {

        $_POST = array_map('stripslashes', $this->post);

        extract($_POST);

        $uploadname = $_FILES["upload"]["name"];
        $uploadtype = $_FILES["upload"]["type"];
        $uploaddata = $_FILES["upload"]["tmp_name"] ? file_get_contents($_FILES["upload"]["tmp_name"]) : false;

        if ($postTitle == '') {
            $error[] = 'Please enter the title.';
        }

        if ($postDesc == '') {
            $error[] = 'Please enter the description.';
        }

        if ($postCont == '') {
            $error[] = 'Please enter the content.';
        }

        if (!$uploaddata) {
            $error[] =  "There was no file uploaded.";
        }

        if (!in_array($uploadtype, ['image/png', 'image/jpeg'])) {
            $error[] =  "png OR jpg files allowed.";
        }

        if (isset($error)) {

            return $error;
        }

        if (!isset($error)) {

            $result = $this->model->SetAddBlogPosts($postTitle, $postDesc, $postCont, $uploadtype, $uploadname, $uploaddata);

            if (isset($result->errorInfo)) {

                return header("Location: ./?error=" . $result->getMessage());
            }

            if (isset($result)) {

                return header("Location: ./?output=Post added.");
            }
        }
    }
}

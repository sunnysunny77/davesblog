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

        if ($postTitle == '') {
            $error[] = 'Please enter the title.';
        }

        if ($postDesc == '') {
            $error[] = 'Please enter the description.';
        }

        if ($postCont == '') {
            $error[] = 'Please enter the content.';
        }

        if (!is_uploaded_file($_FILES["upload"]["tmp_name"])) {
            $error[] =  "There was no file uploaded.";
        }

        if (isset($error)) {

            return $error;
        }

        if (!isset($error)) {

            $uploadfile = $_FILES["upload"]["tmp_name"];
            $uploadname = $_FILES["upload"]["name"];
            $uploadtype = $_FILES["upload"]["type"];
            $uploaddata = file_get_contents($uploadfile);
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

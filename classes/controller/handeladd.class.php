<?php
/**
 * Handeladd controlls the add action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $post Holds the $_POST object
 *
 */
class Handeladd
{

    private $model;
    private $post;

    public function __construct($post, $model)
    {

        $this->model = $model;
        $this->post = $post;
    }

    public function AddBlogPosts()
    {

        $_POST = array_map( 'stripslashes', $this->post );

        extract($_POST);

        if($postTitle ==''){
            $error[] = 'Please enter the title.';
        }
    
        if($postDesc ==''){
            $error[] = 'Please enter the description.';
        }
    
        if($postCont ==''){
            $error[] = 'Please enter the content.';
        }

        if(isset($error)){

            return $error;
        }
    
        if(!isset($error)){

            $result = $this->model->SetAddBlogPosts($postTitle, $postDesc, $postCont);

            if ($result->errorInfo) {
     
                return header("Location: ./?error=" . $result->getMessage());
             }

             if ($result) {
    
                return header("Location: ./?output=Post added.");
              }
        }
    }
}

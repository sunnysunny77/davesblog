<?php
/**
 * Handlesearch controlls the search action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $search Holds post value for search
 *
 */
class Handlesearch
{

    private $model;
    private $search;

    public function __construct($model)
    {

        $this->model = $model;
        $this->search = trim($_POST['search']);
    }

    public function GetLikeBlogPosts()
    {

        $result = $this->model->GetViewLikeBlogPosts($this->search);

        if (isset($result->errorInfo)) {

            return $result->getMessage();
        }

        return  $result;
    }
}

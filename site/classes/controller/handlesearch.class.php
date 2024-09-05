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

        $result = [];
        $search = explode(" ", $this->search);
        $count = count($search) - 1;

        for ($index = 0; $index <= $count; $index++) {

            $result[$index] = $this->model->GetViewLikeBlogPosts($search[$index]);
        }

        if (isset($result->errorInfo)) {

            return $result->getMessage();
        }

        return  $result;
    }
}

<?php
/**
 * Add View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 * @property private $output Holds message for body
 *
 */
class Add
{

    private $result;
    private $root = "../";
    private $title = "Admin - Add Post";
    private $output;

    public function __construct($output)
    {
        
        $this->output = $output;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {

        include_once "../components/addform.html.php";
    }

    public function GetFoot()
    {
        echo file_get_contents("../components/foot.html");
    }
}

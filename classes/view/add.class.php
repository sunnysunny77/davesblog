<?php
/**
 * Add View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $output Holds message for body
 *
 */
class Add
{

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
        
        include_once "../components/foot.html.php";
    }
}

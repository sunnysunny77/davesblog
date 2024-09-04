<?php
/**
 * Viewsearch View for index.php
 *
 * @author Daniel Costello
 * @property private $result Holds result from the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 *
 */
class Viewsearch
{

    private $result;
    private $root = "./";
    private $title = "Blog - Search";

    public function __construct($output)
    {

        $this->result = empty($output) ? false : $output;
    }

    public function GetHead()
    {

        include_once "components/headsearch.html.php";
    }

    public function GetBody()
    {

        include_once "components/viewsearch.html.php";

        if (!empty($this->result)) {

            include_once "components/top.html";
        }
    }

    public function GetFoot()
    {
        
        include_once "components/foot.html.php";
    }
}

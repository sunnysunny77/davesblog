<?php
/**
 * Index View for about.php
 *
 * @author Daniel Costello
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 *
 */
class About
{

    private $root = "./";
    private $title = "Blog";

    public function GetHead()
    {
        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        include_once "components/about.html";
    }

    public function GetFoot()
    {

        include_once "components/foot.html.php";
    }
}

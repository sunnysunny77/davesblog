<?php
/**
 * Index View for about.php
 *
 * @author Daniel Costello
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $preload Holds image preload value for the head
 *
 */
class About
{

    private $root = "./";
    private $title = "Blog";
    private $preload = "<link rel='preload' as='image' href='../images/about.webp'>";

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

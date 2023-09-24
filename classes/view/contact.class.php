<?php
/**
 * Index View for contact.php
 *
 * @author Daniel Costello
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 * @property private $preload Holds image preload value for the head
 *
 */
class Contact
{

    private $root = "./";
    private $title = "Blog";
    private $preload = "<link rel='preload' as='image' href='../images/contac.webp'>";

    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        include_once "components/contact.html";
    }

    public function GetFoot()
    {

        echo file_get_contents("./components/contactscript.html");
        include_once "components/foot.html.php";
    }
}

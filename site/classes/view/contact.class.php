<?php
/**
 * Index View for contact.php
 *
 * @author Daniel Costello
 * @property private $root Holds root directory for the head
 * @property private $title Holds title for the head
 *
 */
class Contact
{

    private $root = "./";
    private $title = "Blog";
    private $heading_prop = false;
    private $paragraph_prop = false;


    public function GetHead()
    {

        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        $this->heading_prop = "Apollo";
        $this->paragraph_prop = "But a rock of all sizes and shapes, fragments of all sizes and shapes,
        and even colors that have grown together to become a cohesive rock outlasting the nature of Space, 
        sort of living together in a very coherent, very peaceful manner. 
        When we return this rock or some of the others like it to Houston, 
        we'd like to share a piece of this rock with so many of the countries throughout the world.";

        include_once "components/contact.html";
        include_once "components/pagefull.html.php";
        include_once "components/top.html";
    }

    public function GetFoot()
    {

        include_once "components/foot.html.php";
    }
}

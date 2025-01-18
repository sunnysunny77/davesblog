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
    private $heading_prop = false;
    private $paragraph_prop = false;

    public function GetHead()
    {
        
        include_once "components/head.html.php";
    }

    public function GetBody()
    {

        $this->heading_prop = "Taurus";
        $this->paragraph_prop = "The most significant things we can think about, when we think about Apollo, is that it has opened for us, 
        for us being the World, a challenge of the future. The door is now cracked, 
        but the promise of that future lies in the young people, 
        not just in America, but the young people all over the world.";

        include_once "components/about.html";
        include_once "components/pagefull.html.php";
        include_once "components/top.html";
    }

    public function GetFoot()
    {

        include_once "components/foot.html.php";
    }
}

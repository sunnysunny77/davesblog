<?php
require_once "config.class.php";
/**
 * Singlepoststable return a single Post table from the Posts table in the data base
 *
 * @author Daniel Costello
 *
 */
class Singlepoststable extends Config
{

    public function GetSinglePostsTable($postID)
    {

        try {

            $sql = "SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$postID]);
        } catch (PDOException $e) {

            echo $e->getMessage();
            exit();
        }

        return $stmt->fetch();
    }
}

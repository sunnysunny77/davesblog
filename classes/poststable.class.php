<?php
require_once "config.class.php";
/**
 * Poststable return the Posts table from the data base
 *
 * @author Daniel Costello
 *
 */
class Poststable extends Config
{

    public function GetPostsTable()
    {

        try {

            $sql = "SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            echo $e->getMessage();
            exit();
        }

        return $stmt->fetchAll();
    }
}

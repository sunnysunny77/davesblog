<?php
require_once "config.class.php";
/**
 * Singlepoststable model for all blog_posts
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
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$postID]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetch();
    }
}

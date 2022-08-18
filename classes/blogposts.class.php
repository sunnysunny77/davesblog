<?php
require_once "config.class.php";
/**
 * Blogposts model for all blog_posts
 *
 * @author Daniel Costello
 *
 */
class Blogposts extends Config
{

    public function GetBlogPosts()
    {

        try {

            $sql = "SELECT postID, postTitle, postDate FROM blog_posts ORDER BY postID DESC";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }
}

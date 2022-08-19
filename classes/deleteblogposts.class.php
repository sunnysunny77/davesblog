<?php
require_once "config.class.php";
/**
 * Deleteblogposts model for delete blog_posts
 *
 * @author Daniel Costello
 *
 */
class Deleteblogposts extends Config
{

    public function DeleteBlogPosts($postID)
    {

        try {

            $sql = "DELETE FROM blog_posts WHERE postID = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$postID]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt;
    }
}

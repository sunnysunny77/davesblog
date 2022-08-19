<?php
require_once "config.class.php";
/**
 * Blogposts model for blog_posts
 *
 * @author Daniel Costello
 *
 */
class Blogposts extends Config
{

    public function DeleteAdminPostsTable($postID)
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

    public function GetAdminPostsTable()
    {

        try {

            $sql = "SELECT postID, postTitle, postDate FROM blog_posts ORDER BY postID DESC";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }

    public function GetViewPostPostsTable($postID)
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

    public function GetIndexPostsTable()
    {

        try {

            $sql = "SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }
}

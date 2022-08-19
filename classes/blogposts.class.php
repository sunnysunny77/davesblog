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

    public function AddAdminBlogPosts($postTitle, $postDesc, $postCont)
    {

        try {

            $sql = "INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate) VALUES (?, ?, ?, ?)";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$postTitle, $postDesc, $postCont, date('Y-m-d H:i:s')]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt;
    }

    public function DeleteAdminBlogPosts($postID)
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

    public function GetAdminBlogPosts()
    {

        try {

            $sql = "SELECT postID, postTitle, postDate FROM blog_posts ORDER BY postID DESC";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }

    public function GetViewPostBlogPosts($postID)
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

    public function GetIndexBlogPosts()
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

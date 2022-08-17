<?php
require_once "db.class.php";
/**
 * Poststable return the Posts tabel from the data base
 *
 * @author Daniel Costello
 *
 */
class Poststable extends db
{

    public function GetPostsTable()
    {

        try {

            $sql = "SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC";
            $stmt = $this->connect()->query($sql);
        } catch (PDOException $e) {

            echo $e->getMessage();
            exit();
        }

        return $stmt->fetchAll();
    }
}

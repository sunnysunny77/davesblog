<?php
require_once  __DIR__ . "/../libs/config.class.php";
/**
 * Blogposts model for blog_posts
 *
 * @author Daniel Costello
 *
 */
class Blogposts extends Config
{

    public function SetAddBlogPosts($postTitle, $postDesc, $postCont, $uploadtype, $uploadname, $uploaddata)
    {

        try {

            $sql = "INSERT IGNORE INTO mimetypes (mimetype)
                    VALUES (?)";
            $pdo = $this->Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$uploadtype]);
        } catch (PDOException $e) {

            return $e;
        }

        try {

            $sql = "INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate,filename,filedata,mimetype_id) VALUES (?, ?, ?, ?, ?, ?, (SELECT mimetype_id FROM mimetypes WHERE mimetype = ?))";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$postTitle, $postDesc, $postCont, date('Y-m-d H:i:s'), $uploadname, $uploaddata, $uploadtype]);
        } catch (PDOException $e) {

            return $e;
        }

        return true;
    }

    public function SetEditBlogPostsImage($postTitle, $postDesc, $postCont, $postID, $uploadtype, $uploadname, $uploaddata)
    {

        try {

            $sql = "INSERT IGNORE INTO mimetypes (mimetype)
                    VALUES (?)";
            $pdo = $this->Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ $uploadtype]);
        } catch (PDOException $e) {

            return $e;
        }

        try {

            $sql = "UPDATE blog_posts SET postTitle = ?, postDesc = ?, postCont = ?, filename = ?, filedata = ?,  mimetype_id = (SELECT mimetype_id FROM mimetypes WHERE mimetype = ?) WHERE postID = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$postTitle, $postDesc, $postCont, $uploadname, $uploaddata, $uploadtype, $postID]);
        } catch (PDOException $e) {

            return $e;
        }

        return true;
    }

    public function SetEditBlogPosts($postTitle, $postDesc, $postCont, $postID)
    {

        try {

            $sql = "UPDATE blog_posts SET postTitle = ?, postDesc = ?, postCont = ? WHERE postID = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$postTitle, $postDesc, $postCont, $postID]);
        } catch (PDOException $e) {

            return $e;
        }

        return true;
    }

    public function GetEditBlogPosts($postID)
    {

        try {

            $sql = "SELECT postID, postTitle, postDesc, postCont, filename FROM blog_posts WHERE postID = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$postID]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetch();
    }

    public function SetDeleteBlogPosts($postID)
    {

        try {

            $sql = "DELETE FROM blog_posts WHERE postID = ?";
            $pdo = $this->Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$postID]);
        } catch (PDOException $e) {

            return $e;
        }

        try {
            
            $sql = "DELETE FROM mimetypes WHERE 
                    mimetype_id NOT IN 
                    (SELECT mimetype_id FROM blog_posts)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {

            return $e;
        }

        return true;
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

    public function GetViewLikeBlogPosts($search)
    {

        try {

            $sql = "SELECT postID, postTitle, postDesc, postDate, filename, mimetype, filedata FROM blog_posts INNER JOIN mimetypes ON mimetypes.mimetype_id = blog_posts.mimetype_id WHERE postTitle LIKE CONCAT( '%',?,'%') ORDER BY postID DESC";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$search]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }

    public function GetViewPostBlogPosts($postID)
    {

        try {

            $sql = "SELECT postID, postTitle, postCont, postDate , filename, mimetype, filedata FROM blog_posts INNER JOIN mimetypes ON mimetypes.mimetype_id = blog_posts.mimetype_id WHERE postID = ?";
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

            $sql = "SELECT postID, postTitle, postDesc, postDate, filename, mimetype, filedata FROM blog_posts INNER JOIN mimetypes ON mimetypes.mimetype_id = blog_posts.mimetype_id ORDER BY postID DESC";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }
}

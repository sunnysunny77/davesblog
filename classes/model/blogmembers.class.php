<?php
require_once __DIR__ . "/../libs/config.class.php";
/**
 * Blogmembers model for blog_members 
 *
 * @author Daniel Costello
 *
 */
class Blogmembers extends Config
{

    public function GetBlogMembers($username)
    {
        try {

            $sql = "SELECT MemberID, username, password FROM blog_members WHERE username = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$username]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetch();
    }
}

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

    public function SetEditUserPasswordBlogMembers($username, $password, $email, $memberID)
    {
        try {

            $sql = "UPDATE blog_members SET username = ?, password = ?, email = ? WHERE memberID = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$username, $password, $email, $memberID]);
        } catch (PDOException $e) {

            return $e;
        }

        return true;
    }


    public function SetEditUserBlogMembers($username, $email, $memberID)
    {
        try {

            $sql = "UPDATE blog_members SET username = ?, email = ? WHERE memberID = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$username, $email, $memberID]);
        } catch (PDOException $e) {

            return $e;
        }

        return true;
    }

    public function GetUserBlogMembers($memberID)
    {
        try {

            $sql = "SELECT memberID, username, email FROM blog_members WHERE memberID = ?";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$memberID]);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetch();
    }

    public function SetAddBlogMembers($username, $email, $password)
    {
        try {

            $sql = "INSERT INTO blog_members (username,email,password) VALUES (?, ?, ?)";
            $stmt = $this->Connect()->prepare($sql);
            $stmt->execute([$username, $email, $password]);
        } catch (PDOException $e) {

            return $e;
        }

        return true;
    }

    public function GetUsersBlogMembers()
    {
        try {

            $sql = "SELECT memberID, username, email FROM blog_members ORDER BY username";
            $stmt = $this->Connect()->query($sql);
        } catch (PDOException $e) {

            return $e;
        }

        return $stmt->fetchAll();
    }

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

<?php
require_once "config.class.php";
/**
 * Authorization model for authorized blog_members 
 *
 * @author Daniel Costello
 *
 */
class Authorization extends Config
{

    public function GetAuthorization($username)
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

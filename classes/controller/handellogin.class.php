<?php
/**
 * Handellogin controlls the login action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogmembers model
 * @property private $username Holds post value for username
 * @property private $password Holds post value for password
 *
 */
class Handellogin
{

    private $model;
    private $username;
    private $password;

    public function __construct($username, $password, $model)
    {

        $this->model = $model;
        $this->username = trim($username);
        $this->password = trim($password);
    }

    public function AuthorizeBlogMembers()
    {

        $result = $this->model->GetBlogMembers($this->username);

        if ($result->errorInfo) {

            return $result->getMessage();
        }

        if (password_verify($this->password, $result['password'])) {

            $_SESSION['loggedin'] = true;
            $_SESSION['memberID'] = $user['memberID'];
            $_SESSION['username'] = $user['username'];

            
            return header("Location: ./");
        } else {

            return 'Wrong username or password';
        }
    }
}

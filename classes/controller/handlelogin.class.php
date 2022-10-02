<?php
/**
 * Handlelogin controlls the login action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogmembers model
 * @property private $username Holds post value for username
 * @property private $password Holds post value for password
 *
 */
class Handlelogin
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

        if (isset($result->errorInfo)) {

            return $result->getMessage();
        }

        if (isset($result['password']) && password_verify($this->password, $result['password'])) {

            $_SESSION['loggedin'] = true;
                   
            return header("Location: ./");
        } else {

            return 'Wrong username or password';
        }
    }
}
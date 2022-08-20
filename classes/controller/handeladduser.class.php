<?php
/**
 * Handeladduser controlls the adduser action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $post Holds the $_POST object
 *
 */
class Handeladduser
{

    private $model;
    private $post;

    public function __construct($post, $model)
    {

        $this->model = $model;
        $this->post = $post;
    }

    public function AddBlogMembers()
    {

        $_POST = array_map('stripslashes', $this->post);

        extract($_POST);

        if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if($password ==''){
			$error[] = 'Please enter the password.';
		}

		if($passwordConfirm ==''){
			$error[] = 'Please confirm the password.';
		}

		if($password != $passwordConfirm){
			$error[] = 'Passwords do not match.';
		}

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

        if (isset($error)) {

            return $error;
        }

        if (!isset($error)) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = $this->model->SetAddBlogMembers($username, $email, $password);

            if ($result->errorInfo) {

                return header("Location: ./?action=users&error=" . $result->getMessage());
            }

            if ($result) {

                return header("Location: ./?action=users&output=User added.");
            }
        }
    }
}

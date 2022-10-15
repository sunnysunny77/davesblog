<?php
/**
 * Handleadduser controlls the adduser action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogmembers model
 * @property private $post Holds the $_POST object
 *
 */
class Handleadduser
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

        extract($this->post);

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

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $result = $this->model->SetAddBlogMembers($username, $email, $hashed_password);

            if (isset($result->errorInfo)) {

                return header("Location: ./?action=users&error=" . $result->getMessage());
            }

            if (isset($result)) {

                return header("Location: ./?action=users&output=User added.");
            }
        }
    }
}

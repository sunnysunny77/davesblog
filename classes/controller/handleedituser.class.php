<?php
/**
 * Handleedituser controlls the edituser action
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogmembers model
 * @property private $post Holds the $_POST object
 *
 */
class Handleedituser
{

    private $model;
    private $post;

    public function __construct($model)
    {

        $this->model = $model;
        $this->post = $_POST;
    }

    public function EditUserBlogMembers()
    {

        extract($this->post);

        if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if(strlen($password) > 0){

			if($password ==''){
				$error[] = 'Please enter the password.';
			}

			if($passwordConfirm ==''){
				$error[] = 'Please confirm the password.';
			}

			if($password != $passwordConfirm){
				$error[] = 'Passwords do not match.';
			}
		}	

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

        if (isset($error)) {

            return $error;
        }

        if (!isset($error)) {

            if(!empty($password)){

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $result = $this->model->SetEditUserPasswordBlogMembers($username, $hashed_password, $email, $memberID);

            } else {

                $result = $this->model->SetEditUserBlogMembers($username, $email, $memberID);
            }

            if (isset($result->errorInfo)) {

                return header("Location: ./?action=users&error=" . $result->getMessage());
            }

            if (isset($result)) {

                return header("Location: ./?action=users&output=User updated.");
            }
        }
    }
}

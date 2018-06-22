<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $user = [];

        if (isset($_POST["submit"])) {

            if (empty($_POST['email'])) {

                throw new Exception("Email empty");

            } else {

                $user["email"] = $_POST["email"];

            }
            if (empty($_POST['password'])) {

                throw new Exception("password empty");

            } else {


                $userModel = new UserModel();

                $userByEmail = $userModel->getUserByEmail($user["email"]);

                if (empty($userByEmail)) {
                    return ['errorMessage' => 'Email incorrect'];
                }


                if ( password_verify($_POST["password"], $userByEmail["password"]) ) {

                    $_SESSION['id'] = $userByEmail['id'];



                    $http->redirectTo('');

                } else {

                    return ['errorMessage' => 'Mot de passe incorrect'];
                }

            }    

        }
        

    }
}
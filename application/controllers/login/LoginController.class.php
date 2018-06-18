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

                $user["password"] = $_POST["password"];

            }
            $login = new UserModel();
            $author = $login->processLogin($user["email"],$user["password"]);

        }

        

        if ($author == null) {
            throw new Exception("L'utilisateur email n'existe pas et/ou le mot de passe n'est pas bon");

        } else {
                
                $_SESSION['id'] = $author['id'];



               /*header("Location:$requestUrl");*/
        }
        

    }
}
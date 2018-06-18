<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        if (isset($_POST["submit"])) {

            $error = [];

            $user = []

            if ( empty($_POST["email"]) ) {

                $error["email"] = "Veuillez rentrer un email Valide";

            } else {

                $user["email"] = $_POST["email"]; 
            }

            if ( empty($_POST["password"]) ) {

                $error["password"] = "Veuillez rentrer un mot de passe";

            } else {

                $user["password"] = $_POST["password"];

            }
        }
    }
}
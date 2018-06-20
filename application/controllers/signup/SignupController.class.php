<?php

class SignupController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $accountModel = new UserModel();


        if (!empty($_POST["firstName"]) || !empty($_POST["lastName"]) || !empty($_POST["adress"]) || !empty($_POST["email"]) || !empty($_POST["adress"]) || !empty($_POST["zipCode"]) || !empty($_POST["password"]) || !empty($_POST["phone"]) || !empty($_POST["city"])) {

            $m = $_POST['birthMonth'];

            $d = $_POST['birthDay'];

            $y = $_POST['birthYear'];

            $date = $y.'-'.$m.'-'.$d;

            $today = date("Y-m-d H:i:s");

            $account = [];

            if ( Tools::validate_name($_POST["lastName"]) ) {

                 $account["lastname"] = $_POST["lastName"];

            } else {

                die("votre nom n'est pas correct");
            }


            if ( Tools::validate_name($_POST["firstName"]) ) {

                 $account["firstname"] = $_POST["firstName"];

            } else {
                
                die("votre Prenom n'est pas correct");
            }

            $account["birthday"] = $date;

            $email = $_POST["email"];

            if ( $accountModel->exists($email) ) {

                die("votre email est deja utilisé");

            } else {

                $account["email"] = $email;
            }
            
            if( Tools::validate_password($_POST["password"]) ) {

                $account["password"] = password_hash($_POST["password"],PASSWORD_DEFAULT);


            } else {

                 die("Le mot de passe doit contenir une majuscule, des chiffres et des symboles");
            }
            

            $account["address"] = $_POST["address"];

            $account["city"] = $_POST["city"];

            $account["zipcode"] = $_POST["zipCode"];

            $account["phone"] = $_POST["phone"];

            $account["created_at"] = $today;

            $account["updated_at"] = $today;

            

            $accountModel->createAccount($account);

        } else {
            die("Veuillez remplir les champs");
        }
        

    }
}
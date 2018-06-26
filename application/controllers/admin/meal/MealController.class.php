<?php 
class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {   
        


        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	$meals = [];

    	Tools::pre($formFields);
    	exit;

    	if (isset($_POST["submit"])) {

    		if (empty($_POST["name"])) {
    			return ['errorMessage' => 'Veuillez rentrer le nom du produit'];
    		} else {

    			$meals["name"] = $_POST["name"];

    		}

    		if (empty($_POST["description"])) {
    			return ['errorMessage' => 'Veuillez mettre une description'];
    		} else {

    			$meals["description"] = $_POST["description"];

    		}

    		if (empty($_POST["initialStock"])) {
    			return ['errorMessage' => 'Veuillez rentrer une quantité'];
    		} else {

    			$meals["quantity"] = $_POST["initialStock"];

    		}

    		if (empty($_POST["buyPrice"])) {
    			return ['errorMessage' => 'Veuillez rentrer un prix'];
    		} else {

    			$meals["priceHT"] = $_POST["buyPrice"];

    		}



    	}


    }
}
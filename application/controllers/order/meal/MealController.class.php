<?php


class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {   
        $meal_id = $_GET['id'];



        $meal = MealModel::getMeal($meal_id);


        header('Content-Type: text/json');
        

        $http->sendJsonResponse($meal);




        
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}
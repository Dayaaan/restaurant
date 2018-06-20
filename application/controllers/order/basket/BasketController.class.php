<?php


class BasketController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {   





        
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
    	$quantity = $_POST['quantity'];

        

        $meal = MealModel::getMeal($meal_id);


        header('Content-Type: text/json');
        

        $http->sendJsonResponse($meal);
    }
}
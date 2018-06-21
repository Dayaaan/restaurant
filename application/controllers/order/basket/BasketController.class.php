<?php


class BasketController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {   



        




        
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
        print_r($_POST);

            

        if (isset($_POST['quantity'])) {


            


            $_SESSION["cart"]['quantity'] = $_POST["quantity"];

            $_SESSION["cart"]["name"] = $_POST["name_product"];

            $_SESSION["cart"]["priceHT"] = $_POST["priceHT"];





         

        }
    	
        


       
    }
}
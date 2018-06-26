<?php 



class PaymentController {


    public function httpGetMethod(Http $http, array $queryFields) {



        $orderId = $queryFields["id"];


        $orderById = ValidationModel::getOrderById($orderId);



        $orderByUserId = ValidationModel::getOrderByUserId($_SESSION["id"]);


        if (ctype_digit($orderId) == false) {
            // Vérifie qu'une chaîne est un nombre entier
            throw new Exception("Order id incorrect");

        }

        if ($orderById["user_id"] != $_SESSION["id"]) {

            throw new Exception("Vous ne pouvez pas accedez a cette page");
        }


        if (empty($orderById))  {

            throw new Exception("Bien essayé mais tu ne m'auras pas =)");

        } else {

            $userId = $_SESSION["id"];


            $userById = UserModel::getUserById($userId);

            $products = Basket::getProductsWithQuantity();

            $totalHT = ValidationModel::getTotalHTByOrderId($orderId);


            return ["userById" => $userById,"totalHT" => $totalHT,'products' => $products, "orderById" => $orderById];
        }


       
        
    }

    public function httpPostMethod(Http $http, array $formFields) {

       

    }

}
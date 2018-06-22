<?php 



class PaymentController {


    public function httpGetMethod(Http $http, array $queryFields) {

        $userId = $_SESSION["id"];

        $userById = UserModel::getUserById($userId);

        $products = Basket::getProductsWithQuantity();

        
      

        return ["userById" => $userById, 'products' => $products];
        
    }

    public function httpPostMethod(Http $http, array $formFields) {

       

       

    }

}
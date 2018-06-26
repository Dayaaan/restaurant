<?php 



class ValidationController {


    public function httpGetMethod(Http $http, array $queryFields) {

        
    }

    public function httpPostMethod(Http $http, array $formFields) {


        $userId = $_SESSION["id"];

        $orders = [];

        $today = date("Y-m-d H:i:s"); 

      
        $orders["user_id"] = $userId;

        $orders["created_at"] = $today;

        $orders["status"] = 1;

        $orderId = ValidationModel::saveOrder($orders);


        $http->redirectTo("Payment?id=$orderId");
       

    }

}
<?php 
class SuccessController {


    public function httpGetMethod(Http $http, array $queryFields) {


        
    }

    public function httpPostMethod(Http $http, array $formFields) {

        

        $id = $formFields["order_id"];

        SuccessModel::updateOrderById($id);

    }

}
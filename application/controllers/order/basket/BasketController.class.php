<?php 

class BasketController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $products = Basket::getProductsWithQuantity();

        return ['products' => $products, '_raw_template' => true];      
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    

        

        if ( isset($formFields["delId"]) ) {

            $productDelId = $formFields['delId'];

            Basket::delete($productDelId);

        } else {

            $quantity = $formFields['quantity'];
            
            $productId = $formFields['id'];

            Basket::add($productId, $quantity);

            

        }

        $products = Basket::getProductsWithQuantity();

        return ['products' => $products, '_raw_template' => true];
    }

}
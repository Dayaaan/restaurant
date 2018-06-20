<?php 


class LogoutController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {



		session_destroy();

		$http->redirectTo('login');

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }
        
}
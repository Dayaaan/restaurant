<?php 

Class SessionFilter implements InterceptingFilter {

	public function run(Http $http, array $queryFields, array $formFields) {

		session_start(); 

		Basket::init();

	}

	
	
}
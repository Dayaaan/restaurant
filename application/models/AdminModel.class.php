<?php 

class AdminModel {

	static function saveMeal(array $meals) {

		$db = new Database();


		$sql = "INSERT INTO `product` (name,description,priceHT,quantity,image,created_at,update_at) VALUES (:name,:description,:priceHT,:quantity,:image,:created_at,:update_at)";

		

		$db->executeSql($sql,$meals);


	}
}
<?php 



class MealModel {

	static function getMeal($id) {

		$sql = "SELECT * FROM product WHERE id = ?";

	    $db = new Database();

	    $meal = $db->queryOne($sql,[$id]);

	    return $meal;

	}

	
	
}
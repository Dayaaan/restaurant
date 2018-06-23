<?php 

class ProductModel {

	static function getAllProducts() {

		 $sql = "SELECT * FROM product";

		 $db = new Database();   

		 $productList = $db->query($sql);

		 return $productList;

	}

	public static function getProductById($id) {

		$db = new Database();

		$sql = "SELECT * FROM product WHERE id = ?";

		$params = [$id];

		return $db->queryOne($sql, $params);
	}

	
}	
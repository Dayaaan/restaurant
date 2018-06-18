<?php 

class ProductModel {
	public function getAllProducts() {

		 $sql = "SELECT * FROM product";

		 $db = new Database();   

		 $productList = $db->query($sql);

		 return $productList;

	}
}
<?php 

class ValidationModel {

	static function saveOrder(array $orders) {

		$db = new Database();


		$sql = "INSERT INTO `order` (user_id,created_at,status) VALUES (:user_id,:created_at,:status)";



		$order_id = $db->executeSql($sql,$orders);

		$products = Basket::getProductsWithQuantity();

		foreach ($products as $row) {

	        $order_line = [];

	        $order_line["product_id"] = $row["id"];


	        $order_line["order_id"] = $order_id;

	        $order_line["priceHT"] = $row["priceHT"];

	        $order_line["quantity"] = $row["quantity"];

	        $sql2 = "INSERT INTO `order_line` (product_id,order_id,priceHT,quantity) VALUES (:product_id,:order_id,:priceHT,:quantity)";

	        $db->executeSql($sql2,$order_line);

		}

		return $order_id;

	}


	static function getOrderLineByOrderId($order_id) {

		$sql = "SELECT * 
			FROM order_line 
			JOIN `order`
			ON order.id = order_line.order_id
			WHERE order_id = ?";

		$db = new Database();

		$db->query($sql,[$order_id]);

	}


	static function getOrderById($id) {
		$sql = "SELECT * FROM `order` WHERE id = ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$id]);

		return $result;
	}


	static function getOrderByUserId($user_id) {
		$sql = "SELECT * FROM `order` WHERE user_id = ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$user_id]);

		return $result;
	}

	static function getTotalHTByOrderId($id) {

		$sql = "SELECT SUM(priceHT * quantity) AS totalHT FROM order_line WHERE order_id = ?";

		$db = new Database();

		$result = $db->queryOne($sql,[$id]);

		return $result['totalHT'];
	}

	static function getAllOrder() {

		$sql = "SELECT * FROM `order`";

		$db = new Database();

		$result = $db->query($sql,[$id]);

		return $result;
	}
}
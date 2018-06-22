<?php 

class ValidationModel {

	static function saveOrder(array $orders) {

		$sql = "INSERT INTO `order` (user_id,created_at,status) VALUES (:user_id,:created_at,:status)";

		$db = new Database();

		$db->executeSql($sql,$orders);
	}

	static function getOrderById($id) {
		$sql = "SELECT * FROM user WHERE id = ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$id]);

		return $result;
	}


	static function getOrderByUserId($user_id) {
		$sql = "SELECT * FROM user WHERE user_id = ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$user_id]);

		return $result;
	}


}
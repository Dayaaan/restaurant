<?php 

class SuccessModel {

	static function updateOrderById($id) {

		$sql = "UPDATE `order`
			SET status = 2
			WHERE id = ? ";

		$db = new Database();

		$db->executeSql($sql,[$id]);

	}

	

}
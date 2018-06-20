<?php 

class UserModel {

	public function createAccount(array $account) {

		$sql = "INSERT INTO user (firstname,lastname,birthday,email,password,address,city,zipcode,phone,created_at,updated_at) VALUES (:firstname,:lastname,:birthday,:email,:password,:address,:city,:zipcode,:phone,:created_at,:updated_at)";

		$db = new Database();

		$db->executeSql($sql,$account);

	}

	public function exists($email) {
		$sql = 'SELECT id FROM user WHERE email LIKE ?';

		$db = new Database();

		$result = $db->queryOne($sql,[$email]);

		if (!empty($result)) {

                return true;
                
            } else {

                return false;
            }

        return $result;    
	}

	public function processLogin($email,$password) {

		$sql = "SELECT * FROM user WHERE email LIKE ? AND password LIKE ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$email,$password]);

		return $result;

	}

	public function getUserByEmail($email) {
		$sql = "SELECT * FROM user WHERE email = ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$email]);

		return $result;
	}

	static function getUserById($id) {
		$sql = "SELECT * FROM user WHERE id = ?";

		$db = new Database();

		$result = $db->queryOne($sql, [$id]);

		return $result;
	}



}	
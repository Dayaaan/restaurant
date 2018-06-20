<?php 

class UserSession {

	static function getUser() {
		return UserModel::getUserById($_SESSION['id']);
	}

	static function isConnected() {

		if (empty($_SESSION['id'])) {
			$http = new Http();
			$http->redirectTo('login');
		}
	}
}
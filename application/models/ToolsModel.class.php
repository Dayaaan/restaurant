<?php 

class ToolsModel {

	public function validate_name($thing) {

		if ( preg_match('`^([a-zA-Z0-9-_]{2,36})$`', $thing) ) {

			return true;

		} else {

			return false;
		}
	}


	public function validate_password($password) {

		if ( preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST["password"]) ) {

			return true;

		} else {

			return false;
		}

	}

	public function validate_email($email) {

		if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) )	{

			return true;
			
		} else {

			return false;
		}

	}

}
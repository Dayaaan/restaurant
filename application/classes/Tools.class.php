<?php 

class Tools {

	static function validate_name($thing) {

		if ( preg_match('`^([a-zA-Z0-9-_]{2,36})$`', $thing) ) {

			return true;

		} else {

			return false;
		}
	}


	static function validate_password($password) {

		if ( preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST["password"]) ) {

			return true;

		} else {

			return false;
		}

	}

	static function validate_email($email) {

		if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) )	{

			return true;
			
		} else {

			return false;
		}

	}

	static function pre($thing) {
		
		echo "<pre>";

		print_r($thing);

		echo "</pre>";
	} 

	static function getPriceTTC($prixHT) {
		return number_format($prixHT * 1.2,2);
	}

	static function getPrettyPrice($priceHT) {

		return number_format(Tools::getPriceTTC($priceHT),2);

	}

	static function getPriceTTCForPayment() {

		$total = 0;

		$getPrettyPrice = Tools::getPrettyPrice($price);

		$total += $getPrettyPrice;



	}

}
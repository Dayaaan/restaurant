<?php 

class BookingModel {

		public function saveBooking(array $booking) {

		$sql = "INSERT INTO booking (created_at,seat_number,booking_date,booking_time,user_id) VALUES (:created_at,:seat_number,:booking_date,:booking_time,:user_id)";

		$db = new Database();

		$db->executeSql($sql,$booking);

	}

}
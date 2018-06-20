<?php 


class BookingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       UserSession::isConnected();
    }

    public function httpPostMethod(Http $http, array $formFields)
    {


        $booking = [];

        if (isset($_POST["submit"])) {

            $today = date("Y-m-d H:i:s");

            $booking["created_at"] = $today;

            $m = $_POST['bookingMonth'];

            $d = $_POST['bookingDay'];

            $y = $_POST['bookingYear'];

            $date = $y.'-'.$m.'-'.$d;

            $booking["booking_date"] = $date;

            $h = $_POST["bookingHour"];

            $m = $_POST["bookingMinute"];



            $timestamp = mktime($h,$m,0);

            $booking["booking_time"] = date('H:i:s', $timestamp);


            $booking["seat_number"] = $_POST["numberOfSeats"];

            $booking["user_id"] = $_POST["user_id"];

            $bookingModel = new BookingModel();

            $bookingModel->saveBooking($booking);





         }      


    }
}
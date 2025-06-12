<?php

session_start();

include_once('config.php');

$user_id = $_SESSION['id'];
$movie_id = $_SESSION['movie_id'];

$nr_tickets = $_POST['nr_tickets'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO bookings (user_id,movie_id,nr_tickets, date,time) VALUES(:user_id,:movie_id,:nr_tickets,:date,:time)";

    $insertBooking = $conn -> prepare($sql);

    $insertBooking -> bindParam(':movie_name',$user_id);
    $insertBooking -> bindParam(':movie_desc',$movie_id);
    $insertBooking -> bindParam(':movie_quality',$nr_tickets);
    $insertBooking -> bindParam(':movie_rating',$date);
    $insertBooking -> bindParam(':movie_image',$time);

    $insertBookings ->execute();
    header("Location:home.php");
?>
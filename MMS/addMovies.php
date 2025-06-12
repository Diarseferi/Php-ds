<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $movies_name = $_POST['movies_name'];
    $movies_desc = $_POST['movies_desc'];
    $movies_quality = $_POST['movies_quality'];
    $movies_rating = $_POST['movies_rating'];
    $movies_image = $_POST['movies_image'];

    $sql = "INSERT INTO movies(movies_name,movies_desc,movies_quality,movies_rating,movies_image) VALUES (:movies_name,:movies_desc,:movies_quality,:movies_rating,:movies_image)";

    $insertMovie = $conn -> prepare($sql);

    $insertMovie -> bindParam(':movie_name',$movie_name);
    $insertMovie -> bindParam(':movie_desc',$movie_desc);
    $insertMovie -> bindParam(':movie_quality',$movie_quality);
    $insertMovie -> bindParam(':movie_rating',$movie_rating);
    $insertMovie -> bindParam(':movie_image',$movie_image);

    $insertMovie ->execute();
    header("Location:movies.php");

}
?>
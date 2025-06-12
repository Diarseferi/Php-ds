<?php
session_start();

include_once('config.php');

$user_id = $_SESSION['id'];

if(isset('is_admin') == 'true'){
    $sql = "SELECT movies.movie_name, users.email,bookings,id, bookings.nr_tickets, bookings.date, bookings.is_approved, bookings.time FROM movies INNER JOIN bookings ON movies.id = bookings.movie_id INNER JOIN users ON users.id = bookings.user_id";


    $selectBookings = $conn->prepare($sql);
    $selectBookings->execute();

    $bookings_data = $selectBookings->fetchAll();
}
else{
    $sql = "SELECT movies.movie_name, users.email,bookings.id, bookings.nr_tickets, bookings.date, bookings.is_approved, bookings.time
    FROM movies INNER JOIN users ON users.id = bookings.users_id WHERE bookings.users_id = :user_id";

    $selectBookings = $conn->perepare($sql);

    $selectBookings->bindParam(':user_id',$user_id);

    $selectBookings->execute();

    $bookings_data = $selectBookings ->fetchAll();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bookings data</h2>
    <table>
        <tr>
            <th>Movie name</th>
            <th>Users email</th>
            <th>number of tickets</th>
            <th>date</th>
            <th>time</th>
            <th>Approved</th>
        </tr>
        <tbody>
            <?php if($_SESSION['is_admin' == 'true']){ ?>
                <?php foreach($bookings_data as $bookings_data){ ?>
            <tr>
                <td><?php echo $booking_data['movie_name']?></td>
                <td><?php echo $booking_data['email']?></td>
                <td><?php echo $booking_data['nr_tickets']?></td>
                <td><?php echo $booking_data['date']?></td>
                <td><?php echo $booking_data['time']?></td>
                <td><?php echo $booking_data['is_approved']?></td>

                <td><a href="approve.php?id=<?php echo $booking_data['id']?>">Approve</a></td>
                <td><a href="decline.php?id=<?php echo $booking_data['id']?>">Decline</a></td>

            <?php }} else { ?>
            <?php foreach($bookings_data as $bookings_data){ ?>
            <tr>
                <td><?php echo $booking_data['movie_name']?></td>
                <td><?php echo $booking_data['email']?></td>
                <td><?php echo $booking_data['nr_tickets']?></td>
                <td><?php echo $booking_data['date']?></td>
                <td><?php echo $booking_data['time']?></td>
                <td><?php echo $booking_data['is_approved']?></td>

                <td><a href="approve.php?id=<?php echo $booking_data['id']?>">Approve</a></td>
                <td><a href="decline.php?id=<?php echo $booking_data['id']?>">Decline</a></td>
            



            
            </tr>
            <?php }}?>
        </tbody>

        </table>
</body>
</html>
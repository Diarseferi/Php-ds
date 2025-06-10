<?php
session_start();

include_once('config.php');

$id = $_GET["id"];

$sql = "DELETE * FROM movies WHERE id=:id";

$selectUsers = $conn -> prepare($sql);
$selectUsers -> bindParam(':id', $id);
$selectUsers -> execute();
$user_data = $selectUsers -> fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit User's Details</h2>
    <div class="table-reesponsive">
        <form action="updateUsers.php" method="post">
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" placeholder="id" name="id" value="<?php echo $user_data['id']?>">
                <label for="id"> ID</label>

                 <div class="form-floating">
                  <input type="number" class="form-control" id="floatingInput" placeholder="emri" name="emri" value="<?php echo $user_data['emri']?>">
                <label for="id"> Emri</label>

                 <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" placeholder="username" name="username" value="<?php echo $user_data['username']?>">
                <label for="id"> username</label>

                 <div class="form-floating">
                  <input type="number" class="form-control" id="floatingInput" placeholder="email" name="email" value="<?php echo $user_data['email']?>">
                <label for="id"> email</label>
            </div>
        </form>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Change</button>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getMetoda" method="get"></form>

    <label for="username">username</label>
    <input type="text " id="username">
    <label for="password">password</label>
    <input type="password " id="password">

    <input type="submit" value="submit">

    <?php
    $username= $_GET ['username'];
    $password= $_GET ['password'];

    echo $username;
    echo "<br>";
    echo $password;
    ?>

</body>
</html>
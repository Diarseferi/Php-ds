<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
        }

        td,th{
            padding:10px 20px;
        }
    </style>
    <?php
     include_once('config.php');
     $sql="SELECT * FROM users";
     $getUsers=$con ->prepare($sql);
     $getUsers->execute();

     $users=$getUsers ->fetchAll();
    
    ?>

    <br><br>


    <table>
        <thead>
            <th>name</th>
            <th>surname</th>
            <th>email</th>
        </thead>


        <tbody>
            <?php
            foreach($users as $user){
            ?>
            <tr>
                <td><?=$user['id']?></td>
            </tr>
            <tr>
                <td><?=$user['name']?></td>
            </tr>
            <tr>
                <td><?=$user['surname']?></td>
            </tr>
            <tr>
                <td><?=$user['email']?></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</body>
</html>
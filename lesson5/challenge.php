<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<style>
     table{
            width: 50%;
            border-collapse: collapse;
        }
        th, td{
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }


        th{
            background-color: #f2f2f2;
            font-weight: bold;
        }

</style>
<table >
    <tr>
        <td>

        </td>
    </tr>
    <?php
    $phone =  array(
        array("iphone 14",20,10),
        array("iphone 13",20,10),
        array("iphone 12",20,10),
        array("iphone 11",20,10),
    )

    

    for ($row = 0; $row< 4; $row++){
        echo "<tr>";
        for($col = 0; $col< 3;$col++){
            echo "<td>" . $phone[$row][$col]. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</table>
</body>
</html>
        
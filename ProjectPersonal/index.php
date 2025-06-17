<?php include ('db.php'); ?>
<?php include ('header.php'); ?>



<h2>Upcoming Matches</h2>
<ul>
<?php
$sql = "SELECT * FROM matches";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()):
?>
    <li>
        <a href="match.php?id=<?= $row['id'] ?>">
            <?= $row['opponent'] ?> - <?= $row['date'] ?>
        </a>
    </li>
<?php endwhile; ?>
</ul>

<?php include ('footer.php'); ?>

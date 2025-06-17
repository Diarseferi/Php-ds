<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM matches WHERE id = $id";
$result = $conn->query($sql);
$match = $result->fetch_assoc();
?>

<h2><?= $match['opponent'] ?> - <?= $match['date'] ?></h2>
<p><?= $match['description'] ?></p>
<a href="buy.php?id=<?= $match['id'] ?>">Buy Ticket</a>

<?php include 'includes/footer.php'; ?>

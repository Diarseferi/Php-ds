<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sql = "INSERT INTO purchases (match_id, name) VALUES ($id, '$name')";
    $conn->query($sql);
    header("Location: success.php");
    exit();
}
?>

<h2>Buy Ticket</h2>
<form method="POST">
    <label>Name: <input type="text" name="name" required></label><br>
    <button type="submit">Confirm Purchase</button>
</form>

<?php include 'includes/footer.php'; ?>

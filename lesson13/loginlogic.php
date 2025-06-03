<?php 

session_start();
require 'config.php';

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Fill all the fields!";
        header("Location: login.php");
        exit;
    } else {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $data['password'])) {
                $_SESSION['username'] = $data['username'];
                header("Location: dashboard.php");
                exit;
            } else {
                $_SESSION['error'] = "Password incorrect";
                header("Location: login.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "User not found!";
            header("Location: login.php");
            exit;
        }
    }
}
?>

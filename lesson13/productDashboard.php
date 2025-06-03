<?php
session_start();
include_once "config.php";

// Kontrolli i sesionit
if (empty($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Marrja e të dhënave nga databaza
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();
?>

<?php include("header.php"); ?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    td {
        padding: 10px;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome <i><?php echo $_SESSION['username']; ?></i></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="logout.php">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php?id=<?= $_SESSION['user_id']; ?>">
                            Edit Profile
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h2 class="mt-4">User List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id']; ?></td>
                            <td><?= $user['Title']; ?></td>
                            <td><?= $user['Description']; ?></td>
                            <td><?= $user['Quantity']; ?></td>
                            <td><?= $user['Price']; ?></td>
                            <td>
                                <a href="profile.php?id=<?= $user['id']; ?>">Update</a> |
                                <a href="delete.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</div>

<?php include("footer.php"); ?>

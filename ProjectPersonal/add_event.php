<?php
require 'db.php';

$id = intval($_GET['id'] ?? 0);
$message = '';
$event = [
  'title' => '',
  'description' => '',
  'date' => '',
  'venue' => '',
  'total_tickets' => ''
];

// Load event if editing
if ($id > 0) {
    $stmt = $conn->prepare("SELECT * FROM events WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $event = $result->fetch_assoc();
    } else {
        die("Event not found.");
    }
    $stmt->close();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $venue = trim($_POST['venue']);
    $total_tickets = intval($_POST['total_tickets']);

    if (!$title || !$date || $total_tickets < 1) {
        $message = "Please fill in all required fields.";
    } else {
        if ($id > 0) {
            // Update existing event
            $stmt = $conn->prepare("UPDATE events SET title = ?, description = ?, date = ?, venue = ?, total_tickets = ? WHERE id = ?");
            $stmt->bind_param("ssssii", $title, $description, $date, $venue, $total_tickets, $id);
            if ($stmt->execute()) {
                $message = "Event updated successfully.";
                // Refresh event data
                $event = ['title'=>$title, 'description'=>$description, 'date'=>$date, 'venue'=>$venue, 'total_tickets'=>$total_tickets];
            } else {
                $message = "Error updating event.";
            }
            $stmt->close();
        } else {
            // Add new event
            $stmt = $conn->prepare("INSERT INTO events (title, description, date, venue, total_tickets) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $title, $description, $date, $venue, $total_tickets);
            if ($stmt->execute()) {
                $message = "Event added successfully.";
                // Clear form
                $event = ['title'=>'', 'description'=>'', 'date'=>'', 'venue'=>'', 'total_tickets'=>''];
            } else {
                $message = "Error adding event.";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= $id > 0 ? "Edit Event" : "Add Event" ?></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <nav>
      <a href="admin.php">Admin Panel</a>
      <a href="index.php">Home</a>
    </nav>
    <h1><?= $id > 0 ? "Edit Event" : "Add New Event" ?></h1>

    <?php if ($message): ?>
      <p class="message"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="POST">
      <label for="title">Title*</label>
      <input type="text" id="title" name="title" value="<?= htmlspecialchars($event['title']) ?>" required />

      <label for="description">Description</label>
      <textarea id="description" name="description"><?= htmlspecialchars($event['description']) ?></textarea>

      <label for="date">Date*</label>
      <input type="date" id="date" name="date" value="<?= htmlspecialchars($event['date']) ?>" required />

      <label for="venue">Venue</label>
      <input type="text" id="venue" name="venue" value="<?= htmlspecialchars($event['venue']) ?>" />

      <label for="total_tickets">Total Tickets*</label>
      <input type="number" id="total_tickets" name="total_tickets" min="1" value="<?= htmlspecialchars($event['total_tickets']) ?>" required />

      <button type="submit"><?= $id > 0 ? "Update Event" : "Add Event" ?></button>
    </form>
  </div>
</body>
</html>

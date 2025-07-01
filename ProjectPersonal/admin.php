<?php
require 'db.php';

$action = $_GET['action'] ?? '';
$message = '';

// Delete event
if ($action === 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM bookings WHERE event_id = $id");
    $conn->query("DELETE FROM events WHERE id = $id");
    $message = "Event deleted successfully.";
}

// Fetch events
$events = $conn->query("SELECT * FROM events ORDER BY date DESC");

// Fetch bookings (join with events)
$bookings = $conn->query("SELECT b.*, e.title FROM bookings b JOIN events e ON b.event_id = e.id ORDER BY b.booking_date DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Panel - Event Booking</title>
  <link rel="stylesheet" href="style.css" />
</head>



<body>
      <div class="container">
    <div class="event-categories">
       <nav>

      <a href="index.php">Home</a>
      <a href="add_event.php">Add Event</a>
      <a href="landing.php">Landing</a>
    </nav>
    
    <h1>Admin Panel</h1>

    <?php if ($message): ?>
      <p class="message"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <h2>Events</h2>
    <?php if ($events->num_rows > 0): ?>
      <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr>
          <th>Title</th>
          <th>Date</th>
          <th>Venue</th>
          <th>Total Tickets</th>
          <th>Tickets Sold</th>
          <th>Actions</th>
        </tr>
        <?php while($event = $events->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($event['title']) ?></td>
            <td><?= htmlspecialchars($event['date']) ?></td>
            <td><?= htmlspecialchars($event['venue']) ?></td>
            <td><?= $event['total_tickets'] ?></td>
            <td><?= $event['tickets_sold'] ?></td>
            <td>
              <a href="add_event.php?id=<?= $event['id'] ?>">Edit</a> | 
              <a href="admin.php?action=delete&id=<?= $event['id'] ?>" onclick="return confirm('Delete this event and all bookings?');">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else: ?>
      <p>No events found.</p>
    <?php endif; ?>

    

   
   
    <h2>Bookings</h2>
    <?php if ($bookings->num_rows > 0): ?>
      <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr>
          <th>Event</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Tickets Booked</th>
          <th>Booking Date</th>
        </tr>
        <?php while($booking = $bookings->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($booking['title']) ?></td>
            <td><?= htmlspecialchars($booking['user_name']) ?></td>
            <td><?= htmlspecialchars($booking['user_email']) ?></td>
            <td><?= $booking['tickets_booked'] ?></td>
            <td><?= $booking['booking_date'] ?></td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else: ?>
      <p>No bookings yet.</p>
    <?php endif; ?>
  </div>
</body>
</html>

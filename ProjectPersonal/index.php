<?php
require 'db.php';

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event_id'])) {
    $event_id = intval($_POST['event_id']);
    $user_name = trim($_POST['user_name']);
    $user_email = trim($_POST['user_email']);
    $tickets_booked = intval($_POST['tickets_booked']);

    if (!$user_name || !$user_email || $tickets_booked < 1) {
        $message = "Please fill in all fields correctly.";
    } else {
        // Check ticket availability
        $stmt = $conn->prepare("SELECT total_tickets, tickets_sold FROM events WHERE id = ?");
        $stmt->bind_param("i", $event_id);
        $stmt->execute();
        $stmt->bind_result($total_tickets, $tickets_sold);
        if ($stmt->fetch()) {
            $available = $total_tickets - $tickets_sold;
            if ($tickets_booked > $available) {
                $message = "Only $available tickets left for this event.";
            } else {
                $stmt->close();

                // Insert booking
                $stmt = $conn->prepare("INSERT INTO bookings (event_id, user_name, user_email, tickets_booked) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("issi", $event_id, $user_name, $user_email, $tickets_booked);
                if ($stmt->execute()) {
                    // Update tickets_sold
                    $stmt->close();
                    $stmt = $conn->prepare("UPDATE events SET tickets_sold = tickets_sold + ? WHERE id = ?");
                    $stmt->bind_param("ii", $tickets_booked, $event_id);
                    $stmt->execute();
                    $message = "Booking successful! Thank you, $user_name.";
                } else {
                    $message = "Booking failed, please try again.";
                }
            }
        } else {
            $message = "Event not found.";
        }
        $stmt->close();
    }
}

// Fetch all upcoming events
$events = $conn->query("SELECT * FROM events WHERE date >= CURDATE() ORDER BY date ASC");

?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8" />
  <title>Event Booking System</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <nav>
      <a href="admin.php">Admin Panel</a>
    </nav>
    <h1>Upcoming Events</h1>

    <?php if($message): ?>
      <p class="message"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <?php if ($events->num_rows > 0): ?>
      <?php while($event = $events->fetch_assoc()): ?>
        <?php
          $available = $event['total_tickets'] - $event['tickets_sold'];
        ?>
        <div class="event">
          <h2><?= htmlspecialchars($event['title']) ?></h2>
          <p><strong>Date:</strong> <?= htmlspecialchars($event['date']) ?></p>
          <p><strong>Venue:</strong> <?= htmlspecialchars($event['venue']) ?></p>
          <p><?= nl2br(htmlspecialchars($event['description'])) ?></p>
          <p><strong>Tickets Available:</strong> <?= $available ?></p>

          <?php if($available > 0): ?>
            <form method="POST">
              <input type="hidden" name="event_id" value="<?= $event['id'] ?>" />
              <label for="user_name_<?= $event['id'] ?>">Your Name:</label>
              <input type="text" name="user_name" id="user_name_<?= $event['id'] ?>" required />

              <label for="user_email_<?= $event['id'] ?>">Your Email:</label>
              <input type="email" name="user_email" id="user_email_<?= $event['id'] ?>" required />

              <label for="tickets_booked_<?= $event['id'] ?>">Number of Tickets:</label>
              <input type="number" name="tickets_booked" id="tickets_booked_<?= $event['id'] ?>" min="1" max="<?= $available ?>" value="1" required />

              <button type="submit">Book Tickets</button>
            </form>
          <?php else: ?>
            <p><em>Sold Out</em></p>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>No upcoming events.</p>
    <?php endif; ?>
  </div>
</body>
</html>

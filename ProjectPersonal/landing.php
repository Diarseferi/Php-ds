<?php
// session_start(); // optional for future enhancements
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Booking | Welcome</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #4a90e2, #56ccf2);
      color: white;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    nav {
      background: #4a90e2;
      padding: 12px 20px;
      display: flex;
      gap: 20px;
      border-radius: 0 0 8px 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    nav a {
      color: white;
      font-weight: bold;
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .hero {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px 20px;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin-bottom: 30px;
    }

    .hero .buttons {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .hero a.button {
      text-decoration: none;
      background: white;
      color: #4a90e2;
      padding: 14px 28px;
      font-weight: bold;
      border-radius: 8px;
      transition: 0.3s;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .hero a.button:hover {
      background: #eef4ff;
      transform: scale(1.05);
    }

    footer {
      padding: 15px;
      text-align: center;
      background: rgba(0, 0, 0, 0.1);
      font-size: 0.9rem;
    }

    @media (max-width: 600px) {
      .hero h1 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .hero a.button {
        width: 100%;
        text-align: center;
      }

      nav {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <div class="container">
    <div class="event-categories">
      <nav>
        <a href="index.php">Home</a>
        <a href="add_event.php">Add Event</a>
        <a href="admin.php">Admin Panel</a>
        <a href="landing.php">Landing</a>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Welcome to EventBooking</h1>
    <p>Book your favorite events, manage tickets, and enjoy unforgettable experiences.</p>
    <div class="buttons">
      <a href="index.php" class="button">Browse Events</a>
      <a href="admin.php" class="button">Go to Admin Panel</a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; <?= date('Y') ?> EventBooking. All rights reserved.
  </footer>

</body>
</html>

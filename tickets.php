<?php
// Step 1: Connect to the database

include('db_connect.php');

// Step 2: When the user submits the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $match = $_POST['match'];
  $tickets = $_POST['tickets'];

  // Step 3: Save the booking info to the database
  $query = "INSERT INTO bookings (name, email, match_name, tickets) VALUES ('$name', '$email', '$match', '$tickets')";
  mysqli_query($conn, $query);
  echo "<script>alert('🎟️ Booking Successful! See you at the match!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Tickets - Football Club</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>🎟️ Book Match Tickets</h1>
  </header>

  <section>
    <form method="POST" class="booking-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <select name="match" required>
        <option value="">Select Match</option>
        <option value="Team A vs Team B">Team A vs Team B</option>
        <option value="Team C vs Team D">Team C vs Team D</option>
        <option value="Team E vs Team F">Team E vs Team F</option>
      </select>
      <input type="number" name="tickets" placeholder="Number of Tickets" min="1" required>
      <button type="submit">Book Now</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Football Club | All Rights Reserved</p>
  </footer>
</body>
</html>

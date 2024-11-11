<?php
session_start();

// Get the first name from the session
$firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Booking Confirmation">
    <meta name="keywords" content="confirmation, booking, appointment">
    <script src="https://kit.fontawesome.com/1166c4730c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bonyu.css">
    <title>Booking Confirmation</title>
</head>
<body>
   <section id="confirmation">
    <div class="container-4">
        <div class="sub-heading"><h1>Booking Confirmation</h1></div>
        <div class="form-wrapper">
            <p>Thank you <strong><?php echo $firstname; ?></strong> for booking an appointment. Please wait for the confirmation email.</p>
            <button class="btn" onclick="window.location.href='index.html'">Go to Home</button>
        </div>
    </div>
   </section>
</body>
</html>

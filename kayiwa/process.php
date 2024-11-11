<?php
// Check if the form is submitted and handle the form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $education_level = htmlspecialchars($_POST['education_level']);
    $time = htmlspecialchars($_POST['time']);  // Time selected by the user

    // Here, you can process the data (e.g., save it to a database)
    // For now, we just redirect and show the confirmation message.

    // Start session to pass data back to the confirmation page (optional)
    session_start();
    $_SESSION['firstname'] = $firstname;

    // Redirect to the same page with the success message
    header("Location: thank-you.php");
    exit;
}
?>

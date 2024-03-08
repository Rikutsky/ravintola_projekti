<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form
    $reservation_date = $_POST["reservation_date"];
    $reservation_time = $_POST["reservation_time"];

    // Store data in session or pass it to the next form/page
    session_start();
    $_SESSION["reservation_date"] = $reservation_date;
    $_SESSION["reservation_time"] = $reservation_time;

    // Redirect to the next step of the reservation process
    header("Location: reservation_details.php");
    exit();
} else {
    // Handle invalid requests
    header("HTTP/1.1 400 Bad Request");
    exit("Invalid request");
}
?>
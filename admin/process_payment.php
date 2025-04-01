<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $payment_id = $_POST["payment_id"];

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, amount, payment_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $amount, $payment_id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Booking confirmed"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database error"]);
    }

    $stmt->close();
    $conn->close();
}
?>

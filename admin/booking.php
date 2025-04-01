<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $payment_method = $_POST["payment_method"];
    $payment_id = $_POST["payment_id"];
    $card_number = $_POST["card_number"] ?? NULL;
    $expiry_date = $_POST["expiry_date"] ?? NULL;
    $cvv = $_POST["cvv"] ?? NULL;
    $upi_id = $_POST["upi_id"] ?? NULL;

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, amount, payment_method, card_number, expiry_date, cvv, upi_id, payment_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdssssss", $name, $email, $amount, $payment_method, $card_number, $expiry_date, $cvv, $upi_id, $payment_id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }

    $stmt->close();
    $conn->close();
}
?>

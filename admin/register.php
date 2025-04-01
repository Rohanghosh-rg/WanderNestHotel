<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Log received POST data
    error_log("Received POST Data: " . print_r($_POST, true));

    // Fetch POST data and trim spaces
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $password = isset($_POST["pass"]) ? trim($_POST["pass"]) : "";

    // Debugging: Log email value
    error_log("Extracted Email: " . $email);

    // Check if any field is empty
    if (empty($name) || empty($email) || empty($password)) {
        error_log("Validation failed: All fields are required!");
        echo json_encode(["status" => "error", "message" => "All fields are required!"]);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        error_log("Validation failed: Invalid email format!");
        echo json_encode(["status" => "error", "message" => "Invalid email format!"]);
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        error_log("Validation failed: Email already exists!");
        echo json_encode(["status" => "error", "message" => "Email already registered"]);
        exit;
    }
    $stmt->close();

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    
    if ($stmt->execute()) {
        $_SESSION["user_name"] = $name;
        error_log("User registered successfully with email: " . $email);
        echo json_encode(["status" => "success", "message" => "Registration successful"]);
    } else {
        error_log("Database insert error: " . $stmt->error);
        echo json_encode(["status" => "error", "message" => "Registration failed"]);
    }

    $stmt->close();
    $conn->close();
}
?>

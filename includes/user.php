<?php

require_once './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userRole = $_POST["userRole"];

    // Define an array to store validation errors
    $errors = [];
    
    // Validate username
    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If there are no validation errors, proceed with registration
    if (empty($errors)) {
        // Hash the password (use a strong hashing algorithm)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert user data into the database using a prepared statement
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, user_role) VALUES ($username, $email, $password, $userRole)");

        if ($stmt) {
            $stmt->bind_param("ssss", $username, $email, $hashedPassword, $userRole);
            if ($stmt->execute()) {
                echo '<script>alert("User registered successfully.");</script>';
            } else {
                echo '<script>alert("Error: ' . $stmt->error . '");</script>';
            }
            $stmt->close();
        } else {
            echo '<script>alert("Error preparing the statement.");</script>';
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo '<script>alert("' . $error . '");</script>';
        }
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Validate form data (you can add more validation if required)
    if (empty($phone) || empty($password)) {
        // Handle form validation errors
        echo "Please fill in all fields.";
        exit;
    }

    // Perform login process (replace this with your actual login logic)
    // Example: check if the provided phone number and password match a user in the database
    if ($phone === 'user@example.com' && $password === 'password') {
        // Login successful
        echo "Login successful!"; // You can redirect the user to a different page or perform other actions here
        exit;
    } else {
        // Login failed
        echo "Invalid phone number or password.";
        exit;
    }
}
?>
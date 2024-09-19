<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $dateOfBirth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $bloodType = trim($_POST['blood_type']);
    $phoneNumber = trim($_POST['phone_number']);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $zipCode = trim($_POST['zip_code']);
    $medicalCondition = trim($_POST['medical_condition']);
    $dateOfLastTransfusion = $_POST['date_of_last_transfusion'];
    $isActive = $_POST['is_active'] == '1' ? 1 : 0;

    // Check for required fields
    if (empty($firstName) || empty($lastName) || empty($dateOfBirth) || empty($bloodType)) {
        die("Please fill in all required fields.");
    }

    if ($email === false) {
        die("Invalid email address.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO recipients (FirstName, LastName, DateOfBirth, Gender, BloodType, PhoneNumber, Email, Address, City, State, ZipCode, MedicalCondition, DateOfLastTransfusion, IsActive) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Failed to prepare the SQL statement: " . $conn->error);
    }

    $stmt->bind_param("ssssssssssssss", $firstName, $lastName, $dateOfBirth, $gender, $bloodType, $phoneNumber, $email, $address, $city, $state, $zipCode, $medicalCondition, $dateOfLastTransfusion, $isActive);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "success.";
echo "<script type='text/javascript'>alert('$message');</script>";
       
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipient Details Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .recipient-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 500px;
        }
        .recipient-container h2 {
            margin-top: 0;
        }
        .recipient-container label {
            display: block;
            margin: 10px 0 5px;
        }
        .recipient-container input, .recipient-container select, .recipient-container textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .recipient-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .recipient-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="recipient-container">
        <h2>Recipient Details Form</h2>
        <form action="" method="post">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>
            
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>
            
            <label for="date-of-birth">Date of Birth:</label>
            <input type="date" id="date-of-birth" name="date_of_birth" required>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="" disabled selected>Select your gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select>
            
            <label for="blood-type">Blood Type:</label>
            <input type="text" id="blood-type" name="blood_type" required>
            
            <label for="phone-number">Phone Number:</label>
            <input type="tel" id="phone-number" name="phone_number">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
            
            <label for="state">State:</label>
            <input type="text" id="state" name="state">
            
            <label for="zip-code">Zip Code:</label>
            <input type="text" id="zip-code" name="zip_code">
            
            <label for="medical-condition">Medical Condition:</label>
            <textarea id="medical-condition" name="medical_condition" rows="4"></textarea>
            
            <label for="date-of-last-transfusion">Date of Last Transfusion:</label>
            <input type="date" id="date-of-last-transfusion" name="date_of_last_transfusion">
            
            <label for="is-active">Active Recipient:</label>
            <select id="is-active" name="is_active">
                <option value="1" selected>Yes</option>
                <option value="0">No</option>
            </select>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

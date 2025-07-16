<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "your_username"; // Replace with your MySQL username
    $password = "your_password"; // Replace with your MySQL password
    $dbname = "siblings_buum_hotel";

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Collect and sanitize input data
        $fullname = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $country = htmlspecialchars($_POST['country']);
        $id_number = htmlspecialchars($_POST['id_number']);
        $checkin = htmlspecialchars($_POST['checkin']);
        $checkout = htmlspecialchars($_POST['checkout']);
        $guests = htmlspecialchars($_POST['guests']);
        $room_type = htmlspecialchars($_POST['room_type']);
        $payment_method = htmlspecialchars($_POST['payment_method']);
        
        // Handle arrays for checkboxes
        $bed_pref = isset($_POST['bed_pref']) ? implode(", ", $_POST['bed_pref']) : "None";
        $accessibility = isset($_POST['accessibility']) ? implode(", ", $_POST['accessibility']) : "None";
        $requests = htmlspecialchars($_POST['requests']);
        
        // Credit card details (if provided)
        $card_number = isset($_POST['card_number']) ? htmlspecialchars($_POST['card_number']) : NULL;
        $expiry = isset($_POST['expiry']) ? htmlspecialchars($_POST['expiry']) : NULL;
        $cvv = isset($_POST['cvv']) ? htmlspecialchars($_POST['cvv']) : NULL;

        // Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO bookings (
            fullname, email, phone, country, id_number, checkin, checkout, guests, 
            room_type, bed_pref, accessibility, requests, payment_method, 
            card_number, expiry, cvv
        ) VALUES (
            :fullname, :email, :phone, :country, :id_number, :checkin, :checkout, :guests, 
            :room_type, :bed_pref, :accessibility, :requests, :payment_method, 
            :card_number, :expiry, :cvv
        )");

        // Bind parameters
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':id_number', $id_number);
        $stmt->bindParam(':checkin', $checkin);
        $stmt->bindParam(':checkout', $checkout);
        $stmt->bindParam(':guests', $guests);
        $stmt->bindParam(':room_type', $room_type);
        $stmt->bindParam(':bed_pref', $bed_pref);
        $stmt->bindParam(':accessibility', $accessibility);
        $stmt->bindParam(':requests', $requests);
        $stmt->bindParam(':payment_method', $payment_method);
        $stmt->bindParam(':card_number', $card_number);
        $stmt->bindParam(':expiry', $expiry);
        $stmt->bindParam(':cvv', $cvv);

        // Execute the query
        $stmt->execute();

        // Display confirmation
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Booking Confirmation</title>
            <style>
            /* Add these styles to your existing CSS file */

.error {
    text-align: center;
    padding: 30px;
    background: #fff8f8;
    border: 1px solid #ffdddd;
}

.notice {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 4px;
    margin-top: 20px;
    border-left: 4px solid #3498db;
}

.confirmation-details {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 4px;
}

.confirmation-details p {
    margin: 10px 0;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}
            </style>
        </head>
        <body>
            <div class='container'>
                <header>
                    <h1>Booking Confirmed!</h1>
                    <p>Thank you for booking with Siblings Boom Hotel!</p>
                </header>
                
                <section class='confirmation-details'>
                    <h2>Your Booking Details</h2>
                    <p><strong>Name:</strong> $fullname</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Check-In:</strong> $checkin</p>
                    <p><strong>Check-Out:</strong> $checkout</p>
                    <p><strong>Guests:</strong> $guests</p>
                    <p><strong>Room Type:</strong> $room_type</p>
                    <p><strong>Bed Preference:</strong> $bed_pref</p>
                    <p><strong>Accessibility Needs:</strong> $accessibility</p>
                    <p><strong>Special Requests:</strong> " . ($requests ? $requests : "None") . "</p>
                    <p><strong>Payment Method:</strong> $payment_method</p>
                    <p><strong>Booking Reference:</strong> " . $conn->lastInsertId() . "</p>
                    
                    <div class='notice'>
                        <p>A confirmation email has been sent to $email. If you don't see it, please check your spam folder.</p>
                        <p>For any changes to your booking, please contact us at bookings@siblingsbooom.com or call +1234567890.</p>
                    </div>
                </section>
            </div>
        </body>
        </html>";

    } catch(PDOException $e) {
        // Display error message
        echo "<div class='container error'>
                <h2>Booking Failed</h2>
                <p>Sorry, there was an error processing your booking. Please try again later.</p>
                <p>Error: " . $e->getMessage() . "</p>
                <a href='booking.php' class='btn'>Return to Booking Form</a>
              </div>";
    }
    
    // Close connection
    $conn = null;
} else {
    header("Location: booking.php");
    exit();
}
?>
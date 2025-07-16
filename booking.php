<?php
$pageTitle = "Booking";
include 'includes/header.php';
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siblings Boom Hotel - Booking Form</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

header {
    text-align: center;
    margin-bottom: 30px;
}

header h1 {
    color: #2c3e50;
    margin-bottom: 5px;
}

header h2 {
    color: #7f8c8d;
    margin-top: 0;
}

.form-section {
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.form-section h3 {
    color: #2c3e50;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group input[type="date"],
.form-group input[type="password"],
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.radio-group, .checkbox-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.radio-group label, .checkbox-group label {
    font-weight: normal;
    display: flex;
    align-items: center;
    gap: 8px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: normal;
}

.btn {
    background: #3498db;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    transition: background 0.3s;
}

.btn:hover {
    background: #2980b9;
}

#card-details {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 4px;
    margin-top: 15px;
}

@media (max-width: 600px) {
    .container {
        margin: 10px;
        padding: 15px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Siblings Boom Hotel</h1>
            <h2>Booking Form</h2>
        </header>
        
        <form action="process_booking.php" method="post">
            <section class="form-section">
                <h3>Guest Information</h3>
                <div class="form-group">
                    <label for="fullname">Full Name*</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number*</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="country">Country*</label>
                    <input type="text" id="country" name="country" required>
                </div>
                <div class="form-group">
                    <label for="id_number">Passport/ID Number*</label>
                    <input type="text" id="id_number" name="id_number" required>
                </div>
            </section>

            <section class="form-section">
                <h3>Booking Details</h3>
                <div class="form-group">
                    <label for="checkin">Check-In Date*</label>
                    <input type="date" id="checkin" name="checkin" required>
                </div>
                <div class="form-group">
                    <label for="checkout">Check-Out Date*</label>
                    <input type="date" id="checkout" name="checkout" required>
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests*</label>
                    <select id="guests" name="guests" required>
                        <option value="">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Room Type*</label>
                    <div class="radio-group">
                        <label><input type="radio" name="room_type" value="Standard Room" required> presidential suite</label>
                        <label><input type="radio" name="room_type" value="Deluxe Room"> Deluxe Room</label>
                        <label><input type="radio" name="room_type" value="Family Suite"> Family Room</label>
                        <label><input type="radio" name="room_type" value="Executive Suite"> Executive Suite</label>
                    </div>
                </div>
            </section>

            <section class="form-section">
                <h3>Special Requests</h3>
                <div class="form-group">
                    <label>Bed Preference</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="bed_pref[]" value="King Bed"> King Bed</label>
                        <label><input type="checkbox" name="bed_pref[]" value="Twin Beds"> Twin Beds</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Accessibility Needs</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="accessibility[]" value="Wheelchair Accessible"> Wheelchair Accessible</label>
                        <label><input type="checkbox" name="accessibility[]" value="Ground Floor Room"> Ground Floor Room</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="requests">Other Requests</label>
                    <textarea id="requests" name="requests" rows="3"></textarea>
                </div>
            </section>

            <section class="form-section">
                <h3>Payment Information</h3>
                <div class="form-group">
                    <label>Payment Method*</label>
                    <div class="radio-group">
                        <label><input type="radio" name="payment_method" value="Credit/Debit Card" required> Credit/Debit Card</label>
                        <label><input type="radio" name="payment_method" value="Bank Transfer"> Bank Transfer</label>
                        <label><input type="radio" name="payment_method" value="Pay on Arrival"> Pay on Arrival (Cash)</label>
                    </div>
                </div>
                <div id="card-details" class="form-group">
                    <label for="card_number">Card Number</label>
                    <input type="text" id="card_number" name="card_number">
                    <label for="expiry">Expiry Date (MM/YY)</label>
                    <input type="text" id="expiry" name="expiry" placeholder="MM/YY">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv">
                </div>
            </section>

            <section class="form-section">
                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="terms" required> I agree to the hotel's Terms & Conditions and understand the cancellation policy (Free cancellation up to 48 hours before check-in).
                    </label>
                </div>
            </section>

            <div class="form-actions">
                <button type="submit" class="btn">Book Now</button>
            </div>
        </form>
    </div>

    <script>
        // Show/hide card details based on payment method selection
        document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.getElementById('card-details').style.display = 
                    this.value === 'Credit/Debit Card' ? 'block' : 'none';
            });
        });
        
        // Initially hide card details
        document.getElementById('card-details').style.display = 'none';
    </script>
</body>
</html>

<?php include 'includes/footer.php'; ?>
<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    /* General Styling */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.contact-container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
}

.contact-container h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #2c3e50;
}

.contact-container p {
    font-size: 1.1rem;
    margin-bottom: 30px;
    color: #7f8c8d;
}

/* Contact Content Layout */
.contact-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    margin-bottom: 40px;
}

.contact-info, .contact-form {
    flex: 1;
    min-width: 300px;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Contact Info Boxes */
.info-box {
    margin-bottom: 20px;
    text-align: center;
}

.info-box i {
    font-size: 2rem;
    color: #3498db;
    margin-bottom: 15px;
}

.info-box h3 {
    margin: 10px 0;
    color: #2c3e50;
}

.info-box p {
    margin: 0;
    color: #7f8c8d;
}

/* Contact Form Styling */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
}

.contact-form textarea {
    height: 150px;
    resize: vertical;
}

.contact-form button {
    background: #3498db;
    color: white;
    border: none;
    padding: 12px 25px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.contact-form button:hover {
    background: #2980b9;
}

/* Social Media Links */
.social-media {
    margin-top: 20px;
}

.social-media a {
    display: inline-block;
    margin: 0 10px;
    color: #3498db;
    font-size: 1.5rem;
    transition: color 0.3s;
}

.social-media a:hover {
    color: #2980b9;
}

/* Responsive Design */
@media (max-width: 768px) {
    .contact-content {
        flex-direction: column;
    }
}
</style>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Reach out via email, phone, or the form below.</p>

        <div class="contact-content">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="info-box">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>info@siblingsbuum.com</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-phone"></i>
                    <h3>Phone</h3>
                    <p>+25 0793491948</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Address</h3>
                    <p>kamabare, bugesera, rwanda</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="social-media">
            <a href="https://www.facebook.com/profile.php?id=61573841406933"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/jmv2324"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/j.m.v.888/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</body>
</html>
<?php
include 'includes/footer.php';
?>

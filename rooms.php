<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siblings Buum Hotel - Our Rooms</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #f39c12;
        }

        .logo span {
            color: white;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f39c12;
        }

        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Rooms Section */
        .rooms-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .section-title p {
            color: #7f8c8d;
            max-width: 700px;
            margin: 0 auto;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .room-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .room-img {
            height: 250px;
            overflow: hidden;
        }

        .room-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .room-card:hover .room-img img {
            transform: scale(1.1);
        }

        .room-info {
            padding: 25px;
        }

        .room-info h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .room-info p {
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        .room-features {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .feature {
            display: flex;
            align-items: center;
            color: #2c3e50;
        }

        .feature i {
            margin-right: 5px;
            color: #f39c12;
        }

        .room-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            color: #f39c12;
        }

        .price span {
            font-size: 16px;
            font-weight: normal;
            color: #7f8c8d;
        }

        .book-btn {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .book-btn:hover {
            background-color: #e67e22;
        }

        /* Amenities Section */
        .amenities-section {
            padding: 60px 0;
            background-color: #2c3e50;
            color: white;
        }

        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .amenity-card {
            text-align: center;
            padding: 30px 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .amenity-card:hover {
            transform: translateY(-10px);
        }

        .amenity-icon {
            font-size: 40px;
            color: #f39c12;
            margin-bottom: 20px;
        }

        .amenity-card h3 {
            margin-bottom: 15px;
            font-size: 20px;
        }

        /* Footer */
        footer {
            background-color: #1a252f;
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            color: #f39c12;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-column p, .footer-column a {
            color: #bdc3c7;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: #f39c12;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: white;
            background-color: #2c3e50;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .social-links a:hover {
            background-color: #f39c12;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #2c3e50;
            color: #bdc3c7;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                margin-top: 20px;
                justify-content: center;
            }

            nav ul li {
                margin: 0 10px;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .hero-content p {
                font-size: 18px;
            }

            .rooms-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <!-- Hero Section -->
     <form action="booking.php">
    <section class="hero">
        <div class="hero-content">
            <h1>Our Luxurious Rooms</h1>
            <p>Experience unparalleled comfort in our thoughtfully designed accommodations, each crafted to provide the perfect retreat during your stay.</p>
        </div>
    </section>

    <!-- Rooms Section -->
    <section class="rooms-section">
        <div class="container">
            <div class="section-title">
                <h2>Accommodation Options</h2>
                <p>Choose from our variety of room types, each offering unique features and amenities to suit your preferences and needs.</p>
            </div>

            <div class="rooms-grid">
                <!-- Room 1 -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Deluxe Room">
                    </div>
                    <div class="room-info">
                        <h3>Deluxe Room</h3>
                        <p>Our Deluxe Rooms offer a perfect blend of comfort and style, with modern amenities and elegant decor.</p>
                        <div class="room-features">
                            <div class="feature">
                                <i class="fas fa-user-friends"></i> 2 Guests
                            </div>
                            <div class="feature">
                                <i class="fas fa-bed"></i> King Bed
                            </div>
                            <div class="feature">
                                <i class="fas fa-ruler-combined"></i> 35 m²
                            </div>
                        </div>
                        <div class="room-price">
                            <div class="price">
                                300000 Frw <span>/ night</span>
                            </div>
                            <button class="book-btn">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Room 2 -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="assets/images/ex.png" alt="Executive Suite">
                    </div>
                    <div class="room-info">
                        <h3>Executive Suite</h3>
                        <p>Spacious suite with separate living area, perfect for business travelers or those seeking extra comfort.</p>
                        <div class="room-features">
                            <div class="feature">
                                <i class="fas fa-user-friends"></i> 3 Guests
                            </div>
                            <div class="feature">
                                <i class="fas fa-bed"></i> King Bed + Sofa
                            </div>
                            <div class="feature">
                                <i class="fas fa-ruler-combined"></i> 55 m²
                            </div>
                        </div>
                        <div class="room-price">
                            <div class="price">
                                299000 Frw <span>/ night</span>
                            </div>
                            <button class="book-btn">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Room 3 -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="assets/images/fam.png" alt="Family Room">
                    </div>
                    <div class="room-info">
                        <h3>Family Room</h3>
                        <p>Ideal for families, featuring two bedrooms and ample space for everyone to relax comfortably.</p>
                        <div class="room-features">
                            <div class="feature">
                                <i class="fas fa-user-friends"></i> 4 Guests
                            </div>
                            <div class="feature">
                                <i class="fas fa-bed"></i> 2 Queen Beds
                            </div>
                            <div class="feature">
                                <i class="fas fa-ruler-combined"></i> 60 m²
                            </div>
                        </div>
                        <div class="room-price">
                            <div class="price">
                                349000 Frw <span>/ night</span>
                            </div>
                            <button class="book-btn">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Room 4 -->
                <div class="room-card">
                    <div class="room-img">
                        <img src="https://images.unsplash.com/photo-1564078516393-cf04bd966897?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Presidential Suite">
                    </div>
                    <div class="room-info">
                        <h3>Presidential Suite</h3>
                        <p>Our most luxurious accommodation with premium amenities, panoramic views, and exceptional service.</p>
                        <div class="room-features">
                            <div class="feature">
                                <i class="fas fa-user-friends"></i> 2 Guests
                            </div>
                            <div class="feature">
                                <i class="fas fa-bed"></i> King Bed
                            </div>
                            <div class="feature">
                                <i class="fas fa-ruler-combined"></i> 90 m²
                            </div>
                        </div>
                        <div class="room-price">
                            <div class="price">
                                550000 Frw <span>/ night</span>
                            </div>
                            <button class="book-btn">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<form>
    <!-- Amenities Section -->
    <section class="amenities-section">
        <div class="container">
            <div class="section-title">
                <h2>Room Amenities</h2>
                <p>All our rooms include these premium amenities to ensure your stay is as comfortable as possible.</p>
            </div>

            <div class="amenities-grid">
                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Free WiFi</h3>
                    <p>High-speed internet access throughout your stay</p>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h3>Smart TV</h3>
                    <p>Flat-screen TV with premium channels</p>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <h3>Coffee Maker</h3>
                    <p>Premium coffee and tea making facilities</p>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3>Beach Access</h3>
                    <p>Private beach access for all guests</p>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <h3>Pool Access</h3>
                    <p>Access to our infinity pool and spa</p>
                </div>

                <div class="amenity-card">
                    <div class="amenity-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3>24/7 Room Service</h3>
                    <p>Round-the-clock dining options</p>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>
<?php include 'includes/footer.php'; ?>



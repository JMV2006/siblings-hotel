<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siblings Buum Hotel - Gallery</title>
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
            background-color: #1a3a6e;
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            text-decoration: none;
            color: white;
        }
        
        .logo span {
            color: #f8b400;
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
            color: #f8b400;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        /* Gallery Section */
        .gallery-section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: #1a3a6e;
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .gallery-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            background: none;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            transition: all 0.3s;
            border-radius: 30px;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background-color: #1a3a6e;
            color: white;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 250px;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-item-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }
        
        .gallery-item:hover .gallery-item-caption {
            transform: translateY(0);
        }
        
        /* Footer Styles */
        footer {
            background-color: #1a3a6e;
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f8b400;
        }
        
        .footer-column p, .footer-column a {
            color: #ddd;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
        }
        
        .footer-column a:hover {
            color: #f8b400;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            color: white;
            font-size: 20px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #f8b400;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 14px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
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
            
            .hero h1 {
                font-size: 36px;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
    </style>
</head>
<body>
   
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Our Gallery</h1>
            <p>Experience the beauty of Siblings Buum Hotel through our photo collection</p>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="section-title">
                <h2>Discover Our Hotel</h2>
                <p>Browse through our collection of images showcasing our luxurious rooms, stunning views, and exceptional amenities.</p>
            </div>
            
            <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="rooms">Rooms</button>
                <button class="filter-btn" data-filter="dining">Dining</button>
                <button class="filter-btn" data-filter="pool">Pool Area</button>
                <button class="filter-btn" data-filter="spa">Spa</button>
                <button class="filter-btn" data-filter="views">Views</button>
            </div>
            
            <div class="gallery-grid">
                <!-- Room Images -->
                <div class="gallery-item" data-category="rooms">
                    <img src="https://images.unsplash.com/photo-1566669437685-6e6b9498848c" alt="Deluxe Room">
                    <div class="gallery-item-caption">
                        <h3>Deluxe Room</h3>
                        <p>Spacious room with king-sized bed</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="rooms">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304" alt="Executive Suite">
                    <div class="gallery-item-caption">
                        <h3>Executive Suite</h3>
                        <p>Luxurious suite with separate living area</p>
                    </div>
                </div>
                
                <!-- Dining Images -->
                <div class="gallery-item" data-category="dining">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0" alt="Main Restaurant">
                    <div class="gallery-item-caption">
                        <h3>Main Restaurant</h3>
                        <p>Elegant dining with international cuisine</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="dining">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5" alt="Poolside Bar">
                    <div class="gallery-item-caption">
                        <h3>Poolside Bar</h3>
                        <p>Refreshments by the pool</p>
                    </div>
                </div>
                
                <!-- Pool Images -->
                <div class="gallery-item" data-category="pool">
                    <img src="https://images.unsplash.com/photo-1575429198097-0414ec08e8cd" alt="Infinity Pool">
                    <div class="gallery-item-caption">
                        <h3>Infinity Pool</h3>
                        <p>Stunning views while you swim</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="pool">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Pool Lounge Area">
                    <div class="gallery-item-caption">
                        <h3>Pool Lounge Area</h3>
                        <p>Relax in our comfortable loungers</p>
                    </div>
                </div>
                
                <!-- Spa Images -->
                <div class="gallery-item" data-category="spa">
                    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874" alt="Spa Treatment Room">
                    <div class="gallery-item-caption">
                        <h3>Spa Treatment Room</h3>
                        <p>Rejuvenate with our signature treatments</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="spa">
                    <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35" alt="Sauna">
                    <div class="gallery-item-caption">
                        <h3>Sauna</h3>
                        <p>Relax and detoxify</p>
                    </div>
                </div>
                
                <!-- View Images -->
                <div class="gallery-item" data-category="views">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05" alt="Sunrise View">
                    <div class="gallery-item-caption">
                        <h3>Sunrise View</h3>
                        <p>Breathtaking mornings at Siblings Buum</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="views">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="Lake View">
                    <div class="gallery-item-caption">
                        <h3>Lake View</h3>
                        <p>Serene views from your balcony</p>
                    </div>
                </div>
                
                <!-- Additional Images -->
                <div class="gallery-item" data-category="rooms">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b" alt="Family Suite">
                    <div class="gallery-item-caption">
                        <h3>Family Suite</h3>
                        <p>Perfect for family vacations</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="dining">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4" alt="Lobby Lounge">
                    <div class="gallery-item-caption">
                        <h3>Lobby Lounge</h3>
                        <p>Elegant space for afternoon tea</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="spa">
                    <img src="https://images.unsplash.com/photo-1545173168-9f1947eebb7f" alt="Massage Room">
                    <div class="gallery-item-caption">
                        <h3>Massage Room</h3>
                        <p>Professional therapists at your service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <?php include 'includes/footer.php'; ?>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <!-- JavaScript for gallery filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
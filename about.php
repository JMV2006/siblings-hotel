<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Siblings Buum Hotel</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

header {
    background-color: #2c3e50;
    padding: 20px 0;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 600;
}

nav a.active {
    color: #f1c40f;
}

.about-container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
}

.about-container h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #2c3e50;
}

.about-container h1 span {
    color: #e67e22;
}

.tagline {
    font-size: 1.2rem;
    color: #7f8c8d;
    margin-bottom: 40px;
}

/* About Section Layout */
.about-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
    margin-bottom: 50px;
    text-align: left;
}

.about-text {
    flex: 1;
    min-width: 300px;
}

.about-image {
    flex: 1;
    min-width: 300px;
}

.about-image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.about-text h2 {
    color: #e67e22;
    margin-top: 20px;
}

.about-text ul {
    list-style: none;
    padding: 0;
}

.about-text li {
    margin: 10px 0;
    display: flex;
    align-items: center;
}

.about-text i {
    color: #e67e22;
    margin-right: 10px;
}

/* Team Section */
.team-section {
    margin: 50px 0;
}

.team-section h2 {
    color: #2c3e50;
    margin-bottom: 30px;
}

.team-members {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.member {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    width: 250px;
}

.member img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}

.member h3 {
    margin: 10px 0 5px;
    color: #2c3e50;
}

.member p {
    color: #7f8c8d;
    font-size: 0.9rem;
}

/* Footer */
footer {
    background: #2c3e50;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 50px;
}

.social-links a {
    color: white;
    margin: 0 10px;
    font-size: 1.2rem;
    transition: color 0.3s;
}

.social-links a:hover {
    color: #f1c40f;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-section {
        flex-direction: column;
    }
    
    .team-members {
        flex-direction: column;
        align-items: center;
    }
}
</style>
<body>
    

    <div class="about-container">
        <h1>Welcome to <span>Siblings Buum Hotel</span></h1>
        <p class="tagline">Where Comfort Meets Luxury</p>

        <div class="about-section">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Founded in 2010, Siblings Buum Hotel was born from a shared passion for hospitality and a dream to create a home away from home. What started as a small family-run guesthouse has now grown into a premier destination for travelers seeking relaxation and exceptional service.</p>
                
                <h2>Our Mission</h2>
                <p>At Siblings Buum Hotel, we are committed to providing unforgettable experiences. From our thoughtfully designed rooms to our personalized guest services, every detail is crafted to ensure your stay is nothing short of perfect.</p>
                
                <h2>Why Choose Us?</h2>
                <ul>
                    <li><i class="fas fa-check"></i> Luxurious & Comfortable Rooms</li>
                    <li><i class="fas fa-check"></i> Stunning Views & Serene Environment</li>
                    <li><i class="fas fa-check"></i> Exceptional Customer Service</li>
                    <li><i class="fas fa-check"></i> Prime Location Near Major Attractions</li>
                </ul>
            </div>
            <div class="about-image">
                <img src="assets/images/my logo.png" alt="Siblings Buum Hotel Lobby">
            </div>
        </div>

        <div class="team-section">
            <h2>Meet the Siblings</h2>
            <div class="team-members">
                <div class="member">
                    <img src="https://randomuser.me/api/portraits/women/30.jpg" alt="xxxxxx">
                    <h3>Sarah </h3>
                    <p>Co-Founder & General Manager</p>
                </div>
                <div class="member">
                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="John Buum">
                    <h3>John </h3>
                    <p>Co-Founder & Head of Operations</p>
                </div>
                <div class="member">
                    <img src="https://randomuser.me/api/portraits/women/16.jpg" alt="Emily Buum">
                    <h3>Emily </h3>
                    <p>Guest Relations Manager</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
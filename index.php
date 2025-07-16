<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

<div style="height: 100vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/fam.jpeg'); background-size: cover; background-position: center; display: flex; align-items: center; text-align: center; color: white; margin-top: 60px;">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
    <p style="font-size:35px;font-family:elephant;color:blue;"><marquee> WELCOME TO SIBLINGS BUUM HOTEL✨ </marquee></p>
   
        <p style="font-size: 20px; margin-bottom: 30px;">Experience luxury like never before</p>
        <a href="rooms.php" style="display: inline-block; padding: 10px 20px; background-color: #8B4513; color: white; text-decoration: none; border-radius: 4px; transition: all 0.3s ease;">Book Rooms in Our Hotel</a>
    </div>
</div>
<div style="padding: 80px 0; text-align: center;">
    <h2 style="font-size: 36px; margin-bottom: 50px; color: #8B4513;">Why Choose Us</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; width: 90%; max-width: 1200px; margin: 0 auto;">
        <div style="padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
            <i class="fas fa-utensils" style="font-size: 40px; color: #8B4513; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 15px;">Fine Dining</h3>
            <p>World-class cuisine prepared by award-winning chefs</p>
        </div>
        <div style="padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
            <i class="fas fa-spa" style="font-size: 40px; color: #8B4513; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 15px;">Spa & Wellness</h3>
            <p>Relax and rejuvenate with our premium spa services</p>
        </div>
        <div style="padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
            <i class="fas fa-wifi" style="font-size: 40px; color: #8B4513; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 15px;">Free WiFi</h3>
            <p>High-speed internet throughout the property</p>
        </div>
        <div style="padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
            <i class="fas fa-swimming-pool" style="font-size: 40px; color: #8B4513; margin-bottom: 20px;"></i>
            <h3 style="margin-bottom: 15px;">Pool</h3>
            <p>Stunning infinity pool with panoramic views</p>
        </div>
    </div>
</div>
<p style="font-size:35px;font-family:elephant;color:green;"><marquee>WE HAVE A DAILY OFFERS TO OUR NEW CUSTOMERS</marquee></p>
<div style="padding: 50px 0; background-color: #f9f9f9; text-align: center;">
    <h2 style="font-size: 36px; margin-bottom: 50px; color: #8B4513;">What Our Guests Say</h2>
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; gap: 30px; overflow-x: auto; padding: 20px 0;">
            <div style="min-width: 300px; padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                <p style="margin-bottom: 20px; font-style: italic;">"Absolutely stunning hotel with exceptional service. Will definitely return!"</p>
                <div style="display: flex; align-items: center;">
                    <img src="assets/images/guest1.jpeg" alt="Guest" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                    <h4>CEDRIC MINEUR</h4>
                </div>
            </div>
            <div style="min-width: 300px; padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                <p style="margin-bottom: 20px; font-style: italic;">"The attention to detail is remarkable. Best hotel experience ever."</p>
                <div style="display: flex; align-items: center;">
                    <img src="assets/images/guest2.jpeg" alt="Guest" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                    <h4>MINISTER OF ICT</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
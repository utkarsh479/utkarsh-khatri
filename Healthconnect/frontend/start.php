<?php

$servername = "localhost";
$username = "root";
$passwordname = "";
$dbname = "login";


$conn= mysqli_connect($servername,$username,$passwordname,$dbname);

if($conn)
{
    echo "connection ok";
}
else{
    echo "connection failed".mysqli_connect_error();
}
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Queuing and Bed Management System</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
            background: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        /* Navbar */
        .navbar {
            background: #004aad;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background 0.5s;
        }
        

        .navbar.scrolled {
            background: #003a85;
        }

        .navbar .logo {
            font-size: 2rem;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #ffffff;
    text-decoration: none;
    font-size: 1rem;
    padding: 5px 10px;
    transition: background 0.3s;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .btn-login {
            padding: 10px 20px;
    background: #ff6f61;
    color: #004aad;
    border-radius: 5px;
    transition: 0.3s;
        }

        .btn-login:hover {
            background: #f4f4f4;
        }

        
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 100px 0;
            background: linear-gradient(135deg, #004aad 50%, #e0f7fa 50%);
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero-content {
            flex: 1;
            padding-right: 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin: 20px 0;
            color: #f4f4f4;
        }

        .btn-primary {
            padding: 12px 30px;
            background: #ff6f61;
            color: #fff;
            border-radius: 5px;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-primary:hover {
            background: #e5554f;
        }

        .hero-image {
            width: 50%;
            animation: slideIn 2s ease-in-out;
        }

        
        .features {
            background: #fff;
            padding: 60px 0;
        }

        .features h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #004aad;
            font-size: 2.5rem;
        }

        .feature-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 80px;
            margin-bottom: 20px;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #004aad;
        }

        .card p {
            color: #555;
        }

        
        .services {
            background: #e0f7fa;
            padding: 60px 0;
            animation: fadeIn 1.5s ease-in-out;
        }

        .services h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #004aad;
            font-size: 2.5rem;
        }

        .services-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .services-content img {
            width: 45%;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        
        .testimonials {
            background: #fff;
            padding: 60px 0;
        }

        .testimonials h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #004aad;
            font-size: 2.5rem;
        }

        .testimonial-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }

        .testimonial {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .testimonial:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .testimonial img {
            width: 60px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .testimonial p {
            color: #555;
            margin-bottom: 10px;
        }

        .testimonial h4 {
            color: #004aad;
        }

        
        .cta {
            background: #004aad;
            color: #fff;
            text-align: center;
            padding: 50px 0;
        }

        .cta h2 {
            margin-bottom: 20px;
        }
        .und{
            text-decoration: none;
        }

        .cta .btn-primary {
            background: #fff;
            color: #004aad;
        }

        .cta .btn-primary:hover {
            background: #f4f4f4;
        }

        
        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }

        .modal-content {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        .modal-header {
            font-size: 1.5rem;
            color: #004aad;
            margin-bottom: 20px;
        }

        .modal input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .modal .btn-primary {
            width: 100%;
            margin: 10px 0;
        }

        .modal .switch {
            font-size: 0.9rem;
            margin-top: 10px;
        }

        .modal .switch a {
            color: #004aad;
            text-decoration: none;
        }

        .modal .switch a:hover {
            text-decoration: underline;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.2rem;
            cursor: pointer;
            color: #004aad;
        }

        .close:hover {
            color: #e5554f;
        }

        

        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }
        .btn-sos {
    padding: 10px 20px;
    background: #ff0000;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    position: absolute;
    top: 15px;
    right: 20px;
    z-index: 1000;
}

.btn-sos:hover {
    background: #d40000;

}
.sos-button {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 30px;
    background: #ff0000;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    z-index: 10000;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    animation: pulse 1.5s infinite;
}

.sos-button:hover {
    background: #d40000;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
    }
    50% {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(255, 0, 0, 1);
    }
}

#location {
    position: fixed;
    top: 80px;
    right: 20px;
    background: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-size: 0.9rem;
    color: #333;
    display: none;
}
    </style>
</head>
<body>
    
<nav class="navbar" id="navbar">
        <div class="container">
            <a  class="logo">HealthConnect</a>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><button class="btn-login" id="loginBtn">Login</button></li>
            </ul>
        </div>
        <button class="btn-sos" id="sosBtn">SOS</button>
        <div id="location">Fetching location...</div>
    
</nav>
    </nav>
    
    <section class="hero">
        <div class="container hero-content">
            <h1>Your Health, Our Priority</h1>
            <p>Manage your hospital's queuing and bed system efficiently with our easy-to-use platform. Provide a better healthcare experience today.</p>
            <a href="#services" class="btn-primary">Learn More</a>
        </div>
        <div class="hero-image">
            <img src="general.jpg" alt="Healthcare Image">
        </div>
    </section>
    
    <!-- Registration Modal -->
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <span class="close" id="closeRegisterModal">&times;</span>
            <div class="modal-header">Create an Account</div>
            <form id="registerForm">
                <input type="text" id="username" placeholder="username" required>
                <input type="email" id="email" placeholder="email" required>
                <input type="password" id="password" placeholder="password" required>
                <input type="conpassword" id="confirmPassword" placeholder="Confirm Password" required>
                <button type="submit" class="btn-primary">Register</button>
            </form>
            <div class="switch">
                <p>Already have an account? <a id="loginLink">Login</a></p>
            </div>
        </div>
    </div>

    
    

    
    <section id="features" class="features">
        <div class="container">
            <h2>Our Key Features</h2>
            <div class="feature-cards">
                <div class="card">
                   <a href="hospital.php" class="und"> <img src="general.jpg" alt="Queue Management">
                    <h3>Book Appoinment </h3>
                    <p>Streamline patient flow with virtual queues and real-time updates.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="bookhospbed.php" class="und">
                    <img src="general.jpg" alt="Bed Availability">
                    <h3>Bed Availability</h3>
                    <p>Real-time tracking and management of bed availability across departments.</p>
                </a>
                </div>
                <div class="card">
                <a href="integration.php" class="und">
                    <img src="general.jpg" alt="Integration">
                    <h3>City-Wide Integration</h3>
                    <p>Seamlessly connect with other hospitals and city health databases.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-content">
                <p>From patient registration to bed management, HealthConnect provides a comprehensive solution for hospital operations, ensuring efficient management and improved patient experience.</p>
                <img src="general.jpg" alt="Services Illustration">
            </div>
        </div>
    </section>

    
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-cards">
                <div class="testimonial">
                    <img src="image1.png" alt="Client 1">
                    <p>"HealthConnect has transformed our hospital management. The queuing system is a game-changer!"</p>
                    <h4>- Dr. GOYAL, JNU Hospital</h4>
                </div>
                <div class="testimonial">
                    <img src="image2.png" alt="Client 2">
                    <p>"The integration feature allows us to coordinate with other hospitals seamlessly."</p>
                    <h4>- DR. DIVYA SHARMA , General Health</h4>
                </div>
                <div class="testimonial">
                    <img src="image3.png" alt="Client 3">
                    <p>"Real-time bed availability has drastically improved our patient management."</p>
                    <h4>- Dr. RAHUL BASANTWANI, Riverside Clinic</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Enhance Your Hospital Management?</h2>
            <a href="#" class="btn-primary">Get Started</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 HealthConnect. All rights reserved. | <a href="#privacy-policy" style="color: #ff6f61;">Privacy Policy</a> | <a href="#terms" style="color: #ff6f61;">Terms of Service</a></p>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const featureCards = document.querySelectorAll('.card');
            const navbar = document.getElementById('navbar');

            window.addEventListener('scroll', () => {
                featureCards.forEach(card => {
                    const rect = card.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom > 0) {
                        card.classList.add('visible');
                    }
                });

                // Navbar scroll effect
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
         // Show and hide modal
         const registerModal = document.getElementById('registerModal');
        const loginBtn = document.getElementById('loginBtn');
        const closeRegisterModal = document.getElementById('closeRegisterModal');
        const registerForm = document.getElementById('registerForm');
        
        // Open Register Modal
        loginBtn.addEventListener('click', function() {
            registerModal.style.display = 'flex';
        });

        // Close Register Modal
        closeRegisterModal.addEventListener('click', function() {
            registerModal.style.display = 'none';
        });

        // Register Form Validation
        registerForm.addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                event.preventDefault(); // Prevent form submission
                alert("Passwords do not match!");
            }
        });

        // Switch to Login form (if needed)
        const loginLink = document.getElementById('loginLink');
        loginLink.addEventListener('click', function() {
            alert('Redirect to login page.');
        });
        document.getElementById('sosBtn').addEventListener('click', function() {
    // Trigger the emergency alert
    const isConfirmed = confirm("Are you sure you want to send an SOS alert?");
    if (isConfirmed) {
        // Add AJAX request or API call for SOS
        alert("SOS alert sent successfully!");
        
        // Example: Sending a backend request
        /*
        fetch('send_sos.php', {
            method: 'POST',
            body: JSON.stringify({ userId: '12345' }), // Replace with actual data
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
        */
    }
});
        
        
    </script>
    <?php

$username=$_GET['username'];
$email=$_GET['email'];
$password=$_GET['password'];


$query="INSERT INTO SIGNUP VALUES ('$username','$email','$passsword')";
$data=mysqli_query($conn,$query);

if($data)
{
   echo "data inserted succesfully";
}
else
{

   echo "failed to insert data";
}

/*echo"$name";
echo"$email";
echo"$mobile";
echo"$password";
echo"$confirm";*/



?>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$passwordname = "";
$dbname = "jnuappoinment";


$conn= mysqli_connect($servername,$username,$passwordname,$dbname);

if($conn)
{
    //echo "connection ok";
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
    <title>OPD Queuing - HealthConnect</title>
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
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background 0.3s;
        }

        .navbar.scrolled {
            background: #003a85;
        }

        .navbar .logo {
            font-size: 1.8rem;
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
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        .btn-login {
            padding: 10px 20px;
            background: #e59f1c;
            color: #004aad;
            border-radius: 5px;
            transition: 0.3s;
        }


        .btn-login:hover {
            background: #d26e03;
        }


        /* Page Header */
        .page-header {
            background: linear-gradient(to right, #004aad, #003a85);
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        .page-header h1 {
            font-size: 2.5rem;
        }

        .page-header p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Form Section */
        .form-section {
            background: #fff;
            padding: 40px 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            margin-bottom: 20px;
            color: #004aad;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-submit {
            padding: 10px 555px;
            background: #1756cb;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background: #003a85;
        }

        /* Live Queue Section */
        .live-queue {
            background: #e0f7fa;
            padding: 40px 20px;
            margin: 20px 0;
            border-radius: 10px;
        }

        .live-queue h2 {
            margin-bottom: 20px;
            color: #004aad;
        }

        .queue-list {
            list-style: none;
        }

        .queue-list li {
            background: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .queue-list li .queue-status {
            padding: 5px 10px;
            border-radius: 5px;
            color: #fff;
        }

        .queue-status.waiting {
            background: #f39c12;
        }

        .queue-status.in-progress {
            background: #27ae60;
        }

        .queue-status.completed {
            background: #3498db;
        }

        /* Announcements Section */
        .announcements {
            background: #fff;
            padding: 40px 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .announcements h2 {
            margin-bottom: 20px;
            color: #004aad;
        }

        .announcement-item {
            margin-bottom: 15px;
            padding: 15px;
            background: #f9f9f9;
            border-left: 5px solid #004aad;
        }

        /* FAQ Section */
        .faq {
            background: #e0f7fa;
            padding: 40px 20px;
            margin: 20px 0;
            border-radius: 10px;
        }

        .faq h2 {
            margin-bottom: 20px;
            color: #004aad;
        }

        .faq-item {
            margin-bottom: 10px;
            padding: 15px;
            background: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .faq-item:hover {
            background: #f4f4f4;
        }

        .faq-item p {
            margin-top: 10px;
            display: none;
        }

        .faq-item.active p {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <a  class="logo">HealthConnect</a>
            <ul class="nav-links">
                <li><a href="index.html#features">Features</a></li>
                <li><a href="index.html#services">Services</a></li>
                <li><a href="index.html#contact">Contact</a></li>
                <li><a href="#" class="btn-login">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header">
        <h1>Jnu Hospital</h1>
        <p>Manage your Appoinment efficiently with our real-time queuing system.</p>
    </header>

    <!-- Form Section -->
    <section class="form-section">
        <div class="container">
            <h2>Book An Appoinment</h2>
            <form>
                <div class="form-group">
                   
                </div>
                <div class="form-group">
                    <label for="name">Patient Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Mobile Number:</label>
                    <input type="text" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="symptoms">Symptoms:</label>
                    <input type="text" id="symptoms" name="symptoms" required>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <button type="submit" class="btn-submit"><b>Book Now</b></button>
            </form>
        </div>
    </section>

    <section class="live-queue">
        <div class="container">
            <h2>Live Queue Status</h2>
            <ul class="queue-list">
                <li>
                    <span>Patient: suresh</span>
                    <span class="queue-status waiting">Waiting</span>
                </li>
                <li>
                    <span>Patient: mohan shrivastva</span>
                    <span class="queue-status in-progress">In Progress</span>
                </li>
                <li>
                    <span>Patient: rohan sharma</span>
                    <span class="queue-status completed">Completed</span>
                </li>
            </ul>
        </div>
    </section>

    
    <section class="announcements">
        <div class="container">
            <h2>Announcements</h2>
            <div class="announcement-item">
                <p>New COVID-19 protocols have been implemented. Please ensure masks are worn at all times, and maintain social distancing while in the hospital premises. For further details, please check the hospital guidelines available at the reception.</p>
            </div>
            <div class="announcement-item">
                <p>OPD timings have been updated: 8:00 AM - 4:00 PM from Monday to Saturday. Kindly ensure to register within the stipulated time to avoid inconvenience.</p>
            </div>
            <div class="announcement-item">
                <p>Our hospital is now offering telemedicine consultations. To book a telemedicine appointment, please visit our website or contact the helpdesk.</p>
            </div>
        </div>
    </section>


    <section class="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h3>How do I register for the OPD queue?</h3>
                <p>To register for the OPD queue, select a hospital, then fill out the registration form with your name, contact information, symptoms, date, and time. After submission, you will receive a confirmation message along with your queue number.</p>
            </div>
            <div class="faq-item">
                <h3>Can I check the queue status online?</h3>
                <p>Yes, you can check the live queue status on this page. The status updates in real-time, so you can monitor your position in the queue.</p>
            </div>
            <div class="faq-item">
                <h3>What should I do if I miss my turn?</h3>
                <p>If you miss your turn, please report to the helpdesk immediately. They will assist you in rejoining the queue or rescheduling your appointment based on availability.</p>
            </div>
        </div>
    </section>

    
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 HealthConnect. All rights reserved.</p>
        </div>
    </footer>

    <script>
    
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // FAQ toggle
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
<?php

$name=$_GET['name'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$symptoms=$_GET['symptoms'];
$date=$_GET['date'];
$time=$_GET['time'];

$query="INSERT INTO APNDETAILS VALUES ('$name','$email','$mobile','$symptoms','$date','$time')";
$data=mysqli_query($conn,$query);

if($data)
{
   //echo "data inserted succesfully";
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
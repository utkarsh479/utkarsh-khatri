<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City-Wide Hospital Integration</title>
    <style>
        /* Reset and font styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #e0f7ff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #003366;
            text-align: center;
            
            font-size: 2.5em;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Container for hospital cards */
        .hospital-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1000px;
            margin: 20px 0;
            gap: 20px;
        }

        /* Hospital card styling */
        .hospital-card {
            width: 300px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            animation: slideUp 0.5s ease-out;
            transition: transform 0.3s;
        }
        .hospital-card:hover {
            transform: translateY(-5px);
        }
        .hospital-name {
            font-size: 1.5em;
            color: #003366;
            margin: 10px 0;
        }
        .hospital-details {
            color: #555;
            font-size: 1em;
            margin: 10px 0 20px;
        }
        .hospital-card button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .hospital-card button:hover {
            background-color: #005bb5;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes slideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
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
        .navbar {
    background: #004aad;
    color: #fff;
    padding: 15px 0; /* Removed left and right padding */
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    transition: background 0.5s;
    width: 100%; /* Make the navbar full-width */
}

.navbar .container {
    width: 100%; /* Ensures the content spans the full width */
    max-width: 1200px; /* Optional: set max-width for center alignment */
    margin: 0 auto; /* Centers the content within the navbar */
    padding: 0 20px; /* Adds padding to content without creating whitespace */
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
                <li><a href="#" class="btn-login">Login</a></li>
            </ul>
        </div>
    </nav>

    <h1>City-Wide Hospital Integration</h1>

    <div class="hospital-container">
        <!-- Hospital Card 1 -->
        <div class="hospital-card">
            <div class="hospital-name">City Hospital</div>
            <div class="hospital-details">
                Jaipur <br>
                Main healthcare provider in downtown.
            </div>
            <button onclick="redirectToInventory()">View Inventory</button>
        </div>

        <!-- Hospital Card 2 -->
        <div class="hospital-card">
            <div class="hospital-name">Jnu Hospital</div>
            <div class="hospital-details">
                Jagatpura <br>
                Specialty care center for cardiac patients.
            </div>
            <button onclick="redirectToInventory()">View Inventory</button>
        </div>

        <!-- Hospital Card 3 -->
        <div class="hospital-card">
            <div class="hospital-name">Fortis </div>
            <div class="hospital-details">
                Malviya Nagar <br>
                Urgent care and family health.
            </div>
            <button onclick="redirectToInventory()">View Inventory</button>
        </div>

        <!-- Add more hospital cards as needed -->
    </div>

    <script>
        // Function to redirect to inventory.html
        function redirectToInventory() {
            window.location.href = 'inventory.html';
        }
    </script>

</body>
</html>
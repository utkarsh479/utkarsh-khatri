<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Finder - HealthConnect</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    background: linear-gradient(135deg, #004aad, #e0f7fa);
    color: #333;
    line-height: 1.6;
}

/* Navbar */
.navbar {
    background: #004aad;
    color: #fff;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: background 0.4s, box-shadow 0.4s;
}

.navbar.scrolled {
    background: #003a85;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
}

.navbar .logo {
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
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
    border-radius: 5px;
    transition: background 0.3s, color 0.3s;
}

.nav-links a:hover {
    background: rgba(255, 255, 255, 0.2);
}

.btn-login {
    padding: 10px 20px;
    background: #ff6f61;
    color: #fff;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s, color 0.3s;
}

.btn-login:hover {
    background: #e5554f;
}

/* Page Header */
.page-header {
    background: linear-gradient(135deg, #004aad, #e0f7fa);
    color: #fff;
    padding: 60px 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

.page-header h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.page-header p {
    font-size: 1.2rem;
    color: #f4f4f4;
}

/* Search Section */
.search-section {
    background: #fff;
    padding: 50px 30px;
    margin: 20px 0;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.search-section h2 {
    margin-bottom: 30px;
    color: #004aad;
    font-size: 2rem;
    font-weight: bold;
}

.search-input {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
    color: #333;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.search-input:focus {
    border-color: #004aad;
    box-shadow: 0 0 10px rgba(0, 74, 173, 0.3);
    outline: none;
}

.search-results {
    margin-top: 20px;
    list-style: none;
    padding: 0;
}

.search-results li {
    padding: 10px;
    background: #f9f9f9;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s, box-shadow 0.3s;
}

.search-results li:hover {
    background: #004aad;
    color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Popular Hospitals Section */
.popular-hospitals {
    background: #f9f9f9;
    padding: 50px 30px;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-top: 20px;
}

.popular-hospitals h2 {
    margin-bottom: 30px;
    color: #004aad;
    font-size: 2rem;
    font-weight: bold;
}

.hospital-images {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    animation: fadeIn 1s ease-out;
}

.hospital-images img {
    width: 280px;
    height: 200px;
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.hospital-images img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

/* Footer */
.footer {
    background: #004aad;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-size: 0.9rem;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <a class="logo">HealthConnect</a>
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
        <h1>Find Your Hospital</h1>
        <p>Search and find the hospital that suits your needs.</p>
    </header>

    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <h2>Search for a Hospital</h2>
            <input type="text" class="search-input" id="hospitalSearch" placeholder="Type hospital name...">
            <ul class="search-results" id="resultsList">
                <!-- Results will be dynamically added here -->
            </ul>
        </div>
    </section>

    <!-- Popular Hospitals Section -->
    <section class="popular-hospitals">
        <div class="container">
            <h2>Popular Hospitals</h2>
            <div class="hospital-images">
                <img src="cityhospital.jpg" alt="City Hospital" onclick="window.location.href='cityhospital.php'">
                <img src="jnu.jpg" alt="JNU Hospital" onclick="window.location.href='jnu.php'">
                <img src="fortis.jpg" alt="Fortis Hospital" onclick="window.location.href='fortis.php'">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 HealthConnect. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Search functionality (mockup)
        const hospitals = [
            { name: 'City Hospital', link: 'cityhospital.php' },
            { name: 'JNU Hospital', link: 'jnu.php' },
            { name: 'Fortis Hospital', link: 'fortis.php' },
        ];

        document.getElementById('hospitalSearch').addEventListener('input', function() {
            const query = this.value.toLowerCase();
            const resultsList = document.getElementById('resultsList');
            resultsList.innerHTML = '';
            
            if (query) {
                const results = hospitals.filter(hospital => hospital.name.toLowerCase().includes(query));
                results.forEach(hospital => {
                    const li = document.createElement('li');
                    li.textContent = hospital.name;
                    li.onclick = () => window.location.href = hospital.link;
                    resultsList.appendChild(li);
                });
            }
        });
    </script>
</body>
</html>

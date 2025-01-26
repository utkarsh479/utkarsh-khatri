<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Bed Booking Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <style>
        /* General Style Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #e0c3fc, #8ec5fc);
            min-height: 100vh;  /* Ensure the body covers the entire viewport */
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
            overflow-y: auto; /* Enable vertical scrolling */
        }

        /* Navigation Bar Styles */
        .navbar {
            width: 100%;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .navbar ul li {
            display: inline-block;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #4527a0;
            font-weight: bold;
            font-size: 1.2rem;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #fff;
            background-color: #5e35b1;
            border-radius: 15px;
        }

        /* Booking Form Style */
        .booking-form-container {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 800px;
            width: 100%;
            margin-top: 120px;
            margin-bottom: 40px; /* Ensure some space at the bottom */
        }

        /* Booking Form Header */
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #5e35b1;
            font-family: 'Poppins', sans-serif;
        }

        .form-header p {
            font-size: 1.2rem;
            color: #7a52a7;
            margin-top: 10px;
        }

        /* Availability Status Section */
        .availability-status {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .availability-status h3 {
            font-size: 2rem;
            color: #5e35b1;
            margin-bottom: 20px;
        }

        .availability-card {
            display: inline-block;
            width: 200px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px;
            text-align: center;
        }

        .availability-card h4 {
            font-size: 1.2rem;
            color: #5e35b1;
            margin-bottom: 10px;
        }

        .availability-card p {
            font-size: 1rem;
            color: #333;
        }

        /* Input Fields */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #4527a0;
            font-weight: 600;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.5);
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Grid layout for form */
        .form-table {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-table-cell {
            display: flex;
            flex-direction: column;
        }

        /* Submit Button */
        .btn-submit {
            display: block;
            width: 100%;
            background: #5e35b1;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            text-align: center;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .btn-submit:hover {
            background: #4527a0;
            transform: scale(1.05);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-table {
                grid-template-columns: 1fr;
            }

            .btn-submit {
                font-size: 1rem;
            }

            .availability-card {
                width: 100%;
                margin: 10px 0;
            }
        }

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Bed Availability</a></li>
            <li><a href="#">OPD Appointment</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Booking Form Container -->
    <div class="booking-form-container">
        <div class="form-header">
            <h2>FORTIS HOSPITAL</h2>
            <p>Check availability & make a reservation</p>
        </div>

        <!-- Availability Status Section -->
        <div class="availability-status">
            <h3>Ward Availability Status</h3>
            <div class="availability-card">
                <h4>General Ward</h4>
                <p>Available: 15 beds</p>
            </div>
            <div class="availability-card">
                <h4>ICU</h4>
                <p>Available: 8 beds</p>
            </div>
            <div class="availability-card">
                <h4>NICU</h4>
                <p>Available: 5 beds</p>
            </div>
            <div class="availability-card">
                <h4>Maternity Ward</h4>
                <p>Available: 10 beds</p>
            </div>
        </div>

        <!-- Form -->
        <form action="#" method="post">
            <div class="form-table">
                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                </div>

                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required>
                    </div>
                </div>

                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="ward">Select Ward:</label>
                        <select id="ward" name="ward" required>
                            <option value="">Select Ward</option>
                            <option value="general">General Ward</option>
                            <option value="icu">ICU</option>
                            <option value="nicu">NICU</option>
                            <option value="maternity">Maternity Ward</option>
                        </select>
                    </div>
                </div>

                <!-- Additional Patient Information Fields -->
                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="heartRate">Heart Rate (bpm):</label>
                        <input type="number" id="heartRate" name="heartRate" required>
                    </div>
                </div>

                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="systolicBP">Systolic Blood Pressure (mmHg):</label>
                        <input type="number" id="systolicBP" name="systolicBP" required>
                    </div>
                </div>

                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="diastolicBP">Diastolic Blood Pressure (mmHg):</label>
                        <input type="number" id="diastolicBP" name="diastolicBP" required>
                    </div>
                </div>

                <div class="form-table-cell">
                    <div class="form-group">
                        <label for="severity">Condition Severity (1 to 5):</label>
                        <input type="number" id="severity" name="severity" min="1" max="5" required>
                    </div>
                </div>

                <div class="form-table-cell" style="grid-column: span 2;">
                    <div class="form-group">
                        <label for="comments">Comments/Requirements:</label>
                        <textarea id="comments" name="comments" rows="4" placeholder="Any specific requirements"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit">Submit Booking</button>
        </form>
    </div>
</body>
</html>

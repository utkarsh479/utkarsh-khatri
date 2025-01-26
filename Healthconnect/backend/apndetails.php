<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>city apn details</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 50px auto;
        }

        /* Header Section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background-color: #004aad;
            padding: 20px;
            color: white;
            border-radius: 8px;
        }

        .header h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #e5554f;
        }

        /* Search Bar */
        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
        }

        .search-bar input[type="text"] {
            width: 250px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #004aad;
            color: white;
        }

        thead th {
            padding: 15px;
            text-align: left;
            font-size: 1rem;
        }

        tbody td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Pagination Styles */
        .pagination {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            display: block;
            padding: 10px 15px;
            background-color: #fff;
            border: 1px solid #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #004aad;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.4rem;
            }

            .search-bar input[type="text"] {
                width: 100%;
            }

            tbody td {
                font-size: 0.9rem;
            }

            thead th {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>City Hospital - Appointment Details</h1>
            <button class="logout-btn">Logout</button>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by patient name...">
        </div>

        <!-- Table for Appointment Details -->
        <table id="appointmentTable">
            <thead>
                <tr>
                    
                    <th>Patient Name</th>
                    <th>E mail</th>
                    <th>Mobile</th>
                    <th>symptoms</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Data Rows -->
                <tr>
                <?php
        error_reporting(0);

        $servername = "localhost";
        $username = "root";
        $passwordname = "";
        $dbname = "appoinment";

        // Create connection
        $conn = mysqli_connect($servername, $username, $passwordname, $dbname);

        // Check connection
        if ($conn) {
            // Connection is OK
        } else {
            echo "Connection failed: " . mysqli_connect_error();
        }

        // SQL query to select student records
        $query = "SELECT * FROM APNDETAILS";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);

        // Display the fetched data in the table
        if ($total > 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "
                <tr>
                    <td>" . htmlspecialchars($result['name']) . "</td>
                    <td>" . htmlspecialchars($result['email']) . "</td>
                    <td>" . htmlspecialchars($result['mobile']) . "</td>
                    <td>" . htmlspecialchars($result['symptoms']) . "</td>
                    <td>" . htmlspecialchars($result['date']) . "</td>
                    <td>" . htmlspecialchars($result['time']) . "</td>
                </tr>
                ";
            }
        } else {
            echo "
            <tr>
                <td colspan='3' class='no-records'>No records found</td>
            </tr>
            ";
        }

        // Close the connection
        mysqli_close($conn);
        ?>
                </tr>
                 
            </tbody>
        </table>

        <!-- Pagination -->
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

    <script>
        // Simple Search Function
        function searchTable() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const table = document.getElementById("appointmentTable");
            const rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName("td");
                let match = false;

                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].textContent.toLowerCase().includes(filter)) {
                        match = true;
                        break;
                    }
                }

                rows[i].style.display = match ? "" : "none";
            }
        }
    </script>
</body>
</html>

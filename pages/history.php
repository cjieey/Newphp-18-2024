<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="../css/history.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="side-nav">
            <div class="logo">
                <img src="../media/coffee.jpg" alt="logo">
                <h1>Kape Bai</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li><a href="history.php">History</a></li>
                </ul>
            </nav>
            <div class="logout-btn">
                <a href="loginpage.php"><i class="fa-solid fa-gear"></i>LOGOUT</a>
            </div>
        </div>
        
        <div class="orders-table">
        <h1>KAPE BAI "HISTORY"</h1>
    <table class="order-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Step 1: Connect to your MySQL database
            $connection = mysqli_connect("localhost", "root", "", "kapebai_db");

            // Check connection
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Step 2: Retrieve data from the database
            $sql = "SELECT id, Pname, quantity, total_price, dates FROM orders";
            $result = mysqli_query($connection, $sql);

            // Step 3: Display data in HTML table
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["Pname"]."</td>";
                    echo "<td>".$row["quantity"]."</td>";
                    echo "<td>".$row["total_price"]."</td>";
                    echo "<td>".$row["dates"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }

            // Step 4: Close the database connection
            mysqli_close($connection);
            ?>
        </tbody>
    </table>
</div>
    </div>
</body>
</html>

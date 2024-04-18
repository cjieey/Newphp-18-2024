<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`i, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="../css/order.css">
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
        <!-- Order List -->
        <div class="box-2">
            <h1>ORDER LIST</h1>
            <div class="box-3">
                <div class="box-left">
                    <h3 class="palit">2 ORDER ------------------------------------ 00.00</h3>
                    <h3 class="palit">4 ORDER ------------------------------------ 00.00</h3>
                    <h3 class="palit">5 ORDER ------------------------------------ 00.00</h3>
                    <h3 class="palit">8 ORDER ------------------------------------ 00.00</h3>
                    <h3 class="palit2">3 ORDER ------------------------------------ 00.00</h3>
                    <h3 class="total">_____</h3>
                    <h3 class="total">00.00</h3>
                </div>

                <div class="box-right">
                <h2>NOTE</h2>
                <div class="box-in">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                </div>
            </div>

            <div class="buttons">
                <button class="remove">REMOVE</button>
                <button class="cancel">CANCEL</button>
                <button class="order">ORDER</button>
            </div>
        </div>
    </div>
</body>
</html>
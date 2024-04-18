<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="../css/pastries.css">
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
                </ul>
            </nav>
            <div class="logout-btn">
                <a href="loginpage.php"><i class="fa-solid fa-gear"></i>LOGOUT</a>
            </div>
        </div>

        <!-- Menu Section -->
        <section class="category-1">
                <header class="head-menu">
                    <div class="menu-bar hot">
                        <img src="../media/1.png">
                        <a href="menu.php">HOT COFFEE</a>
                    </div>
                    <div class="menu-bar ice">
                        <img src="../media/2.png">
                        <a href="iced-coffee.php">ICED COFFEE</a>
                    </div>
                    <div class="menu-bar pastries">
                        <img src="../media/3.png">
                        <a href="pastries.php">PASTRIES</a>
                    </div>
                </header>
                <h1>PASTRIES MENU</h1>
                <div class="menu">
                    <div class="menu-1">
                        <div class="first">
                            <div class="menu-img">
                                <img src="../media/chocolate_cake.png">
                            </div>
                            <div class="content">
                                <h2>Chocolate Cake</h2>
                                <h3>₱150.00</h3>
                            </div>
                        </div>
                            <div class="wrapper">
                                <span class="minus">-</span>
                                <span class="num">01</span>
                                <span class="plus">+</span>
                            </div>
                        <div class="addBtn">
                            <button>ADD TO ORDERS</button>
                        </div>
                    </div>

                    <div class="menu-1">
                        <div class="first">
                            <div class="menu-img">
                                <img src="../media/Cinnamon_roll.png">
                            </div>
                            <div class="content">
                                <h2>Cinnamon Roll</h2>
                                <h3>₱50.00</h3>
                            </div>
                        </div>
                            <div class="wrapper">
                                <span class="minus">-</span>
                                <span class="num">01</span>
                                <span class="plus">+</span>
                            </div>
                        <div class="addBtn">
                            <button>ADD TO ORDERS</button>
                        </div>
                    </div>
                    
                    <div class="menu-1">
                        <div class="first">
                            <div class="menu-img">
                                <img src="../media/empanada-borek-puff.png">
                            </div>
                            <div class="content">
                                <h2>Empanada Borek Puff</h2>
                                <h3>₱50.00</h3>
                            </div>
                        </div>
                            <div class="wrapper">
                                <span class="minus">-</span>
                                <span class="num">01</span>
                                <span class="plus">+</span>
                            </div>
                        <div class="addBtn">
                            <button>ADD TO ORDERS</button>
                        </div>
                    </div>
                    
                </div>                
        </section>
    </div>
    <!-- Javascript -->
    <script>
        const plus = document.querySelector(".plus"),
         minus = document.querySelector(".minus"),
         num = document.querySelector(".num");
         let a = 1;
         plus.addEventListener("click", ()=>{
           a++;
           a = (a < 10) ? "0" + a : a;
           num.innerText = a;
         });
     
         minus.addEventListener("click", ()=>{
           if(a > 1){
             a--;
             a = (a < 10) ? "0" + a : a;
             num.innerText = a;
           }
         });
     
       </script>
</body>
</html>
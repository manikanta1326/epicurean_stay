<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epicureanstay</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="left-nav">
            <img src="img\logo.png" alt="logo">
        </div>
        <div class="right-nav">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About Us</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <li class="item"><a href="food.php">Food</a></li>
                <li class="item"><a href="cart.php">Cart</a></li>
                <li class="item"><a href="bookinghall.php">Hall-Booking</a></li>
                <li class="item"><a href="contact.php">Contact Us</a></li>
                <li class="item"><a href="feedback.php">Feedback</a></li>
                <li class="item"><a href="admin.php">Admin</a></li>
               
                
            </ul>
        </div>
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "
                <div class='user'>

                    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                </div>
                ";
            }
            else{
                echo "
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">Login</button>
                <button type='button' onclick=\"popup('register-popup')\">Register</button>
                </div>
                ";
            }
        ?>
    </nav>

    <!---------------- login --------------------------------->
    <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
            <div class="forgot-btn">
                <button type="button" onclick="forgotPopup()">Forgot Password</button>
            </div>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="FULL NAME"  name="fullname" required>
                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-Mail"  name="email" required>
                <input type="password" placeholder="Password"  name="password" required>
                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>

    <!-- <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>Reset Password</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="email" placeholder="E-mail" name="email">
                
                <button type="submit" class="reset-btn" name="send-reset-link">Send Link</button>
            </form>
            
        </div>
    </div>
    <!-- <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
         echo"<h1 style='text-align:center; margin-top:200px'>Welcome - $_SESSION[username]</h1>";
      }
    ?> --> 

    <!------------Home ----------------------->
    <section id="home">
        <h1 class="h1">Welcome to Our Hotel </h1>
        <p class="p">Our Hotel is<span class="span">Epicurean stay</span> : large comfortable beds covered with special bedspreads that get made by themselves, and bathrooms that are clean and shiny.</p><br>
        <p class="p">Hotel rooms are known for having terraces with <span class="span">views that are perfect for enjoyment</span> views that are perfect for enjoyment.</p>

    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">A.C Delux Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 1100rs.</p>
          <p class="price">Price per room : 1100Rs/-</p>
          <a href="room.php"><button class="price-btn" >Book A Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
          </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
          <p class="sectionTag">A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 900rs.</p>
          <p class="price">Price per room : 900Rs/-</p>
          <a href="room.php"><button class="price-btn">Book A Room</button></a>
          </div>
          <div class="thumbnail">
           <img src="img/ac4.jpg" alt="delux" class="imgFluidd">
          </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">Non A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 700rs.</p>
          <p class="price">Price per room : 700Rs/-</p>
            <a href="room.php"><button class="price-btn">Book A Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/nonacroom.jpg" alt="delux" class="imgFluid">
          </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="h-primary center">Our Speciality</h1>
        <div id="services">
            <div class="box">
                <a href="food.php #chinese"><img src="img/manchu.png" alt="manchurion"></a>
               <h2 class="h-secondary center">Chinese</h2>
               <p class="center">Chinese food is diverse and flavorful, featuring a variety of dishes like dumplings, noodles, fried rice, and Peking duck. It’s known for its unique combination of sweet, sour, salty, and spicy flavors. Many people enjoy Chinese food for its delicious taste and the balance of textures and ingredients in each dish.</p>
            </div>
            <div class="box">
                 <a href="food.php #italian"><img src="img/pasta.png" alt="pasta"></a>
                <h2 class="h-secondary center">Italian</h2>
                <p class="center">Italian food is beloved worldwide for its fresh ingredients and rich flavors, featuring dishes like pasta, pizza, risotto, and gelato. Italian cuisine emphasizes the use of high-quality olive oil, tomatoes, cheese, and herbs like basil and oregano. Its diverse regional specialties make Italian food a favorite for many.</p>
             </div>
             <div class="box">
             <a href="food.php #mah"><img src="img/mah.png" alt="maharshtrian"></a>
                <h2 class="h-secondary center">Maharashtrian</h2>
                <p class="center">Maharashtrian food is known for its bold flavors and diverse dishes, such as puran poli, vada pav, misal pav, and bhakri. The cuisine balances spicy, tangy, and sweet elements, often using ingredients like coconut, peanuts, and kokum. It reflects the culture and traditions of Maharashtra, offering both vegetarian and non-vegetarian options.</p>
             </div>
        </div>

        <div id="services">
            <div class="box">
            <a href="food.php #punjabi"><img src="img/panner.png" alt="panner"></a>
               <h2 class="h-secondary center">Punjabi</h2>
               <p class="center">Punjabi food is known for its rich, hearty flavors, featuring dishes like butter chicken, sarson da saag with makki di roti, chole bhature, and paneer tikka. It often uses dairy products like ghee, butter, and cream, creating a delicious and robust cuisine that highlights spices, lentils, and fresh vegetables.
               </p>
            </div>
            <div class="box">
            <a href="food.php #southindian"><img src="img/dosa.png" alt="dosa"></a>
                <h2 class="h-secondary center">South-Indian</h2>
                <p class="center">South Indian cuisine is renowned for its variety and flavors, featuring popular dishes like dosa, idli, sambar, vada, and uttapam. It is characterized by the use of ingredients like coconut, rice, lentils, tamarind, and spices such as mustard seeds and curry leaves. Known for its balance of spicy, tangy, and savory tastes, South Indian food is often served with various chutneys and is loved for its light, wholesome, and aromatic qualities. </p>
             </div>
             <div class="box">
             <a href="food.php #deserts"><img src="img/faluda.png" alt="faluda"></a>
                <h2 class="h-secondary center">Deserts</h2>
                <p class="center">Desserts are sweet treats enjoyed around the world, ranging from rich cakes and creamy puddings to refreshing sorbets and decadent chocolates. Common ingredients include sugar, fruits, nuts, chocolate, and dairy. Desserts can be simple, like cookies or ice cream, or elaborate, like layered pastries and intricate cakes. They often serve as the perfect ending to a meal, providing a delightful contrast to savory dishes and a satisfying sweetness that many people crave.</p>
             </div>
        </div>
       
    </section>

    
    <section id="booking-hall">
        <h1 class="h1">Party And Marriage Halls</h1>
        <button id="book-btn"><a href="bookinghall.php"> Book A HAll Now</a></button>

    </section>
<!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>Our mission is to make every stay memorable by delivering top-notch services in room booking, food ordering, and function hall reservations. Whether you’re here for a relaxing vacation, a business trip, or a special event, Epicurean Stay ensures a seamless and enjoyable experience.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFULL LINKS</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="booking.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>Vijayawada,NTR, <br>Andhra pradesh,Pin-521180 <br>+91 9999911111 <br>@epicureanstay.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Monday: 7:AM - 12Pm
                    </div>
                  
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Tue-Wed: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thur-Fri: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Sat-Sun: 7:Am - 12Pm
                    </div>


                </div>
            </div>
        </div>
    </section>
    

    <script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
    </script>
</body>
</html>
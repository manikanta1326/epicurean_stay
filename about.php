<?php
include('dbcon.php');
include('header.php');
?>
<style>
.about-container{
    display: flex;
    justify-content: center;
    margin-left: 10px;
    flex-direction: column;
    margin-top: 50px;
    width: 98%;
    height: 1000px;
    background-color: brown;
    border-radius: 30px;

}

.about{
    display: flex;
    margin: 30px;
}
.about1 img{
    border-radius: 10px;
    padding-right: 30px;
    width: 700px;
}
.about-h1{
    text-align: center;
    
    padding-bottom: 7px;
}
.about-p{
    text-align: center;
    font-size: 20px;
    color: white;
}
.about2 .h1{
    background-color: rgb(209, 52, 52);
    border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 800;
  font-family: Arial, Helvetica, sans-serif;
  padding-top:6px;
  margin-bottom: 20px;
}

.about-box-1{
    display: flex;
}
.box1{
    border: 3px solid black;
    margin: 25px;
    border-radius: 20px;
}
.box1-img img{
    width: 350px;
    padding: 20px;
}
.box1-text{
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.box1-text-h1{
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 10px;
}
.box1-text-h1 a{
    text-decoration: none;
    color: white;
}
.box1-text-p{
    padding: 4px 0;

}
.box1-text-p ul li{
    padding: 3px 0;
    font-size: 17px;
}
</style>

<div class="about-container">
    <div class="about">
        <div class="about1">
            <img src="img/dinning.jpg" alt="dinning">
        </div>
        <div class="about2">
            <div class="h1"><h1 class="about-h1">Welcome to Epicurean Stay</h1></div>
            <p class="about-p">At Epicurean Stay, we are dedicated to providing an exceptional hospitality experience that combines comfort,
                convenience, and luxury. Our hotel management system is designed to streamline and enhance your stay with us, offering a range
                of services that cater to all your needs.Room service or in-room dining is a hotel service enabling guests to choose items of food
                and drink for delivery to their hotel room for consumption. Room service is organised as a subdivision within the food and beverage
                department of high-end hotel and resort properties. It is uncommon for room service to be offered in hotels that are not high-end,
                 or in motels. Room service may also be provided for guests on cruise ships. Room service may be provided on a 24-hour basis or limited to late night hours only.
                Due to the cost of customized orders and delivery of room service, prices charged to the patron are typically much higher than in the hotel's restaurant or tuck shop,
                and a gratuity is expected.Room service or in-room dining is a hotel service enabling guests to choose items of food and drink for delivery to their hotel room for consumption.
                Room service is organised as a subdivision within the food and beverage department of high-end hotel and resort properties.
                It is uncommon for room service to be offered in hotels.</p>
        </div>
    </div>
    <div class="about-box">
    <div class="h1"><h1 class="about-h1">What we Offers:</h1></div>
        <div class="about-box-1">
             <div class="box1">
                 <div class="box1-img">
                     <img src="img/deluxroom.jpg" alt="delux">
                 </div>
                 <div class="box1-text">
                   
                     <div class="box1-text-h1"><a href="room.php"><h3>Rooms</h3></a></div>
                     <p class="box1-text-p">
                         <ul>
                             <li class="box1-li">Delux AC Room</li>
                             <li class="box1-li"> AC Room</li>
                             <li class="box1-li">Non AC Room</li>
                         </ul>
                     </p>
                    
                 </div>
             </div>

             <div class="box1">
                 <div class="box1-img">
                     <img src="img/dinning4.jpg" alt="delux">
                 </div>
                 <div class="box1-text">
                     <div class="box1-text-h1"><a href="food.php"><h3>Food</h3></a></div>
                     <p class="box1-text-p">
                         <ul>
                             <li class="box1-li">South-Indian</li>
                             <li class="box1-li"> Chinese</li>
                             <li class="box1-li">Deserts</li>
                         </ul>
                     </p>
                     
                 </div>
             </div>

             <div class="box1">
                 <div class="box1-img">
                     <img src="img/partyhall2.jpg" alt="delux">
                 </div>
                 <div class="box1-text">
                     <div class="box1-text-h1"><a href="bookinghall.php"><h3>Halls</h3></a></div>
                     <p class="box1-text-p">
                         <ul>
                             <li class="box1-li">Party Halls</li>
                             <li class="box1-li"> Marriage Halls </li>
                             <li class="box1-li">Pools</li>
                         </ul>
                     </p>
                     
                    
                 </div>
             </div>
             
            
             
         </div>
    </div>
    
</div>
<?php
include('headfooter.php');
?>
</body>
</html>
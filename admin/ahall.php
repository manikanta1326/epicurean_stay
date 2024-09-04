<?php
 include('../dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room</title>
    <link rel="stylesheet" href="stylee.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&family=Rubik&display=swap" rel="stylesheet">
</head>
<style>
    .admin-booking{
        background:rgba(255,255,255,0.5); 
        
    }
    .admin-booking h1{
        text-align:center;
        margin-top: 20px;
    }
    body::before{
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 0.89;
    background: url('../img/adminhotel2.jpg') center center/cover no-repeat;
    }
    .admin-booking table tr{
        font-size:20px;
        font-family: 'Rubik', sans-serif;
    }
</style>
<body>
<nav class="navbar">
    <div class="left-nav">
            <h3>Admin Pannel</h3>
        </div>
        <div class="right-nav">
        <ul>
            <li><a href="aroom.php">Room </a></li>
            <li><a href="adminfood.php">Food</a></li>
            <li><a href="ahall.php">Hall</a></li>
            <li><a href="admindash.php">Admin Dash</a></li>
        </ul>
        <ul>
            <li><a href="afeedback.php">Feedback</a></li>
            <li><a href="acontect.php">Contect</a></li>
        </ul>
    </div>
</nav>

    <div class="admin-booking">
        <h1 class="admin-book">Welcome Admin To Booking <Section></Section></h1>
        <table>
            <tr>
                    <th width="10%" height="50px">Id</th>
                    <th width="10%" height="50px">Name</th>
                     <th width="10%" height="50px">Address</th>
                     <th width="10%" height="50px">State</th>
                     <th width="10%" height="50px">City</th>
                     <th width="10%" height="50px">Email</th>
                     <th width="10%" height="50px">Date</th>
                     <!--<th width="10%" height="50px">Check Out Date</th>-->
                     <th width="10%" height="50px">Members</th>
                     <th width="10%" height="50px">Function</th>
                     <!-- <th width="10%" height="50px">No Of rooms</th> -->

            </tr>
            <?php
               $qry="SELECT * FROM `hall_details`";
               $run=mysqli_query($sql,$qry);
                
                 while( $row=mysqli_fetch_assoc($run))
                 {
                    $id=$row['id'];
                    $name=$row['name'];
                    $address=$row['address'];
                    $state=$row['state'];
                    $city=$row['city'];
                    $email=$row['email'];
                    $date=$row['date'];
                    $members=$row['members'];
                    $function=$row['function'];
                    // $noofroom=$row['noofroom'];

                    ?>
                    <tr>
                    <td width="10%" height="50px"><center><?php echo $id; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $address; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $state; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $city; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $email; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $date; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $members; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $function; ?></center></td>
                     <!-- <td width="10%" height="50px"><center></center></td> -->
                     
                 </tr>

                    <?php
                 }
            ?>
        </table>
    </div>
</body>
</html>
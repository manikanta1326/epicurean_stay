<?php
include('dbcon.php');

// Check if 'hall' key exists in the $_POST array
if (isset($_POST['hall'])) {
    $h = $_POST['hall'];
} else {
    // Provide a default value or handle the case where 'hall' is not set
    $h = ''; // Default value or you can handle it differently
}

// Now you can safely use $h
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-hall form</title>
</head>
<style>
    #foem-1{
        width: 99%;
        display: flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        content:"";
        position: absolute;
        height:100%;
        background: url('img/adminhotel2.jpg') center center/cover no-repeat;
        border-radius:20px;
    }
    #foem-1 h1{
        text-align:center;
    }
    form{
        display: flex;
        flex-direction:column;
        border:2px solid black;
        padding: 30px;
    }
    form tr{
       padding:20px;
    }
    form tr td{
        display: flex;
    }
    form tr td input{
        width: 80%;
    }
    .g{
        color:green;
        font-size:30px;
        font-weight:500;
    }
    
</style>
<body>
    <div id="foem-1">
        <h1>Hall Booking Form</h1>
        <form action="" method="post">
            <?php
              $qry="SELECT * FROM `hall` WHERE `status`='un book'";
              $run=mysqli_query($sql,$qry);
              $row=mysqli_num_rows($run);
              if($row>0)
              {
                ?>
                <tr>
                  <td>Status</td>
                  <td><input type="text" name="Status" value="Available" class="g" disabled="disabled" title="Status"></td>
                 
                  
                </tr>
                <br>
                <tr>
                 <th>Name</th>
                 <td><input type="text" name="name" placeholder="Enter Name" title="Name" required></td>
                 
                </tr>
                <br>
                <tr>
                  <td>Address</td>
                  <td><input type="text" name="address" placeholder="Enter Address " title="Address" required> </td>
                </tr>
                <br>
                <tr>
                  <td>State</td>
                  <td><input type="text" name="state" placeholder="Enter state " title="state" required> </td>
                </tr>
                <br>
                <tr>
                  <td>City</td>
                  <td><input type="text" name="city" placeholder="Enter City " title="City" required> </td>
                </tr>
                <br>
             
                <tr>
                  <td>Enter E-mail:</td>
                  <td><input type="text" name="email" placeholder="Enter E-Mil" title="E-mail" required></td>
                </tr>
                <br>
                <tr>
                  <td>Booking Date:</td>
                  <td><input type="date" name="date" value="<?php echo $h; ?>" disabled="disabled"   title="Check in" required></td>
                  
                </tr>
                <br>
                <tr>
                 <td>Enter Members:</td>
                 <td><input type="text" name="members" placeholder="Enter Members" title="Members" required></td>
                </tr>
                <br>
                <tr>
                 <td>Function Name:</td>
                 <td><input type="text" name="functions" placeholder="Enter Members" title="Members" required></td>
                </tr>
                <br>
                   <td>
                        <td><input style="width:120px; height:30px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value=submit></td>
                   </td>

                <?php
              }
              else{
                ?>
                <tr>
                  <td>Status</td>
                  <td><input type="text" name="Status" value="Not Availble" class="r" disabled="disabled" title="Status"></td>
                 
                  
                </tr>
                <?php
              }

            ?>
            
              <?php
                include('dbcon.php'); // Ensure you have included the database connection
                
                if (isset($_POST['submit'])) {
                    // Check and sanitize inputs
                    $hname = isset($_POST['name']) ? mysqli_real_escape_string($sql, $_POST['name']) : '';
                    $haddress = isset($_POST['address']) ? mysqli_real_escape_string($sql, $_POST['address']) : '';
                    $hstate = isset($_POST['state']) ? mysqli_real_escape_string($sql, $_POST['state']) : '';
                    $hcity = isset($_POST['city']) ? mysqli_real_escape_string($sql, $_POST['city']) : '';
                    $hemail = isset($_POST['email']) ? mysqli_real_escape_string($sql, $_POST['email']) : '';
                    $hdate = isset($_POST['date']) ? mysqli_real_escape_string($sql, $_POST['date']) : '';
                    $hmembers = isset($_POST['members']) ? mysqli_real_escape_string($sql, $_POST['members']) : '';
                    $function = isset($_POST['functions']) ? mysqli_real_escape_string($sql, $_POST['functions']) : '';
                
                    // Prepare SQL query
                    $qry = "INSERT INTO `hall_details`(`id`, `name`, `address`, `state`, `city`, `email`, `date`, `members`, `function`) 
                            VALUES ('', '$hname', '$haddress', '$hstate', '$hcity', '$hemail', '$hdate', '$hmembers', '$function')";
                
                    // Execute the query
                    $run = mysqli_query($sql, $qry);
                
                    if ($run) {
                        // Redirect using PHP header function
                        header('Location: cartpayment2.php');
                        exit; // Ensure no further code is executed after redirection
                    } else {
                        // Handle the error
                        echo "Error: " . mysqli_error($sql);
                    }
                }
              ?>
                
            
        </form>
    </div>
</body>
</html>
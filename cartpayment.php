<?php
include('dbcon.php');
session_start();

$foodItems = "";

// Check if cart items were sent from cart.php
if (isset($_POST['cart_items'])) {
    // Decode JSON cart items
    $cartItems = json_decode($_POST['cart_items'], true);

    // Extract item names and quantities
    foreach ($cartItems as $item) {
        $foodItems .= $item['item_name'] . ' (' . $item['quantity'] . '), ';
    }

    // Trim the trailing comma and space
    $foodItems = rtrim($foodItems, ', ');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Info</title>
    <style>
        /* Your existing styles here */
        * {
            padding: 0;
            margin: 0;
        }

        #image-payment::before {
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            background: url('img/slider1.jpg') center center/cover no-repeat;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 250px;
        }

        .form-input-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: 5px solid black;
            border-radius: 10px;
            width: 40%;
        }

        .form-group {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .form-group input {
            margin-left: 20px;
            text-align: center;
            width: 60%;
        }

        .form-group label {
            font-size: 20px;
            color: yellow;
        }

        .cart-btn {
            margin-bottom: 20px;
            width: 50%;
            margin-left: 160px;
            padding: 5px 0;
            background-color: green;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="image-payment">
        <form action="" method="POST">
            <div class="form-input-container">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Phone No</label>
                    <input type="number" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Your Address</label>
                    <input type="text" name="addresss" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Your Food Items</label>
                    <input type="text" name="food" class="form-control" required value="<?php echo htmlspecialchars($foodItems); ?>">
                </div>
                <button class="cart-btn" name="purchase">Make Purchase</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['purchase'])) {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['addresss'];
    $food = $_POST['food'];
    $qry = "INSERT INTO `food`(`id`, `full_name`, `phone`, `address`, `food`) VALUES ('', '$fullname', '$phone', '$address', '$food')";
    $run = mysqli_query($sql, $qry);
    if ($run) {
        header('location:cartpayment2.php');
    } else {
        echo "<script>alert('Information not saved.');</script>";
    }
}
?>

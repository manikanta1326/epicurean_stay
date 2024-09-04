<?php
   $con=mysqli_connect("localhost","root","","restarent_management");
   
   if(mysqli_connect_error())
   {
       echo"<script>alert('Cannot Connect');</script>";
       exit();
   }

?>
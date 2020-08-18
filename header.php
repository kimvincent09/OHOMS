<?php
session_start();

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href="styles/style.css">
        <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <script>
    //   $(document).ready(function(){
    //       $("form").submit(function(e){
    //           e.preventDefault();
    //           var name = $("#name").val();
    //           var email = $("#email").val();
    //           var password = $("#password").val();
    //           var property = $("#property").val();
    //           var address = $("#address").val();
    //             $(".form-message").load("includes/signup.inc.php", {
    //                 name: name,
    //                 email: email,
    //                 password: password,
    //                 property: property,
    //                 address: address
    //             });
    //         })
    //   })
    </script>
        <title>Online Home Owners Management System</title>

</head>';

if(isset($_SESSION['userId']))
echo 
'<body>


    <nav>
        <div class="user">
        
  
    <ul class="nav">
        <li class="navbar"><a href = "#">Home</a></li>
        <li class="navbar"><a href = "#">Account</a></li>
        <li class="navbar members">Members <i class="fa fa-chevron-down"></i></li>
        <ol class="conceal">
        <li class="navbar sub"><a href = "committee/create.php">Committee</a></li>
        <li class="navbar sub"><a href = "tenants/create.php">Tenants</a></li>
        </ol>
        <li class="navbar"><a href = "#">Events</a></li>
        <li class="navbar"><a href = "#">Property</a></li>
        <li class="navbar"><a href = "#">Work Order</a></li>
        <li class="navbar"><a href = "#">Calendar</a></li>
        <li class="navbar"><a href = "#">Reports</a></li>
        <li class="navbar"><a href = "#">Payment</a></li>
      
    </ul>
    </nav>
    <div class="header">
        <div class="burger">
        <i class="fa fa-bars"></i>
        </div>

        <h1> Online Home Owners Management System</h1>
      
        <center> <form action = "includes/logout.inc.php" method="post"> <button type = "submit" name="logout" class="btn">Logout</button>
        </form></center>
    </div>
    <main>
       
    </main>
<script src="scripts/dropdown.js"></script>';
else

echo '<body>

    <div class="header">
   

        <h1> Online Home Owners Management System</h1>
      
    </div>
  
    <div class="signup">
    <form method = "post" action ="includes/login.inc.php" id="signup" class="form">
    <h2 class="reg-title">Member Login</h2>
   <div class="input-container">
   <icon class="fa fa-envelope"></icon>
    <input type=text name="email" placeholder="Email" id="email" size = 30>
   </div>
   <div class="input-container">
    <icon class="fa fa-eye-slash"></icon>
    <input type=password name="password" placeholder="Password" id="password" size = 30>
   </div>
   
   
    <button type = "submit" class="btn" name = "login">Login</button>
   </form>
   </div>
  
<script src="scripts/dropdown.js"></script>'
?>

<?php
require_once "../header.php";

error_reporting(0);
?>
        <link rel = "stylesheet" href="../styles/style.css">
    <div class="signup">
        <form method = "post" action ="../includes/committee/signup.php" id="signup" class="form" >
        <h2 class="reg-title">Add Committee</h2>
        <?php
        if(isset($_GET['error'])){
                if($_GET['error']== "emptyfields"){
                         echo '<p class = "error alert">Fill in all fields!</p>';
                }
                else if ($_GET['error'] == "invalidemail"){
                        echo '<p class = "error"> Invalid email!</p>';
                }
                else if ($_GET['error'] == "usertaken"){
                        echo '<p class = "error"> User is already in the database!</p>';
                }
        }
        else if($_GET['signup'] == "success"){
                echo '<p class="success"> Registration Successful!</p>';
        };
        ?>
        <div class="input-container">      
            <icon class="fa fa-user"></icon>
        <input type="text" name="name" placeholder = "Name" id="name" size = 30>
</div>
<div class="input-container">
<icon class="fa fa-envelope"></icon>
        <input type=text name="email" placeholder="Email" id="email" size = 30>
</div>
<div class="input-container">
        <icon class="fa fa-eye-slash"></icon>
        <input type=password name="password" placeholder="Password" id="password" size = 30>
</div>
<div class="input-container">
<icon class="fa fa-key"></icon>
        <input type=text name="property"placeholder="Property" id="property" size="30">
</div>
<div class="input-container">
<icon class="fa fa-home"></icon>
        <input type=text name = "address" placeholder="Address" id="address" size = 30>
</div>

        <button type = "submit" class="btn" name = "signup">Register</button>
    </form>
    </div>
<script src="../scripts/formvalidation.js"></script>
<script src="../scripts/pwdvisibility.js"></script>
<script src="../scripts/dropdown.js"></script>'
</body>
</html>

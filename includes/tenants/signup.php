<?php

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $apt_number = $_POST['apt_number'];
    require '../dbh.inc.php';
    // $errorEmpty = false;
    // $errorEmail = false;

    // Error Handling
    if(empty($name)||empty($email)||empty($password)||empty($apt_number)){
        echo "<span class='error'>Fill in all fields</span>";
        $error= true; 
        header("Location: ../../tenants.php?error=emptyfields&name=".$name."&email=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)){
        echo "<span class= 'error'>Fill in all fields!</span>";
        header("Location: ../../tenants.php?error=invalidemail&name=");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class= 'error'>Fill in all fields!</span>";
        header("Location: ../../tenants.php?error=invalidemail&name=".$name);
        exit();
    }
    // else if (!preg_match("/^[a-zA-Z-0-9]*$/", $name)){
    //     header("Location: ../../tenants.php?error=invalidname&email=".$email);
    //     exit();
    // }
    // else if($password !== $passwordRepeat){
    //     header("Location: ../../tenants.php?error=passwordcheckname=".$name."&email=".$email);
    //     exit();
    // }
    else{
         $sql = "SELECT name FROM tenants WHERE name=?";
         $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt, $sql)){
             header("Location: ../../tenants.php?error=sql error");
             exit();
         }
         else{
             mysqli_stmt_bind_param($stmt, "s", $name);
             mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
             $resultCheck = mysqli_stmt_num_rows($stmt);
             if($resultCheck > 0){
                 header("Location: ../../tenants.php?error=usertaken&email=".$email);
                 exit();
             }
             else{
                 $sql = "INSERT INTO tenants (name, email, password, apt_number) VALUES (?, ?, ?, ?)";
                 $stmt = mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt, $sql)){
                     header("Location: ../../tenants.php?error=sqlerror");
                     exit();
                 }

        
                 else{
                     $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                     mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $apt_number);
                     mysqli_stmt_execute($stmt);
                     mysqli_stmt_store_result($stmt); 
                     header("Location: ../../tenants.php?signup=success");
                     exit();
                }
             }
        
         }
     }
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
 }
 else{
     header("Location: ../signup.php");
     exit();  
 }
?>

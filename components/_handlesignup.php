<?php
$signup = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include "_dbconnect.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpass = $_POST['cpass'];
  $check = "SELECT * FROM `users` WHERE `user_email` = '$email'";
  $checkrun = mysqli_query($connection, $check);
  $num_rows = mysqli_num_rows($checkrun);
  if($num_rows > 0){
    echo '<h1>Email Already Exists!</h1>';
  }else{
    if($password == $cpass){
      $hash = password_hash($cpass, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`user_email`, `user_name`, `user_password`) VALUES ('$email', '$name', '$hash')";
      $result = mysqli_query($connection, $sql);
      if($result){
        $signup = true;
        echo '<h1>You have Signed Up Successfully!</h3>
        <h3> Now you can contribute in the forum.</h3>';
        // header("Location: /forum/index.php");
        // header("Location: /forum/index.php?signup=true");
        // exit();

      }else{
        echo '<h1>Failed To Sign Up!</h1> 
        <h3>Refresh the page or try again.</h3>';
      }
    }else{
      echo '<h1>Password do not match</h1>';
    }
    // header("Location: /forum/index.php?signupsuccess=false");
  }
}
?>
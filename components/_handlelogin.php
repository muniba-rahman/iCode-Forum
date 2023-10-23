<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "_dbconnect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `user_email` = '$email'";
    $result = mysqli_query($connection, $sql);
    $num_row = mysqli_num_rows($result);
    if($num_row == 1){
        $data = mysqli_fetch_assoc($result);
        if(password_verify($password, $data['user_password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            echo '<h1>Login Successful!</h1>
                    <h3>Click Back Key to Resume Your Journey With Us...';
        }else{
            echo '<h1>Failed To Login...</h1>';
        }
    }else{
        echo '<h1>User does not exist...</h1>';
    }
}
?>
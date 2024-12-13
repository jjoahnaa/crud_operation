<?php
    include_once '../components/connection.php';
        session_start();
    if(isset($_POST['btn_login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['isUser'] = true;
            header('location:../admin/dashboard.php');
        }
    }
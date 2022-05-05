<?php
    include('../config.php');

    //check if page was requested via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = "SELECT * FROM userbase WHERE username='$username' AND password='$password'";
            $result = $conn->query($query);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['accessLevel'] = $row['accessLevel'];
                echo "success";
            }else{
                echo "Invalid Credentials";
            }
        }else{
            echo "All Necessary Parameters not found";
        }
    }else{
        echo "Invalid Page Access Detected";
    }
?>
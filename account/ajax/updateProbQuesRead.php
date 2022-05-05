<?php
    include('../config.php');

    //check if page was requested via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $query = "UPDATE userbase SET probQuesRead=1 WHERE username='$username'";
            $result = $conn->query($query);
            echo "success";
        }else{
            echo "failure";
        }
    }else{
        echo "failure";
    }
?>
<?php
    include('../config.php');

    //check if page was requested via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username'])){
            $username = $_POST['username'];

            $initcheckquery = "SELECT * FROM userbase WHERE username='$username'";
            $initcheckresult = $conn->query($initcheckquery);
            $initcheckrow = $initcheckresult->fetch_assoc();

            if($initcheckrow['publishConsent'] == 0){
                $query = "UPDATE userbase SET publishConsent=1 WHERE username='$username'";
                $result = $conn->query($query);
                echo "success";
            }else{
                $query = "UPDATE userbase SET publishConsent=0 WHERE username='$username'";
                $result = $conn->query($query);
                echo "success";
            }
        }else{
            echo "failure";
        }
    }else{
        echo "failure";
    }
?>
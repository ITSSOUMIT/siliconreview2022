<?php
    session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['accessLevel'])){
        echo "<script>
        window.location.href= 'login';
        </script>";
    }else{
        $username = $_SESSION['username'];
        $accessLevel = $_SESSION['accessLevel'];
        $chquery = "SELECT * FROM userbase WHERE username='$username' AND accessLevel='$accessLevel'";
        $chresult = $conn->query($chquery);
        if($chresult->num_rows != 1){
            echo "<script>window.location.href='login'</script>";
        }else{
            $profileRow = $chresult->fetch_assoc();
        }
    }
?>

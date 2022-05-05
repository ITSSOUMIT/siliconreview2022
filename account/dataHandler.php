<?php
    include('config.php');
    if(isset($_POST['intent'])){
        $intent = $_POST['intent'];

        if(strcmp($intent, 'addStudents')==0){
            $handle = fopen($_FILES['csvFile']['tmp_name'], "r");
            $headers = fgetcsv($handle);

            while (($data = fgetcsv($handle)) !== FALSE) {
                $sic = $data[0];
                $name = $data[1];
                $course = $data[2];
                $branch = $data[3];
                $semester = $data[4];

                $password = md5($data[5]);

                $query = "INSERT INTO userbase (username, password, name, course, branch, semester) VALUES ('$sic', '$password', '$name', '$course', '$branch', '$semester')";
                $result = $conn->query($query);
            }

            fclose($handle);
            echo "<script>window.location.href='dashboard'</script>";
        }

        if(strcmp($intent, 'submitReviewForm') == 0){
            $q1 = $_POST['question_1'];
            $q2 = $_POST['question_2'];
            $q3 = $_POST['question_3'];
            $q4 = $_POST['question_4'];
            $q5 = $_POST['question_5'];
            $q6 = $_POST['question_6'];

            $user = $_POST['user'];

            $updatequery = "UPDATE userbase SET q1='$q1', q2='$q2', q3='$q3', q4='$q4', q5='$q5', q6='$q6', surveyCompleted=1 WHERE username='$user'";
            $updateresult = $conn->query($updatequery);

            echo "<script>window.location.href='dashboard'</script>";
        }
    }else{
        echo "<script>window.location.href='login'</script>";
    }
?>
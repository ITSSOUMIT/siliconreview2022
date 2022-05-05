<?php
    include('config.php');
    include('const/check.php');
    include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <?php include('const/stylesheet.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <?php if($accessLevel == 1){ ?>
            <ul class="navbar-nav ml-auto">
                <button type="button" class="btn btn-outline-success" onclick="redirectFunc()"><i
                        class="fas fa-location-arrow" style="margin-right: 10px;"></i>View College Profile on College Dunia</button>
            </ul>
            <ul class="navbar-nav ml-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddStudents"><i
                        class="fas fa-plus" style="margin-right: 10px;"></i>Add Students</button>
            </ul>
            <?php } ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include('sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <?php
            if($accessLevel == 1){
                include('viewAdminDashboard.php');
            }else{
                include('viewStudentDashboard.php');
            }
        ?>
        <!-- /.content-wrapper -->
        <?php include('const/footer.php'); ?>

    </div>
    <!-- ./wrapper -->

    <?php include('const/js.php'); ?>

    <script>
        var element = document.getElementById("sideDashboard");
        element.classList.add("active");
    </script>

    <script>
        $('#probQuesReadBox').click(function() {
            if(this.checked){
                $.ajax({
                    type: "POST",
                    url: 'ajax/updateProbQuesRead',
                    data: {
                        username : <?php echo $username; ?>
                    },
                    success: function(data) {
                        if(data === 'success'){
                            window.location.href='dashboard';
                        }else{
                            alert("DB Error : Contact Soumit at +91 89278 76631")
                        }
                    }
                });
            }
        });
    </script>

    <script>
        $('#publishConsent').click(function() {
            $.ajax({
                type: "POST",
                url: 'ajax/updatePublishConsent',
                data: {
                    username : <?php echo $username; ?>
                },
                success: function(data) {
                    if(data === 'success'){
                        window.location.href='dashboard';
                    }else{
                        alert("DB Error : Contact Soumit at +91 89278 76631")
                    }
                }
            });
        });
    </script>

    <script>
        function redirectFunc(){
            window.open('https://collegedunia.com/college/15135-silicon-institute-of-technology-sit-bhubaneswar', '_blank');
        }
    </script>
    
</body>

</html>
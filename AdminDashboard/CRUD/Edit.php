<?php

$id = "";
$name = "";
$email = "";
$username = "";
$pwd = "";

$errorMessage = "";
$successMessage = "";

require_once '../../Login_System/dbh.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // GET method: Show the data of the admin
    if (!isset($_GET['usersId'])) {
        header("location: ../AccountTable.php");
        exit;
    }

    $id = $_GET['usersId'];

    $sql = "SELECT * FROM users WHERE usersId=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: ../AccountTable.php");
        exit;
    }
    $name = $row['usersName'];
    $email = $row['usersEmail'];
    $username = $row['usersUid'];
    $pwd = $row['userspwd'];
} else {

    // POST method: Update the data of the admin
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    do {
        if (empty($id) || empty($name) || empty($email) || empty($username) || empty($pwd)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);


        $sql = "UPDATE users SET usersName='$name', usersEmail='$email',usersUid='$username',userspwd='$hashedpwd' WHERE usersId=$id";
        $result = $conn->query($sql);
        header("location: ../AccountTable.php");
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Page</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-------------------------------------------------------------------------------------------------------------------------->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Back To Home Page</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Table
            </div>

            <!-- Nav Item - Account Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="../AccountTable.php" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Account</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tables:</h6>
                        <a class="collapse-item" href="../AccountTable.php">Account Table</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - License Plate Number Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>License Plate Number</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tables:</h6>
                        <a class="collapse-item" href="../DP.php">List of License Plates</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->
        <!-------------------------------------------------------------------------------------------------------------------------->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->
            <div id="content">
                <!-------------------------------------------------------------------------------------------------------------------------->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                </nav>
                <!-- End of Topbar -->
                <!-------------------------------------------------------------------------------------------------------------------------->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="my-5">
                        <h2>Editing Account</h2>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $row['usersId']; ?>" required>
                            <label class="col-md-3 col-form-label">Name:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name"
                                    value="<?php echo $row['usersName']; ?>" required>
                            </div>
                            <label class="col-md-3 col-form-label">Email:</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email"
                                    value="<?php echo $row['usersEmail']; ?>" required>
                            </div>
                            <label class="col-md-3 col-form-label">Username:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username"
                                    value="<?php echo $row['usersUid']; ?>" required>
                            </div>
                            <label class="col-md-3 col-form-label">Password:</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="pwd" value="" required>
                            </div>
                            <br>
                            <div class="row mb-4 ">
                                <div class="col-md-4 m-lg-2">
                                    <button type="submit" class="btn btn-primary" href="../AccountTable.php">
                                        Edit Account</button>
                                    <br>
                                </div>
                                <div class="col-md-2 m-lg-2">
                                    <button class="btn btn-danger"><a href="../AccountTable.php"
                                            class="text-white">Cancel</a></button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Object Detection Website</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
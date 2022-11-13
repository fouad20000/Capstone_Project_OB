<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List of License Plates</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-------------------------------------------------------------------------------------------------------------------------->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
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
                <a class="nav-link collapsed" href="AccountTable.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Account</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tables:</h6>
                        <a class="collapse-item" href="AccountTable.php">Account Table</a>
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
                        <a class="collapse-item" href="DP.php">List of License Plates</a>
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

                    <h2>List of License Plates</h2>
                    <a class="btn btn-primary" href="CRUDDP/Create.php" role="button">Add License Plate</a>
                    <br>
                    .<table class="table">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th>License Plates ID</th>
                                <th>Name</th>
                                <th>License Plate Box</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <!-- Table Content -->
                        <tbody>
                            <?php
                            // Calling database
                            require_once '../Login_System/dbh.inc.php';

                            // Query
                            $sql = "SELECT * FROM licenseplate";
                            //saving the query 
                            $result = $conn->query($sql);

                            // if there's no connection
                            if (!$result) {
                                die('invalid query:' . $conn->error);
                            }

                            //fetching the data we had in the table
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                    <tr>
                                        <td>$row[Num_detected]</td>
                                        <td>$row[Name]</td>
                                        <td>$row[licenseplatebox]</td>
                                        <td>
                                            <a class='btn btn-primary' href='CRUDDP/Edit.php?Num_detected=$row[Num_detected]'>Edit</a>
                                            <a class='btn btn-danger' href='CRUDDP/Delete.php?Num_detected=$row[Num_detected]'>Delete</a>
                                        </td>
                                    </tr> 
                                ";
                            }

                            ?>
                        </tbody>
                    </table>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
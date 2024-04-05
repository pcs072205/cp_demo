
<!DOCTYPE html>
<?php
    include("../config/db_con.php");
?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Advanced DataTable - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php
        include 'includes/header.php'; 
    ?>
    <!-- END: Header-->

    <!-- BEGIN: Menu-->
    <?php
        include 'includes/menu.php'; 
    ?>
    <!-- END: Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            <div class="content-body">
                
                <!-- File export table -->
                <section id="file-export">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Employees Table</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                        <p class="card-text">Exporting data from a table can often be a key part of a complex
                                            application. The Buttons extension for DataTables provides three plug-ins that provide
                                            overlapping functionality for data export.</p>
                                        <table class="table table-striped table-bordered file-export">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Full Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Gender</th>
                                                    <th>Social Security Card</th>
                                                    <th>Social Security Number</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Role</th>
                                                    <th>Phone Number</th>
                                                    <th>Alt Phone Number</th>
                                                    <th>Home Address</th>
                                                    <th>Created On</th>
                                                    <th>Updated On</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Query to fetch data from your table
                                                    $sql = "SELECT * FROM employees";
                                                    $result = mysqli_query($dbconnection, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                    // Output data of each row
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                            echo "<td>".$row["employee_id"]."</td>";
                                                            echo "<td>".$row["full_name"]."</td>";
                                                            echo "<td>".$row["date_of_birth"]."</td>";
                                                            echo "<td>".$row["gender"]."</td>";
                                                            echo "<td>".$row["social_security_card"]."</td>";
                                                            echo "<td>".$row["social_security_number"]."</td>";
                                                            echo "<td>".$row["email"]."</td>";
                                                            echo "<td>".$row["password"]."</td>";
                                                            echo "<td>".$row["role"]."</td>";
                                                            echo "<td>".$row["phone_number"]."</td>";
                                                            echo "<td>".$row["alt_phone_number"]."</td>";
                                                            echo "<td>".$row["home_address"]."</td>";
                                                            echo "<td>".$row["created_on"]."</td>";
                                                            echo "<td>".$row["updated_on"]."</td>";
                                                            echo "<td>".$row["status"]."</td>";
                                                        echo "</tr>";
                                                    }
                                                    } else {
                                                    echo "0 results";
                                                    }
                                                    mysqli_close($dbconnection);
                    
                                                ?>    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Full Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Gender</th>
                                                    <th>Social Security Card</th>
                                                    <th>Social Security Number</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Role</th>
                                                    <th>Phone Number</th>
                                                    <th>Alt Phone Number</th>
                                                    <th>Home Address</th>
                                                    <th>Created On</th>
                                                    <th>Updated On</th>
                                                    <th>Status</th> 
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- File export table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php
        include 'includes/footer.php'; 
    ?>
    <!-- END: Footer-->



    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/buttons.flash.min.js"></script>
    <script src="../app-assets/vendors/js/tables/jszip.min.js"></script>
    <script src="../app-assets/vendors/js/tables/pdfmake.min.js"></script>
    <script src="../app-assets/vendors/js/tables/vfs_fonts.js"></script>
    <script src="../app-assets/vendors/js/tables/buttons.html5.min.js"></script>
    <script src="../app-assets/vendors/js/tables/buttons.print.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/tables/datatables/datatable-advanced.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
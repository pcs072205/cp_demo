
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Horizontal Forms - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/selects/select2.min.css">

    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
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

    <!-- BEGIN: toastr CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- END: toastr CSS-->

    <script> 
        function validateForm() {
            document.getElementById('form_employees_add').addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the default form submission
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Save employee data!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Save!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger ml-1',
                    buttonsStyling: false,
                    }).then(function (result) {
                    if (result.value) {
                        event.target.submit();
                    }
                    else
                    {
                        return false; 

                    }
                    })
            });
        }
        
    </script>

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
                <!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- <h4 class="card-title" id="horz-layout-colored-controls">User Profile</h4> -->
                                    <h2 >User Profile</h2>
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
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>This is 2-columns horizontal form with labels on left and form controls on right in one line. Add <code>.form-horizontal</code> class to the form tag to have horizontal form styling. User can also change the border color and background color of the form control. Add <code>border-*</code> class to change border color and <code>bg-*</code> class to change background color of the form control.</p>
                                        </div>
                                        <!-- Round Alerts with icons & Arrow start -->
                                        <?php
                                            include 'includes/message.php'; 
                                        ?>
                                        <form id="form_employees_add" class="form form-horizontal" action="../controllers/employees.php" method="post">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="la la-eye"></i> About Employee</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput1">Full Name</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" id="full_name" name="full_name" class="form-control border-primary" placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput5">Email</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input class="form-control border-primary" id="email " name="email " type="email" placeholder="Email">
                                                                <label class="label-control" style="padding-top: 5px;">** Will be used as username for login</label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput2">Mobile</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="tel" id="phone_number" name="phone_number" class="form-control border-primary" placeholder="Mobile">
                                                                <label class="label-control" style="padding-top: 5px;">** Will be used as password for login</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                

                                                <h4 class="form-section"><i class="ft-alert-circle"></i> General Info</h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput3">Date of Birth</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="date"  id="date_of_birth" name="date_of_birth" class="form-control border-primary" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput4">Gender</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <select class="select2-theme form-control" id="gender" name="gender">
                                                                    <option value="">-- Select Data --</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Prefer not to say">Prefer not to say</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput2">Alterate Mobile</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="tel" id="alt_phone_number" name="alt_phone_number" class="form-control border-primary" placeholder="Alterate Mobile">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput8">Address</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <textarea id="home_address" name="home_address" rows="6" class="form-control border-primary" placeholder="Home Address"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="ft-credit-card"></i> ID Info</h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput5">Select Social Security Card</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <select class="select2-theme form-control" id="social_security_card" name="social_security_card">
                                                                    <option value="">-- Select Data --</option>
                                                                    <option value="Aadhaar Card">Aadhaar Card</option>
                                                                    <option value="Voter ID Card">Voter ID Card</option>
                                                                    <option value="Driving License">Driving License</option>
                                                                    <option value="Passport">Passport</option>
                                                                    <option value="PAN Card">PAN Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="userinput2">Social Security ID</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <input type="text" id="social_security_number" name="social_security_number" class="form-control border-primary" placeholder="Social Security ID">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="ft-check-circle"></i> Role & Status</h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Role</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <select class="select2-theme form-control" id="role" name="role">
                                                                    <option value="">-- Select Data --</option>
                                                                    <option value="Employee">Employee</option>
                                                                    <option value="Manager">Manager</option>
                                                                    <option value="Director">Director</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Status</label>
                                                            <div class="col-md-9 mx-auto">
                                                                <select class="select2-theme form-control" id="status" name="status">
                                                                    <option value="">-- Select Data --</option>
                                                                    <option value="A">Active</option>
                                                                    <option value="I">Inactive</option>
                                                                    <option value="S">Suspended</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                
                                            </div>

                                            <div class="form-actions text-left">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" id="btn_employees_add" name="btn_employees_add" onclick="return validateForm()">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </section>
                <!-- // Basic form layout section end -->
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../app-assets/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: sweetalert2-->
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../app-assets/js/scripts/extensions/ex-component-sweet-alerts.js"></script>
    <!-- END: sweetalert2-->

</body>
<!-- END: Body-->

</html>
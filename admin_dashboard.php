<?php
session_start();
include "_dbconnect_admin.php";

if (isset($_SESSION['admin_ID']) && isset($_SESSION['admin_name']) && isset($_SESSION['image_link'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Webportal</title>
        <link rel="icon" type="image/x-icon" href="Favicon.png">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Ubuntu&display=swap" rel="stylesheet">


        <style type="text/css">

            .vertical-nav {
                min-width: 17rem;
                width: 17rem;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
                transition: all 0.4s;
            }

            .page-content {
                width: calc(100% - 17rem);
                margin-left: 17rem;
                transition: all 0.4s;
            }

            /* for toggle behavior */

            #sidebar.active {
                margin-left: -17rem;
            }

            #content.active {
                width: 100%;
                margin: 0;
            }

            @media (max-width: 768px) {
                #sidebar {
                    margin-left: -17rem;
                }

                #sidebar.active {
                    margin-left: 0;
                }

                #content {
                    width: 100%;
                    margin: 0;
                }

                #content.active {
                    margin-left: 17rem;
                    width: calc(100% - 17rem);
                }
            }

            body {
                background: #599fd9;
                background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);
                background: linear-gradient(to right, #599fd9, #c2e59c);
                min-height: 100vh;
                overflow-x: hidden;
            }

            .separator {
                margin: 3rem 0;
                border-bottom: 1px dashed #fff;
            }

            .text-uppercase {
                letter-spacing: 0.1em;
            }

            .text-gray {
                color: #aaa;
            }
        </style>
    </head>
    <body>
        <script>
            $(function() {
                // Sidebar toggle behavior
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
        </script>




        <header>
            <section class="top">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand left_area" href="admin_dashboard.php" style="color: white; ">
                                <p style="font-size: 80%;">🆂🅷🅸🅿🆁🅰🆂🅷</p>
                            </a>
                        </div>
                        <h2 style="color: white; padding-right:170px;">JIIT - Webportal</h2>
                        <a href="logout.php" class="btn btn-secondary btn-sm right_area" role="button">Log Out</a>
                    </div>
                </nav>
            </section>
        </header>




        <section>
            <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center"> <img src="<?php echo $_SESSION['image_link']; ?>" alt="Profile" width="120" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                        <div class="media-body">
                            <h4 class="m-0"><?php echo $_SESSION['admin_name']; ?></h4>
                            <p class="font-weight-light text-muted mb-0">Admin</p>
                        </div>
                    </div>
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;">Student Details
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a href="#t11" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Student Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t12" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Student Registration
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Teacher Details
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a href="#t21" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Teacher Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t22" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Teacher Registration
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">

                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Hostal Details
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a href="#t31" id="" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Hostal Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t32" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Hostal Allocation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Placement Details
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a href="#t41" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Placement Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t42" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Add Placement Records
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End vertical navbar -->

            <!-- Page content holder -->
            <div class="page-content p-2" id="content">
                <!-- Toggle button -->
                <!-- <button id="sidebarCollapse" type="button"  class="btn btn-light bg-white  shadow-sm "><i class="fa fa-bars"></i><small class="text-uppercase font-weight-bold " style="font-size: 30px;">≡</small></button> -->
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold  m-2" style="font-size: 30px;">≡</small></button>
            </div>



            <div class="page-content tab-content p-2" id="content">

                <!-- Student Information Start -->
                <div id="t11" class="container-sm tab-pane fade">


                    <hr>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                            Select Batch
                        </button>
                        <hr>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                            <ul class="nav nav-pills flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B1">B1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B2">B2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B3">B3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B4">B4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B5">B5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B6">B6</a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="B1" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM student where batch='B1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Academic Year</th>
                                        <th>Program</th>
                                        <th>Semester</th>
                                        <th>Gender</th>
                                        <th>Batch</th>
                                        <th>Hostal Room</th>
                                        <th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info['student_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['student_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['academic_year']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['program']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['semester']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['gender']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['hostal_room_no']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B2" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM student where batch='B2'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Academic Year</th>
                                        <th>Program</th>
                                        <th>Semester</th>
                                        <th>Gender</th>
                                        <th>Batch</th>
                                        <th>Hostal Room</th>
                                        <th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info['student_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['student_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['academic_year']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['program']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['semester']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['gender']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['hostal_room_no']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B3" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM student where batch='B3'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Academic Year</th>
                                        <th>Program</th>
                                        <th>Semester</th>
                                        <th>Gender</th>
                                        <th>Batch</th>
                                        <th>Hostal Room</th>
                                        <th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info['student_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['student_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['academic_year']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['program']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['semester']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['gender']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['hostal_room_no']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B4" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM student where batch='B4'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Academic Year</th>
                                        <th>Program</th>
                                        <th>Semester</th>
                                        <th>Gender</th>
                                        <th>Batch</th>
                                        <th>Hostal Room</th>
                                        <th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info['student_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['student_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['academic_year']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['program']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['semester']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['gender']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['hostal_room_no']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B5" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM student where batch='B5'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Academic Year</th>
                                        <th>Program</th>
                                        <th>Semester</th>
                                        <th>Gender</th>
                                        <th>Batch</th>
                                        <th>Hostal Room</th>
                                        <th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info['student_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['student_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['academic_year']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['program']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['semester']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['gender']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['hostal_room_no']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B6" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM student where batch='B6'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Academic Year</th>
                                        <th>Program</th>
                                        <th>Semester</th>
                                        <th>Gender</th>
                                        <th>Batch</th>
                                        <th>Hostal Room</th>
                                        <th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info['student_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['student_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['academic_year']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['program']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['semester']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['gender']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info['hostal_room_no']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Student Information Start end-->



                <!-- Student Registration Start -->
                <div id="t12" class="container-sm tab-pane fade">
                    <hr>
                    <h2>Student Registration</h2>
                    <hr>
                    <form action="#" method="POST" style=" margin-right: 700px; border: 7px double #182747; border-radius: 10px;" autocomplete="off">
                        <div>
                            <label for="userid">User ID</label>
                            <input type="text" name="userid" style="margin-left: 9%;" id="" autofocus required>
                        </div>
                        <div>
                            <label for="username">User Name</label>
                            <input type="text" name="username" style="margin-left: 5%;" id="" required>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" style="margin-left: 7%;" id="" required>
                        </div>
                        <div>
                            <label for="year">Academic Year</label>
                            <input type="text" name="year" style="margin-left: 10px;" id="" required>
                        </div>
                        <div>
                            <label for="program">Program</label>
                            <input type="text" name="program" style="margin-left: 7%;" id="" required>
                        </div>
                        <div>
                            <label for="semester">Semester</label>
                            <input type="text" name="semester" style="margin-left: 7%;" id="" required>
                        </div>
                        <div>
                            <label for="gender">Gender</label>
                            <input type="text" name="gender" style="margin-left: 8%;" id="" required>
                        </div>
                        <div>
                            <label for="batch">Batch</label>
                            <input type="text" name="batch" style="margin-left: 9%;" id="" required>
                        </div>
                        <div>
                            <label for="img">Image Path</label>
                            <input type="text" name="img" style="margin-left: 9%;" id="" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="register_student" value="Register">
                            <!-- <button id="btn1" type="submit" name="register_student" class="btn " style="margin-top: 35px; margin-bottom: 38px;">Register</button> -->

                        </div>
                    </form>
                    <hr>
                    <?php
                    if (isset($_POST['register_student'])) {
                        $userid = $_POST['userid'];
                        $username = $_POST['username'];
                        $Password = $_POST['password'];
                        $Acc_year = $_POST['year'];
                        $Program = $_POST['program'];
                        $Semester = $_POST['semester'];
                        $Gender = $_POST['gender'];
                        $Batch = $_POST['batch'];
                        $image = $_POST['img'];
                        // $Hostel="NULL";
                        $check = "SELECT * FROM student WHERE student_ID='$userid'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            echo "<script>alert('User ID Already Exists!! Try Another One')</script>";
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        } else {
                            $sql = "INSERT INTO student(student_ID, student_name, password, academic_year, program, semester, gender, batch, image_link) VALUES('$userid', '$username', '$Password', '$Acc_year', '$Program', '$Semester', '$Gender', '$Batch', '$image')";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Registered Successfully!')</script>");
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            }
                        }
                    }
                    ?>
                </div>

                <!-- Student Registration End -->



                <!-- Teacher Information Start -->
                <div id="t21" class="container-sm tab-pane fade">
                    <hr>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-bottom: 10px; background-color: #182747;">
                            Select Department
                        </button>
                        <hr>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                            <ul class="nav nav-pills flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#CSE">CSE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#physics">Physics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#it">IT</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B4">B4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B5">B5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-bs-toggle="pill" href="#B6">B6</a>
                                </li> -->
                            </ul>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div id="CSE" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM teacher where department='CSE'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Profile</th>
                                        <!-- <th>Course</th> -->
                                        <!-- <th>Gender</th> -->
                                        <!-- <th>Hostal Room</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info1 = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info1['teacher_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info1['teacher_name']}"; ?>

                                            </td>
                                            <td>
                                                <?php echo "{$info1['department']}"; ?>

                                            </td>
                                            <td>
                                                <img src="<?php echo $info1['image_link']; ?>" alt="Profile" width="80">
                                            </td>

                                            <!-- <td></td> -->
                                            <!-- <td></td> -->
                                            <!-- <td></td> -->
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <div id="physics" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM teacher where department='Physics'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Profile</th>
                                        <!-- <th>Course</th> -->
                                        <!-- <th>Gender</th> -->
                                        <!-- <th>Hostal Room</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info1 = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info1['teacher_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info1['teacher_name']}"; ?>

                                            </td>
                                            <td>
                                                <?php echo "{$info1['department']}"; ?>

                                            </td>
                                            <td>
                                                <img src="<?php echo $info1['image_link']; ?>" alt="Profile" width="80">
                                            </td>
                                            <!-- <td></td> -->
                                            <!-- <td></td> -->
                                            <!-- <td></td> -->
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <div id="it" class="container tab-pane fade">
                            <?php
                            $sql1 = "SELECT * FROM teacher where department='IT'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Profile</th>
                                        <!-- <th>Course</th> -->
                                        <!-- <th>Gender</th> -->
                                        <!-- <th>Hostal Room</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($info1 = $result1->fetch_assoc()) {

                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo "{$info1['teacher_ID']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info1['teacher_name']}"; ?>
                                            </td>
                                            <td>
                                                <?php echo "{$info1['department']}"; ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $info1['image_link']; ?>" alt="Profile" width="80">
                                            </td>

                                            <!-- <td></td> -->
                                            <!-- <td></td> -->
                                            <!-- <td></td> -->
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Teacher Information End -->




                <!-- Teacher Registration Start -->
                <div id="t22" class="container-sm tab-pane fade">
                    <hr>
                    <h2>Teacher Registration</h2>
                    <hr>
                    <form action="#" method="POST" style=" margin-right: 700px; border: 7px double #182747; border-radius: 10px;" autocomplete="off">
                        <div>
                            <label for="teacherid">Teacher ID</label>
                            <input type="text" name="teacherid" style="margin-left: 9%;" id="" required>
                        </div>
                        <div>
                            <label for="teachername">Teacher Name</label>
                            <input type="text" name="teachername" style="margin-left: 5%;" id="" required>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" style="margin-left: 7%;" id="" required>
                        </div>
                        <div>
                            <label for="department">Department</label>
                            <input type="text" name="department" style="margin-left: 10px;" id="" required>
                        </div>
                        <div>
                            <label for="img">Image Path</label>
                            <input type="text" name="img" style="margin-left: 10px;" id="" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="register_teacher" value="Register">
                            <!-- <button id="btn1" type="submit" name="register_student" class="btn " style="margin-top: 35px; margin-bottom: 38px;">Register</button> -->

                        </div>
                    </form>
                    <hr>
                    <?php
                    if (isset($_POST['register_teacher'])) {
                        $teacherid = $_POST['teacherid'];
                        $teachername = $_POST['teachername'];
                        $Password = $_POST['password'];
                        $Department = $_POST['department'];
                        $image = $_POST['img'];

                        $check = "SELECT * FROM teacher WHERE teacher_ID='$teacherid'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            echo "<script>alert('Teacher ID Already Exists!! Try Another One')</script>";
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        } else {
                            $sql = "INSERT INTO teacher(teacher_ID, teacher_name, password, department,image_link) VALUES('$teacherid', '$teachername', '$Password', '$Department', '$image')";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Registered Successfully!')</script>");
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            }
                        }
                    }
                    ?>

                </div>
                <!-- Teacher Registration End -->





                <!-- Hostal Information start -->

                <div id="t31" class="container-sm tab-pane fade">
                    <?php
                    $sql1 = "SELECT * FROM student where hostal_room_no <> 'NULL' ORDER BY hostal_room_no";
                    $result1 = mysqli_query($conn, $sql1);
                    ?>
                    <hr>
                    <table id="content" class="table table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Academic Year</th>
                                <th>Program</th>
                                <th>Semester</th>
                                <th>Gender</th>
                                <th>Batch</th>
                                <th>Hostal Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($info = $result1->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo "{$info['student_ID']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['student_name']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['academic_year']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['program']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['semester']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['gender']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['batch']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['hostal_room_no']}"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <hr>
                </div>
                <!-- Hostal Information end -->




                <!-- Allocate Hostal start -->
                <div id="t32" class="container-sm tab-pane fade">
                    <hr>
                    <h2>Hostal Room Allocation</h2>
                    <hr>
                    <form action="#" method="POST" style=" margin-right: 700px; border: 7px double #182747; border-radius: 10px;">
                        <div>
                            <label for="student_ID">Student ID</label>
                            <input type="text" name="studentid" style="margin-left: 9%;" id="" required>
                        </div>
                        <div>
                            <label for="room">Room Number</label>
                            <input type="text" name="room" style="margin-left: 10px;" id="" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="allocate_hostal" value="Allocate">
                            <!-- <button id="btn1" type="submit" name="register_student" class="btn " style="margin-top: 35px; margin-bottom: 38px;">Register</button> -->
                        </div>
                    </form>
                    <hr>
                    <?php
                    if (isset($_POST['allocate_hostal'])) {
                        $studentid = $_POST['studentid'];
                        $hostalroom = $_POST['room'];

                        $check = "SELECT * FROM student WHERE student_ID='$studentid' AND hostal_room_no <> 'NULL'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            echo "<script>alert('Student Already Allocated!!')</script>";
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        } else {
                            $sql = "UPDATE student SET hostal_room_no= '$hostalroom' WHERE student_ID = '$studentid'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Successfully Room Allocated!')</script>");
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            }
                        }
                    }
                    ?>
                </div>
                <!-- Allocate Hostal End -->




                <!-- Placement Information Start -->

                <div id="t41" class="container-sm tab-pane fade">

                    <?php
                    $sql1 = "SELECT student.student_ID, student.student_name, student.academic_year, student.program, placed.Company FROM student RIGHT JOIN placed ON student.student_ID=placed.Student_ID WHERE student.placement='1'";
                    $result1 = mysqli_query($conn, $sql1);
                    ?>
                    <hr>
                    <table id="content" class="table table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Academic Year</th>
                                <th>Program</th>
                                <th>Company Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($info = $result1->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo "{$info['student_ID']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['student_name']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['academic_year']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['program']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['Company']}"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <hr>
                </div>
                <!-- Placement Infromation End -->




                <!-- Add Placement Record Start -->
                <div id="t42" class="container-sm tab-pane fade">
                    <hr>
                    <h2>Add Placement Record</h2>
                    <hr>
                    <form action="#" method="POST" style=" margin-right: 700px; border: 7px double #182747; border-radius: 10px;">
                        <div>
                            <label for="student_ID">Student ID</label>
                            <input type="text" name="studentid" style="margin-left: 9%;" id="" required>
                        </div>
                        <div>
                            <label for="cname">Company Name</label>
                            <input type="text" name="cname" style="margin-left: 10px;" id="" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="placed_allocation" value="Allocate">
                            <!-- <button id="btn1" type="submit" name="register_student" class="btn " style="margin-top: 35px; margin-bottom: 38px;">Register</button> -->
                        </div>
                    </form>
                    <hr>
                    <?php
                    if (isset($_POST['placed_allocation'])) {
                        $studentid = $_POST['studentid'];
                        $companyname = $_POST['cname'];

                        $check = "SELECT * FROM student WHERE student_ID='$studentid' AND placement <> 'NULL'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            echo "<script>alert('Student Already Placed!!')</script>";
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        } else {
                            $sql1 = "UPDATE student SET placement= '1' WHERE student_ID = '$studentid'";
                            $sql2 = "INSERT INTO placed(Student_ID, Company) VALUES('$studentid', '$companyname')";
                            $result1 = mysqli_query($conn, $sql1);
                            $result2 = mysqli_query($conn, $sql2);
                            if ($result1 and $result2) {
                                echo ("<script>alert('Successfully Records Added!')</script>");
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                exit();
                            }
                        }
                    }
                    ?>
                </div>
                <!-- Add Placement Record End -->


            </div>
        </section>


    </body>

    </html>
<?php
} else {
    header("Location: admin_login.php");
    exit();
}
?>
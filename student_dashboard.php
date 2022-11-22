<?php
session_start();
include "_dbconnect_student.php";

if (isset($_SESSION['student_ID']) && isset($_SESSION['student_name']) && isset($_SESSION['image_link']) && isset($_SESSION['batch'])) {
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
                            <a class="navbar-brand" href="student_dashboard.php" style="color: white; ">
                                <p style="font-size: 80%;">🆂🅷🅸🅿🆁🅰🆂🅷</p>
                            </a>
                        </div>
                        <h2 class="" style="color: white; margin-right: 5%;">JIIT - Webportal</h2>
                        <a href="logout.php" class="btn btn-secondary btn-sm" role="button" style="margin-left: 2%;">Log Out</a>
                    </div>
                </nav>
            </section>
        </header>




        <section>
            <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center"><img src="<?php echo $_SESSION['image_link']; ?>" alt="Profile" width="120" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                        <div class="media-body">
                            <h4 class="m-0"><?php echo $_SESSION['student_name']; ?></h4>
                            <p class="font-weight-light text-muted mb-0">Student</p>
                        </div>
                    </div>
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;">Student Profile
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t11" id="" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Personal Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t12" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> New Password/Image
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Academic Details
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t21" id="" class="nav-link text-dark m-1 " data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Fee Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t22" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Miscelleneous Fee
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">

                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Attendance Details
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t31" id="" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> My Class Attendance
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t32" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Registered Subject Faculty
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Examination Details
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t41" id="" class="nav-link text-dark m-1 " data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Student's Result
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t42" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Examination Schedule
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> College Event Details
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t51" id="" class="nav-link text-dark m-1 " style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" data-bs-toggle="tab" style="margin-right: 4px;"> Event Information
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Placement Details
                            </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t61" id="" class="nav-link text-dark m-1 " data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Placement Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t62" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Placement Records
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
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold  m-2" style="font-size: 30px;">≡</small></button>
            </div>


            <div class="page-content tab-content p-2" id="content">

                <!-- Student Information Start -->
                <div id="t11" class="container-sm tab-pane fade">
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 btn-magin">

                            <table class="table table-bordered" style=" border: 2px solid black;">
                                <tbody>
                                    <tr>
                                        <td class="table-success">ID</td>
                                        <td><?php echo "{$_SESSION['student_ID']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Name</td>
                                        <td><?php echo "{$_SESSION['student_name']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Academic Year</td>
                                        <td><?php echo "{$_SESSION['academic_year']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Program</td>
                                        <td><?php echo "{$_SESSION['program']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Semester</td>
                                        <td><?php echo "{$_SESSION['semester']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Gender</td>
                                        <td><?php echo "{$_SESSION['gender']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Batch</td>
                                        <td><?php echo "{$_SESSION['batch']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Hostal Room Number</td>
                                        <td><?php echo "{$_SESSION['hostal_room_no']}"; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                    </div>
                </div>


                <div id="t12" class="container-sm tab-pane fade">
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 btn-magin">

                            <h2>Change Password</h2>
                            <form action="#" method="POST" autocomplete="off">
                                <div>
                                    <label for="stdid">Student ID</label>
                                    <?php
                                    $id = $_SESSION['student_ID'];
                                    ?>
                                    <input type="text" name="stdid" style="margin-left: 9%;" readonly value="<?php echo $id; ?>" id="" required>
                                </div>
                                <div>
                                    <label for="password">New Password</label>
                                    <input type="text" name="password" style="margin-left: 9%;" id="" required>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-primary" name="changepassword" value="Change">
                                    <!-- <button id="btn1" type="submit" name="register_student" class="btn " style="margin-top: 35px; margin-bottom: 38px;">Register</button> -->

                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 btn-magin">
                            <h2>Change Image</h2>
                            <form action="#" method="POST" autocomplete="off">
                                <div>
                                    <label for="stdid">Student ID</label>
                                    <?php
                                    $id = $_SESSION['student_ID'];
                                    ?>
                                    <input type="text" name="stdid" style="margin-left: 9%;" readonly value="<?php echo $id; ?>" id="" required>
                                </div>
                                <div>
                                    <label for="img">New Image Path</label>
                                    <input type="text" name="img" style="margin-left: 9%;" id="" required>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-primary" name="changeimage" value="Change">
                                    <!-- <button id="btn1" type="submit" name="register_student" class="btn " style="margin-top: 35px; margin-bottom: 38px;">Register</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <?php

                    if (isset($_POST['changepassword'])) {
                        $id = $_POST['stdid'];
                        $pass = $_POST['password'];

                        $check = "SELECT * FROM student WHERE student_ID='$id'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            $cid = $_SESSION['student_ID'];
                            $sql = "UPDATE student SET password='$pass' WHERE student_ID= '$cid'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Successfully Password Changed!')</script>");
                                echo ("<script>window.location = 'student_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'student_dashboard.php';</script>");
                                exit();
                            }
                        } else {
                            echo "<script>alert('Invalid User!!!')</script>";
                            echo ("<script>window.location = 'student_dashboard.php';</script>");
                            exit();
                        }
                    }
                    if (isset($_POST['changeimage'])) {
                        $id = $_POST['stdid'];
                        $image = $_POST['img'];

                        $check = "SELECT * FROM student WHERE student_ID='$id'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            $cid = $_SESSION['student_ID'];
                            $sql = "UPDATE student SET image_link='$image' WHERE student_ID= '$cid'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Successfully Image Changed!')</script>");
                                echo ("<script>window.location = 'student_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'student_dashboard.php';</script>");
                                exit();
                            }
                        } else {
                            echo "<script>alert('Invalid User!!!')</script>";
                            echo ("<script>window.location = 'student_dashboard.php';</script>");
                            exit();
                        }
                    }
                    ?>

                </div>

                <div id="t21" class="container-sm tab-pane fade">
                    <hr>
                    <h6>Fee Status:</h6>
                    <hr>
                    <?php
                    $id = $_SESSION['student_ID'];
                    $sql1 = "SELECT student.student_ID, student.student_name, student.academic_year, student.semester, fee.fee_status FROM student RIGHT JOIN fee ON student.student_ID=fee.Student_ID WHERE student.student_ID='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    ?>
                    <hr>
                    <table id="content" class="table table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Academic Year</th>
                                <th>Semester</th>
                                <th>Fee Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($info = $result1->fetch_assoc()) {
                                $status = $info['fee_status'];
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
                                        <?php echo "{$info['semester']}"; ?>
                                    </td>
                                    <td>
                                        <?php if ($status == 0) {
                                            echo "Paid";
                                        } else {
                                            echo "Unpaid";
                                        } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <hr>
                </div>

                <div id="t22" class="container-sm tab-pane fade">
                    <hr>
                    <h4>Miscelleneous Fee</h4>
                    <hr>
                    <table id="content" class="table table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>Any Miscelleneous Fee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>No Record!</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>

                <div id="t31" class="container-sm tab-pane fade">



                    <div class="modal fade" id="demo1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">
                                <div class="modal-body">

                                    <?php if ($_SESSION['student_ID'] == '2201') {
                                        $sql = "SELECT * FROM a12201sdf1";
                                        $result = mysqli_query($conn, $sql);
                                    } else {
                                        $sql = "SELECT * FROM a12202sdf1";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    ?>
                                    <hr>
                                    <h5>SDF-I</h5>
                                    <hr>
                                    <table id="content" class="table table-bordered table-hover">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Attendent Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($info = $result->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo "{$info['Sno']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['date']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['attendances']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['teacher_name']}"; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="demo2">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">
                                <div class="modal-body">

                                    <?php if ($_SESSION['student_ID'] == '2201') {
                                        $sql = "SELECT * FROM a12201english";
                                        $result = mysqli_query($conn, $sql);
                                    } else {
                                        $sql = "SELECT * FROM a12202english";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    ?>
                                    <hr>
                                    <h5>ENGLISH</h5>
                                    <hr>
                                    <table id="content" class="table table-bordered table-hover">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Attendent Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($info = $result->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo "{$info['Sno']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['date']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['attendances']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['teacher_name']}"; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="demo3">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">
                                <div class="modal-body">

                                    <?php if ($_SESSION['student_ID'] == '2201') {
                                        $sql = "SELECT * FROM a12201mathematics1";
                                        $result = mysqli_query($conn, $sql);
                                    } else {
                                        $sql = "SELECT * FROM a12202mathematics1";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    ?>
                                    <hr>
                                    <h5>MATHEMATICS-I</h5>
                                    <hr>
                                    <table id="content" class="table table-bordered table-hover">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Attendent Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($info = $result->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo "{$info['Sno']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['date']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['attendances']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['teacher_name']}"; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="demo4">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">
                                <div class="modal-body">

                                    <?php if ($_SESSION['student_ID'] == '2201') {
                                        $sql = "SELECT * FROM a12201physics1";
                                        $result = mysqli_query($conn, $sql);
                                    } else {
                                        $sql = "SELECT * FROM a12202physics1";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    ?>
                                    <hr>
                                    <h5>PHYSICS-I</h5>
                                    <hr>
                                    <table id="content" class="table table-bordered table-hover">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Attendent Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($info = $result->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo "{$info['Sno']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['date']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['attendances']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['teacher_name']}"; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="demo5">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">
                                <div class="modal-body">

                                    <?php if ($_SESSION['student_ID'] == '2201') {
                                        $sql = "SELECT * FROM a12201sdflab1";
                                        $result = mysqli_query($conn, $sql);
                                    } else {
                                        $sql = "SELECT * FROM a12202sdflab1";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    ?>
                                    <hr>
                                    <h5>SDF LAB-I</h5>
                                    <hr>
                                    <table id="content" class="table table-bordered table-hover">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Attendent Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($info = $result->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo "{$info['Sno']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['date']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['attendances']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['teacher_name']}"; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="demo6">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">
                                <div class="modal-body">

                                    <?php if ($_SESSION['student_ID'] == '2201') {
                                        $sql = "SELECT * FROM a12201physicslab1";
                                        $result = mysqli_query($conn, $sql);
                                    } else {
                                        $sql = "SELECT * FROM a12202physicslab1";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                    ?>
                                    <hr>
                                    <h5>PHYSICS LAB-I</h5>
                                    <hr>
                                    <table id="content" class="table table-bordered table-hover">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Attendent Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($info = $result->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo "{$info['Sno']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['date']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['attendances']}"; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "{$info['teacher_name']}"; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>





                    <hr>
                    <h4>Attendance</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 btn-magin">
                            <?php $id = $_SESSION['student_ID'];
                            $sql1 = "SELECT * FROM attendance1 WHERE student_ID='$id'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <?php
                            while ($info = $result1->fetch_assoc()) {

                            ?>
                                <table class="table table-bordered" style=" border: 2px solid black;">
                                    <tbody>
                                        <tr>
                                            <td class="table-success">1</td>
                                            <td class="table-success">SDF-1</td>
                                            <td><a href="#demo1" data-bs-toggle="modal"><?php $perc = ($info['SDF1'] / $info['TSDF1']) * 100;
                                                                                        echo $perc; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-success">2</td>
                                            <td class="table-success">ENGLISH</td>
                                            <td><a href="#demo2" data-bs-toggle="modal"><?php $perc = ($info['ENGLISH'] / $info['TENGLISH']) * 100;
                                                                                        echo $perc; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-success">3</td>
                                            <td class="table-success">MATHEMATICS</td>
                                            <td><a href="#demo3" data-bs-toggle="modal"><?php $perc = ($info['MATHEMATICS1'] / $info['TMATHEMATICS1']) * 100;
                                                                                        echo $perc; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-success">4</td>
                                            <td class="table-success">PHYSICS</td>
                                            <td><a href="#demo4" data-bs-toggle="modal"><?php $perc = ($info['PHYSICS1'] / $info['TPHYSICS1']) * 100;
                                                                                        echo $perc; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-success">5</td>
                                            <td class="table-success">SDF LAB-1</td>
                                            <td><a href="#demo5" data-bs-toggle="modal"><?php $perc = ($info['SDFLAB1'] / $info['TSDFLAB1']) * 100;
                                                                                        echo $perc; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td class="table-success">6</td>
                                            <td class="table-success">PHYSICS LAB-1</td>
                                            <td><a href="#demo6" data-bs-toggle="modal"><?php $perc = ($info['PHYSICSLAB1'] / $info['TPHYSICSLAB1']) * 100;
                                                                                        echo $perc; ?></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } ?>
                        </div>
                        <hr>
                    </div>
                </div>

                <div id="t32" class="container-sm tab-pane fade">

                    <?php
                    $sql1 = "SELECT DISTINCT subject_taught, teacher_name FROM teacher";
                    $result1 = mysqli_query($conn, $sql1);
                    ?>

                    <table id="content" class="table table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>Sno</th>
                                <th>Course Name</th>
                                <th>Teacher Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            while ($info = $result1->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo $x; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['subject_taught']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['teacher_name']}"; ?>
                                    </td>
                                </tr>
                            <?php $x++;
                            } ?>
                        </tbody>
                    </table>


                </div>

                <div id="t41" class="container-sm tab-pane fade">
                    <hr>
                    <h4>Result</h4>
                    <hr>

                </div>

                <div id="t42" class="container-sm tab-pane fade">

                </div>

                <div id="t51" class="container-sm tab-pane fade">
                    <h4>Upcoming Events</h4>
                    <?php
                    $sql1 = "SELECT * FROM event ORDER BY Date ASC";
                    $result1 = mysqli_query($conn, $sql1);
                    ?>
                    <hr>
                    <table id="content" class="table table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Venue</th>
                                <th>Time</th>
                                <th>Event Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            while ($info = $result1->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo $x; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['Event']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['Date']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['Venue']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['Time']}"; ?>
                                    </td>
                                    <td>
                                        <?php echo "{$info['Description']}"; ?>
                                    </td>
                                </tr>
                            <?php $x++;
                            } ?>
                        </tbody>
                    </table>
                    <hr>
                </div>

                <div id="t61" class="container-sm tab-pane fade">

                </div>

                <div id="t62" class="container-sm tab-pane fade">

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
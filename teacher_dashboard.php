<?php
session_start();
include "_dbconnect_teacher.php";

if (isset($_SESSION['teacher_ID']) && isset($_SESSION['teacher_name']) && isset($_SESSION['image_link']) && isset($_SESSION['subject_taught'])) {
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
            /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

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

            /*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

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






        <section class="top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="teacher_dashboard.php" style="color: white; ">
                            <p style="font-size: 80%;">🆂🅷🅸🅿🆁🅰🆂🅷</p>
                        </a>
                    </div>
                    <h2 class="" style="color: white; margin-right: 5%;">JIIT - Webportal</h2>
                    <a href="logout.php" class="btn btn-secondary btn-sm" role="button" style="margin-left: 2%;">Log Out</a>
                </div>
            </nav>
        </section>




        <section>
            <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center"><img src="<?php echo $_SESSION['image_link']; ?>" alt="Profile" width="120" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                        <div class="media-body">
                            <h4 class="m-0"><?php echo $_SESSION['teacher_name']; ?></h4>
                            <p class="font-weight-light text-muted mb-0">Teacher</p>
                        </div>
                    </div>
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;">Teacher Profile
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t11" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
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

                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Attendance Details
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t21" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Attendance Marking
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t22" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Updating Attendance
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">

                                <img src="listimage.png" alt="image" style="margin-right: 8px;"> Student Mark Details
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t31" id="" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Update Marks
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t32" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Student Result Information
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
                                <ul class="nav flex-column bg-white mb-0">
                                    <li class="nav-item">
                                        <a href="#t41" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Placement Information
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t42" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
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
            <div class="page-content p-2" id="content">
                <!-- Toggle button -->
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold  m-2" style="font-size: 30px;">≡</small></button>
            </div>


            <div class="page-content tab-content p-2" id="content">

                <div id="t11" class="container-sm tab-pane fade">
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 btn-magin">
                            <h4 style="margin-bottom: 15px;">Personal Information</h4>
                            <table class="table table-bordered" style=" border: 2px solid black;">
                                <tbody>
                                    <tr>
                                        <td class="table-success">ID</td>
                                        <td><?php echo "{$_SESSION['teacher_ID']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Name</td>
                                        <td><?php echo "{$_SESSION['teacher_name']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Department</td>
                                        <td><?php echo "{$_SESSION['department']}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="table-success">Gender</td>
                                        <td><?php echo "{$_SESSION['gender']}"; ?></td>
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
                                    <label for="stdid">TEACHER ID</label>
                                    <?php
                                    $id = $_SESSION['teacher_ID'];
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
                                    <label for="stdid">TEACHER ID</label>
                                    <?php
                                    $id = $_SESSION['teacher_ID'];
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

                        $check = "SELECT * FROM teacher WHERE teacher_ID='$id'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            $cid = $_SESSION['teacher_ID'];
                            $sql = "UPDATE teacher SET password='$pass' WHERE teacher_ID= '$cid'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Successfully Password Changed!')</script>");
                                echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                exit();
                            }
                        } else {
                            echo "<script>alert('Invalid User!!!')</script>";
                            echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                            exit();
                        }
                    }
                    if (isset($_POST['changeimage'])) {
                        $id = $_POST['stdid'];
                        $image = $_POST['img'];

                        $check = "SELECT * FROM teacher WHERE teacher_ID='$id'";
                        $check_user = mysqli_query($conn, $check);

                        $row_count = mysqli_num_rows($check_user);
                        if ($row_count == 1) {
                            $cid = $_SESSION['teacher_ID'];
                            $sql = "UPDATE teacher SET image_link='$image' WHERE teacher_ID= '$cid'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                echo ("<script>alert('Successfully Image Changed!')</script>");
                                echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                exit();
                            }
                        } else {
                            echo "<script>alert('Invalid User!!!')</script>";
                            echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                            exit();
                        }
                    }
                    ?>

                </div>

                <div id="t21" class="container-sm tab-pane fade">
                    <hr>
                    <h4>Attendance Marking</h4>
                    <hr>
                    <button type="button" class="btn btn-primary" style=" background-color: #182747;" data-bs-toggle="collapse" data-bs-target="#demo">Select Year And Batch</button>
                    <div id="demo" class="collapse">
                        <br>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        Ist
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A11">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A12">A2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B11">B1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B12">B2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B13">B3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B14">B4</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IInd
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A21">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B21">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IIIrd
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A31">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B31">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IVth
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A41">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B41">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content">
                        <div id="A11" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='A1' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <label for="date">Select Date:</label>
                                    <input type="date" id="dates" name="Date" required>
                                    <tbody>
                                        <?php
                                        $x = 1;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="present" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="present">Present</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="absent" name="<?php echo $x; ?>" value=0>
                                                            <label for="absent">Absent</label><br>
                                                        </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="attendance_mark" value="Save" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['attendance_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='A1' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $date = $_POST['Date'];
                                while ($info = $result1->fetch_assoc()) {
                                    $atten = $_POST[$x];
                                    $ans = 'Present';
                                    if ($atten == 0) {
                                        $ans = 'Absent';
                                    }
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];
                                    if ($subjects == 'SDF1') {
                                        $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDF1=TSDF1 + '1' WHERE student_ID = '$ids'";
                                        if ($x == 1) {
                                            $sql3 = "INSERT INTO a12201sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        } elseif ($x == 2) {
                                            $sql3 = "INSERT INTO a12202sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        }
                                    } elseif ($subjects == 'PHYSICS1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICS1=TPHYSICS1 + '1' WHERE student_ID = '$ids'";
                                        if ($x == 1) {
                                            $sql3 = "INSERT INTO a12201physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        } elseif ($x == 2) {
                                            $sql3 = "INSERT INTO a12202physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        }
                                    } elseif ($subjects == 'SDFLAB1') {
                                        $sql1 = "UPDATE attendance1 SET SDFLAB1=SDFLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDFLAB1=TSDFLAB1 + '1' WHERE student_ID = '$ids'";
                                        if ($x == 1) {
                                            $sql3 = "INSERT INTO a12201sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        } elseif ($x == 2) {
                                            $sql3 = "INSERT INTO a12202sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        }
                                    } elseif ($subjects == 'ENGLISH') {
                                        $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TENGLISH=TENGLISH + '1' WHERE student_ID = '$ids'";
                                        if ($x == 1) {
                                            $sql3 = "INSERT INTO a12201english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        } elseif ($x == 2) {
                                            $sql3 = "INSERT INTO a12202english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        }
                                    } elseif ($subjects == 'MATHEMATICS1') {
                                        $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TMATHEMATICS1=TMATHEMATICS1 + '1' WHERE student_ID = '$ids'";
                                        if ($x == 1) {
                                            $sql3 = "INSERT INTO a12201mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        } elseif ($x == 2) {
                                            $sql3 = "INSERT INTO a12202mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        }
                                    } elseif ($subjects == 'PHYSICSLAB1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICSLAB1 =PHYSICSLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICSLAB1=TPHYSICSLAB1 + '1' WHERE student_ID = '$ids'";
                                        if ($x == 1) {
                                            $sql3 = "INSERT INTO a12201physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        } elseif ($x == 2) {
                                            $sql3 = "INSERT INTO a12202physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        }
                                    }
                                    $result11 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    $result3 = mysqli_query($conn, $sql3);
                                    $x++;
                                }
                                if ($result11 &&  $result2) {
                                    echo ("<script>alert('Attendance Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="A12" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='A2' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <label for="date">Select Date:</label>
                                    <input type="date" id="dates" name="Date" required>

                                    <tbody>
                                        <?php
                                        $x = 1;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="present" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="present">Present</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="absent" name="<?php echo $x; ?>" value=0>
                                                            <label for="absent">Absent</label><br>
                                                        </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="attendance_mark" value="Save" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['attendance_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='A2' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $date = $_POST['Date'];
                                while ($info = $result1->fetch_assoc()) {
                                    $atten = $_POST[$x];
                                    $ans = 'Present';
                                    if ($atten == 0) {
                                        $ans = 'Absent';
                                    }
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];
                                    if ($subjects == 'SDF1') {
                                        $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDF1=TSDF1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICS1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICS1=TPHYSICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'SDFLAB1') {
                                        $sql1 = "UPDATE attendance1 SET SDFLAB1=SDFLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDFLAB1=TSDFLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'ENGLISH') {
                                        $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TENGLISH=TENGLISH + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'MATHEMATICS1') {
                                        $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TMATHEMATICS1=TMATHEMATICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICSLAB1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICSLAB1 =PHYSICSLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICSLAB1=TPHYSICSLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    }
                                    $result11 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    // $result3 = mysqli_query($conn, $sql3);
                                    $x++;
                                }
                                if ($result11 &&  $result2) {
                                    echo ("<script>alert('Attendance Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="B11" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B1' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <label for="date">Select Date:</label>
                                    <input type="date" id="dates" name="Date" required>
                                    <tbody>
                                        <?php
                                        $x = 1;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="present" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="present">Present</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="absent" name="<?php echo $x; ?>" value=0>
                                                            <label for="absent">Absent</label><br>
                                                        </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="attendance_mark" value="Save" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['attendance_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B1' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                while ($info = $result1->fetch_assoc()) {
                                    $atten = $_POST[$x];
                                    $ans = 'Present';
                                    if ($atten == 0) {
                                        $ans = 'Absent';
                                    }
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];
                                    if ($subjects == 'SDF1') {
                                        $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDF1=TSDF1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICS1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICS1=TPHYSICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'SDFLAB1') {
                                        $sql1 = "UPDATE attendance1 SET SDFLAB1=SDFLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDFLAB1=TSDFLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'ENGLISH') {
                                        $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TENGLISH=TENGLISH + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'MATHEMATICS1') {
                                        $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TMATHEMATICS1=TMATHEMATICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICSLAB1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICSLAB1 =PHYSICSLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICSLAB1=TPHYSICSLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    }
                                    $result11 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    // $result3 = mysqli_query($conn, $sql3);
                                    $x++;
                                }
                                if ($result11 &&  $result2) {
                                    echo ("<script>alert('Attendance Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>

                        <div id="B12" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B2' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <label for="date">Select Date:</label>
                                    <input type="date" id="dates" name="Date" required>
                                    <tbody>
                                        <?php
                                        $x = 1;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="present" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="present">Present</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="absent" name="<?php echo $x; ?>" value=0>
                                                            <label for="absent">Absent</label><br>
                                                        </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="attendance_mark" value="Save" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['attendance_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B2' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                while ($info = $result1->fetch_assoc()) {
                                    $atten = $_POST[$x];
                                    $ans = 'Present';
                                    if ($atten == 0) {
                                        $ans = 'Absent';
                                    }
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];
                                    if ($subjects == 'SDF1') {
                                        $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDF1=TSDF1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICS1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICS1=TPHYSICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'SDFLAB1') {
                                        $sql1 = "UPDATE attendance1 SET SDFLAB1=SDFLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDFLAB1=TSDFLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'ENGLISH') {
                                        $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TENGLISH=TENGLISH + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'MATHEMATICS1') {
                                        $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TMATHEMATICS1=TMATHEMATICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICSLAB1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICSLAB1 =PHYSICSLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICSLAB1=TPHYSICSLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    }
                                    $result11 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    // $result3 = mysqli_query($conn, $sql3);
                                    $x++;
                                }
                                if ($result11 &&  $result2) {
                                    echo ("<script>alert('Attendance Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>

                        <div id="B13" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B3' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <label for="date">Select Date:</label>
                                    <input type="date" id="dates" name="Date" required>
                                    <tbody>
                                        <?php
                                        $x = 1;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="present" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="present">Present</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="absent" name="<?php echo $x; ?>" value=0>
                                                            <label for="absent">Absent</label><br>
                                                        </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="attendance_mark" value="Save" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['attendance_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B3' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                while ($info = $result1->fetch_assoc()) {
                                    $atten = $_POST[$x];
                                    $ans = 'Present';
                                    if ($atten == 0) {
                                        $ans = 'Absent';
                                    }
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];
                                    if ($subjects == 'SDF1') {
                                        $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDF1=TSDF1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICS1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICS1=TPHYSICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'SDFLAB1') {
                                        $sql1 = "UPDATE attendance1 SET SDFLAB1=SDFLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDFLAB1=TSDFLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'ENGLISH') {
                                        $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TENGLISH=TENGLISH + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'MATHEMATICS1') {
                                        $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TMATHEMATICS1=TMATHEMATICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICSLAB1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICSLAB1 =PHYSICSLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICSLAB1=TPHYSICSLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    }
                                    $result11 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    // $result3 = mysqli_query($conn, $sql3);
                                    $x++;
                                }
                                if ($result11 &&  $result2) {
                                    echo ("<script>alert('Attendance Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>

                        <div id="B14" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B4' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <label for="date">Select Date:</label>
                                    <input type="date" id="dates" name="Date" required>
                                    <tbody>
                                        <?php
                                        $x = 1;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="present" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="present">Present</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="radio" id="absent" name="<?php echo $x; ?>" value=0>
                                                            <label for="absent">Absent</label><br>
                                                        </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="attendance_mark" value="Save" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['attendance_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B4' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                while ($info = $result1->fetch_assoc()) {
                                    $atten = $_POST[$x];
                                    $ans = 'Present';
                                    if ($atten == 0) {
                                        $ans = 'Absent';
                                    }
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];
                                    if ($subjects == 'SDF1') {
                                        $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDF1=TSDF1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdf1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICS1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICS1=TPHYSICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'SDFLAB1') {
                                        $sql1 = "UPDATE attendance1 SET SDFLAB1=SDFLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TSDFLAB1=TSDFLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202sdflab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'ENGLISH') {
                                        $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TENGLISH=TENGLISH + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202english(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'MATHEMATICS1') {
                                        $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TMATHEMATICS1=TMATHEMATICS1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202mathematics1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    } elseif ($subjects == 'PHYSICSLAB1') {
                                        $sql1 = "UPDATE attendance1 SET PHYSICSLAB1 =PHYSICSLAB1 + '$atten' WHERE student_ID = '$ids'";
                                        $sql2 = "UPDATE attendance1 SET TPHYSICSLAB1=TPHYSICSLAB1 + '1' WHERE student_ID = '$ids'";
                                        // if ($x == 1) {
                                        //     $sql3 = "INSERT INTO a12201physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // } elseif ($x == 2) {
                                        //     $sql3 = "INSERT INTO a12202physicslab1(date, attendances, teacher_name) VALUES('$date', '$ans', '$teach')";
                                        // }
                                    }
                                    $result11 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    // $result3 = mysqli_query($conn, $sql3);
                                    $x++;
                                }
                                if ($result11 &&  $result2) {
                                    echo ("<script>alert('Attendance Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>

                    </div>

                </div>


                <!-- UPDATE ATTENDANCE -->


                <div id="t22" class="container-sm tab-pane fade">
                    <hr>
                    <h4>Updating Attendance</h4>
                    <hr>
                    <form action="#" method="POST" autocomplete="off">
                        <div>
                            <label for="student_ID">Student ID</label>
                            <input type="text" name="studentid" id="" required>
                        </div>
                        <div>
                            <label for="date">Select Date:</label>
                            <input type="date" id="dates" name="Date" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <input type="radio" id="present" name="att" value=1>
                                <label for="present">Present</label><br>
                            </div>

                            <div class="col-lg-1 col-md-1 btn-magin">
                                <input type="radio" id="absent" name="att" value=0 checked="true">
                                <label for="absent">Absent</label><br>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="attendance_marking" value="Save" style="background-color: #25316D;">
                        </div>
                    </form>


                    <?php
                    if (isset($_POST['attendance_marking'])) {

                        $ids = $_POST['studentid'];
                        $date = $_POST['Date'];
                        $atten = $_POST['att'];
                        $ans = 'Present';
                        if ($atten == '0') {
                            $ans = 'Absent';
                        }
                        $subjects = $_SESSION['subject_taught'];
                        if ($subjects == 'SDF1') {
                            $sql1 = "UPDATE attendance1 SET SDF1=SDF1 +'$atten' WHERE student_ID = '$ids'";
                            if ($ids == '2201') {
                                $sql3 = "UPDATE a12201sdf1 SET attendances ='$ans' WHERE date='$date'";
                            } elseif ($ids == '2202') {
                                $sql3 = "UPDATE a12202sdf1 SET attendances ='$ans' WHERE date='$date'";
                            }
                        } elseif ($subjects == 'PHYSICS1') {
                            $sql1 = "UPDATE attendance1 SET PHYSICS1=PHYSICS1 +'$atten' WHERE student_ID = '$ids'";
                            if ($ids == '2201') {
                                $sql3 = "UPDATE a12201physics1 SET attendances ='$ans' WHERE date='$date'";
                            } elseif ($ids == '2202') {
                                $sql3 = "UPDATE a12202physics1 SET attendances ='$ans' WHERE date='$date'";
                            }
                        } elseif ($subjects == 'SDF(LAB)I') {
                            $sql1 = "UPDATE attendance1 SET SDF(LAB)I=SDF(LAB)I + '$atten' WHERE student_ID = '$ids'";
                            if ($ids == '2201') {
                                $sql3 = "UPDATE a12201sdf(lab)i SET attendances ='$ans' WHERE date='$date'";
                            } elseif ($ids == '2202') {
                                $sql3 = "UPDATE a12202sdf(lab)i SET attendances ='$ans' WHERE date='$date'";
                            }
                        } elseif ($subjects == 'ENGLISH') {
                            $sql1 = "UPDATE attendance1 SET ENGLISH=ENGLISH +'$atten' WHERE student_ID = '$ids'";
                            if ($ids == '2201') {
                                $sql3 = "UPDATE a12201english SET attendances ='$ans' WHERE date='$date'";
                            } elseif ($ids == '2202') {
                                $sql3 = "UPDATE a12202english SET attendances ='$ans' WHERE date='$date'";
                            }
                        } elseif ($subjects == 'MATHEMATICS1') {
                            $sql1 = "UPDATE attendance1 SET MATHEMATICS1= MATHEMATICS1 +'$atten' WHERE student_ID = '$ids'";
                            if ($ids == '2201') {
                                $sql3 = "UPDATE a12201mathematics1 SET attendances ='$ans' WHERE date='$date'";
                            } elseif ($ids == '2202') {
                                $sql3 = "UPDATE a12202mathematics1 SET attendances ='$ans' WHERE date='$date'";
                            }
                        } elseif ($subjects == 'PHYSICS(LAB)I') {
                            $sql1 = "UPDATE attendance1 SET PHYSICS(LAB)I =PHYSICS(LAB)I + '$atten' WHERE student_ID = '$ids'";
                            if ($ids == '2201') {
                                $sql3 = "UPDATE a12201physics(lab)i SET attendances ='$ans' WHERE date='$date'";
                            } elseif ($ids == '2202') {
                                $sql3 = "UPDATE a12202physics(lab)i SET attendances ='$ans' WHERE date='$date'";
                            }
                        }
                        $result11 = mysqli_query($conn, $sql1);
                        $result3 = mysqli_query($conn, $sql3);
                        if ($result11 && $result3) {
                            echo ("<script>alert('Attendance Updated Successfully!')</script>");
                            echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                            exit();
                        } else {
                            echo "<script>alert('Unsuccessfull!')</script>";
                            echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                            exit();
                        }
                    }
                    ?>
                </div>
                <div id="t31" class="container-sm tab-pane fade">
                    <hr>
                    <h4>Marks Updating</h4>
                    <hr>
                    <button type="button" class="btn btn-primary" style=" background-color: #182747;" data-bs-toggle="collapse" data-bs-target="#demo">Select Year And Batch</button>
                    <div id="demo" class="collapse">
                        <br>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        Ist
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A111">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A122">A2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B111">B1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B122">B2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B133">B3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B144">B4</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IInd
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A211">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B211">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IIIrd
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A311">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B311">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IVth
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A411">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B411">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content">
                        <div id="A111" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='A1' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            $subjects = $_SESSION['subject_taught'];
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <tbody>
                                        <?php
                                        $x = 1;
                                        $y = 111;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t1" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="t1">T1</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t2" name="<?php echo $x; ?>" value=2>
                                                            <label for="t2">T2</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t3" name="<?php echo $x; ?>" value=3>
                                                            <label for="t3">T3</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="number" id="quantity" name="<?php echo $y; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="update_mark" value="Update" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['update_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='A1' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $y = 111;
                                while ($info = $result1->fetch_assoc()) {
                                    $number = $_POST[$y];
                                    $term = $_POST[$x];
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];


                                    if ($term == 1) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T1SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T1ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T1MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 2) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T2SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T2ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T2MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 3) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T3SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T3ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T3MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    }

                                    $result11 = mysqli_query($conn, $sql1);
                                    $x++;
                                    $y++;
                                }
                                if ($result11) {
                                    echo ("<script>alert('Marks Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="A122" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='A2' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            $subjects = $_SESSION['subject_taught'];
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <tbody>
                                        <?php
                                        $x = 1;
                                        $y = 111;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t1" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="t1">T1</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t2" name="<?php echo $x; ?>" value=2>
                                                            <label for="t2">T2</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t3" name="<?php echo $x; ?>" value=3>
                                                            <label for="t3">T3</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="number" id="quantity" name="<?php echo $y; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="update_mark" value="Update" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['update_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='A2' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $y = 111;
                                while ($info = $result1->fetch_assoc()) {
                                    $number = $_POST[$y];
                                    $term = $_POST[$x];
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];


                                    if ($term == 1) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T1SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T1ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T1MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 2) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T2SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T2ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T2MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 3) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T3SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T3ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T3MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    }

                                    $result11 = mysqli_query($conn, $sql1);
                                    $x++;
                                    $y++;
                                }
                                if ($result11) {
                                    echo ("<script>alert('Marks Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="B111" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B1' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            $subjects = $_SESSION['subject_taught'];
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <tbody>
                                        <?php
                                        $x = 1;
                                        $y = 111;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t1" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="t1">T1</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t2" name="<?php echo $x; ?>" value=2>
                                                            <label for="t2">T2</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t3" name="<?php echo $x; ?>" value=3>
                                                            <label for="t3">T3</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="number" id="quantity" name="<?php echo $y; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="update_mark" value="Update" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['update_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B1' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $y = 111;
                                while ($info = $result1->fetch_assoc()) {
                                    $number = $_POST[$y];
                                    $term = $_POST[$x];
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];


                                    if ($term == 1) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T1SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T1ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T1MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 2) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T2SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T2ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T2MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 3) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T3SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T3ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T3MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    }

                                    $result11 = mysqli_query($conn, $sql1);
                                    $x++;
                                    $y++;
                                }
                                if ($result11) {
                                    echo ("<script>alert('Marks Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="B122" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B2' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            $subjects = $_SESSION['subject_taught'];
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <tbody>
                                        <?php
                                        $x = 1;
                                        $y = 111;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t1" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="t1">T1</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t2" name="<?php echo $x; ?>" value=2>
                                                            <label for="t2">T2</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t3" name="<?php echo $x; ?>" value=3>
                                                            <label for="t3">T3</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="number" id="quantity" name="<?php echo $y; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="update_mark" value="Update" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['update_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B2' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $y = 111;
                                while ($info = $result1->fetch_assoc()) {
                                    $number = $_POST[$y];
                                    $term = $_POST[$x];
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];


                                    if ($term == 1) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T1SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T1ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T1MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 2) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T2SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T2ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T2MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 3) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T3SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T3ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T3MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    }

                                    $result11 = mysqli_query($conn, $sql1);
                                    $x++;
                                    $y++;
                                }
                                if ($result11) {
                                    echo ("<script>alert('Marks Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="B133" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B3' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            $subjects = $_SESSION['subject_taught'];
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <tbody>
                                        <?php
                                        $x = 1;
                                        $y = 111;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t1" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="t1">T1</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t2" name="<?php echo $x; ?>" value=2>
                                                            <label for="t2">T2</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t3" name="<?php echo $x; ?>" value=3>
                                                            <label for="t3">T3</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="number" id="quantity" name="<?php echo $y; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="update_mark" value="Update" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['update_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B3' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $y = 111;
                                while ($info = $result1->fetch_assoc()) {
                                    $number = $_POST[$y];
                                    $term = $_POST[$x];
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];


                                    if ($term == 1) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T1SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T1ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T1MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 2) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T2SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T2ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T2MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 3) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T3SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T3ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T3MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    }

                                    $result11 = mysqli_query($conn, $sql1);
                                    $x++;
                                    $y++;
                                }
                                if ($result11) {
                                    echo ("<script>alert('Marks Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <div id="B144" class="container tab-pane fade">


                            <?php
                            $sql1 = "SELECT * FROM student where batch='B4' AND semester='1'";
                            $result1 = mysqli_query($conn, $sql1);
                            $subjects = $_SESSION['subject_taught'];
                            ?>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>
                                <form action="#" method="POST" autocomplete="off">
                                    <tbody>
                                        <?php
                                        $x = 1;
                                        $y = 111;
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
                                                    <?php echo "{$info['batch']}"; ?>
                                                </td>
                                                <td>
                                                    <div class="row">

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t1" name="<?php echo $x; ?>" value=1 checked="true">
                                                            <label for="t1">T1</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t2" name="<?php echo $x; ?>" value=2>
                                                            <label for="t2">T2</label><br>
                                                        </div>

                                                        <div class="col-lg-1 col-md-1 btn-magin">
                                                            <input type="radio" id="t3" name="<?php echo $x; ?>" value=3>
                                                            <label for="t3">T3</label><br>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 btn-magin">
                                                            <input type="number" id="quantity" name="<?php echo $y; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                    </tbody>
                            </table>
                            <div>
                                <input type="submit" class="btn btn-primary" name="update_mark" value="Update" style="background-color: #25316D;">
                            </div>
                            </form>


                            <?php
                            if (isset($_POST['update_mark'])) {

                                $sql1 = "SELECT * FROM student where batch='B4' AND semester='1'";
                                $result1 = mysqli_query($conn, $sql1);
                                $x = 1;
                                $y = 111;
                                while ($info = $result1->fetch_assoc()) {
                                    $number = $_POST[$y];
                                    $term = $_POST[$x];
                                    $subjects = $_SESSION['subject_taught'];
                                    $teach = $_SESSION['teacher_name'];
                                    $ids = $info['student_ID'];


                                    if ($term == 1) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T1SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T1ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T1MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T1PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 2) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T2SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T2ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T2MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T2PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    } elseif ($term == 3) {
                                        if ($subjects == 'SDF1') {
                                            $sql1 = "UPDATE marks1 SET T3SDF1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICS1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'SDFLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3SDFLAB1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'ENGLISH') {
                                            $sql1 = "UPDATE marks1 SET T3ENGLISH='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'MATHEMATICS1') {
                                            $sql1 = "UPDATE marks1 SET T3MATHEMATICS1='$number' WHERE student_ID = '$ids'";
                                        } elseif ($subjects == 'PHYSICSLAB1') {
                                            $sql1 = "UPDATE marks1 SET T3PHYSICSLAB1='$number' WHERE student_ID = '$ids'";
                                        }
                                    }

                                    $result11 = mysqli_query($conn, $sql1);
                                    $x++;
                                    $y++;
                                }
                                if ($result11) {
                                    echo ("<script>alert('Marks Updated Successfully!')</script>");
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'teacher_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>

                        </div>
                        <hr>
                    </div>
                </div>
                <div id="t32" class="container-sm tab-pane fade">
                    <hr>
                    <h4>Student Result</h4>
                    <hr>
                    <button type="button" class="btn btn-primary" style=" background-color: #182747;" data-bs-toggle="collapse" data-bs-target="#demo">Select Year And Batch</button>
                    <div id="demo" class="collapse">
                        <br>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        Ist
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A1111">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A1222">A2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B1111">B1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B1222">B2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B1333">B3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B1444">B4</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IInd
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A2111">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B2111">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IIIrd
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A3111">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B3111">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 btn-magin">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #182747;">
                                        IVth
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <ul class="nav nav-pills flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#A4111">A1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" data-bs-toggle="pill" href="#B4111">B1</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content">
                        <div id="A1111" class="container tab-pane fade">


                            <?php
                            $subjects = $_SESSION['subject_taught'];
                            if ($subjects == 'SDF1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDF1, marks1.T2SDF1, marks1.T3SDF1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A1' AND student.semester='1'";
                            } elseif ($subjects == 'SDFLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDFLAB1, marks1.T2SDFLAB1, marks1.T3SDFLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A1' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICS1, marks1.T2PHYSICS1, marks1.T3PHYSICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A1' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICSLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICSLAB1, marks1.T2PHYSICSLAB1, marks1.T3PHYSICSLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A1' AND student.semester='1'";
                            } elseif ($subjects == 'MATHEMATICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1MATHEMATICS1, marks1.T2MATHEMATICS1, marks1.T3MATHEMATICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A1' AND student.semester='1'";
                            } elseif ($subjects == 'ENGLISH') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1ENGLISH, marks1.T2ENGLISH, marks1.T3ENGLISH FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A1' AND student.semester='1'";
                            }

                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <h5><?php echo $subjects; ?></h5>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>T1</th>
                                        <th>T2</th>
                                        <th>T3</th>
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
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T1SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T1SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T1PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T1PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T1MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T1ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T2SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T2SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T2PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T2PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T2MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T2ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T3SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T3SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T3PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T3PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T3MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T3ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="A1222" class="container tab-pane fade">


                            <?php
                            $subjects = $_SESSION['subject_taught'];
                            if ($subjects == 'SDF1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDF1, marks1.T2SDF1, marks1.T3SDF1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A2' AND student.semester='1'";
                            } elseif ($subjects == 'SDFLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDFLAB1, marks1.T2SDFLAB1, marks1.T3SDFLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A2' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICS1, marks1.T2PHYSICS1, marks1.T3PHYSICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A2' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICSLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICSLAB1, marks1.T2PHYSICSLAB1, marks1.T3PHYSICSLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A2' AND student.semester='1'";
                            } elseif ($subjects == 'MATHEMATICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1MATHEMATICS1, marks1.T2MATHEMATICS1, marks1.T3MATHEMATICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A2' AND student.semester='1'";
                            } elseif ($subjects == 'ENGLISH') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1ENGLISH, marks1.T2ENGLISH, marks1.T3ENGLISH FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='A2' AND student.semester='1'";
                            }

                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <h5><?php echo $subjects; ?></h5>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>T1</th>
                                        <th>T2</th>
                                        <th>T3</th>
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
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T1SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T1SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T1PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T1PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T1MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T1ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T2SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T2SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T2PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T2PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T2MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T2ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T3SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T3SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T3PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T3PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T3MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T3ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B1111" class="container tab-pane fade">


                            <?php
                            $subjects = $_SESSION['subject_taught'];
                            if ($subjects == 'SDF1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDF1, marks1.T2SDF1, marks1.T3SDF1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B1' AND student.semester='1'";
                            } elseif ($subjects == 'SDFLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDFLAB1, marks1.T2SDFLAB1, marks1.T3SDFLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B1' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICS1, marks1.T2PHYSICS1, marks1.T3PHYSICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B1' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICSLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICSLAB1, marks1.T2PHYSICSLAB1, marks1.T3PHYSICSLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B1' AND student.semester='1'";
                            } elseif ($subjects == 'MATHEMATICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1MATHEMATICS1, marks1.T2MATHEMATICS1, marks1.T3MATHEMATICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B1' AND student.semester='1'";
                            } elseif ($subjects == 'ENGLISH') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1ENGLISH, marks1.T2ENGLISH, marks1.T3ENGLISH FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B1' AND student.semester='1'";
                            }

                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <h5><?php echo $subjects; ?></h5>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>T1</th>
                                        <th>T2</th>
                                        <th>T3</th>
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
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T1SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T1SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T1PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T1PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T1MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T1ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T2SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T2SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T2PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T2PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T2MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T2ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T3SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T3SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T3PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T3PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T3MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T3ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B1222" class="container tab-pane fade">


                            <?php
                            $subjects = $_SESSION['subject_taught'];
                            if ($subjects == 'SDF1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDF1, marks1.T2SDF1, marks1.T3SDF1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B2' AND student.semester='1'";
                            } elseif ($subjects == 'SDFLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDFLAB1, marks1.T2SDFLAB1, marks1.T3SDFLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B2' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICS1, marks1.T2PHYSICS1, marks1.T3PHYSICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B2' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICSLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICSLAB1, marks1.T2PHYSICSLAB1, marks1.T3PHYSICSLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B2' AND student.semester='1'";
                            } elseif ($subjects == 'MATHEMATICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1MATHEMATICS1, marks1.T2MATHEMATICS1, marks1.T3MATHEMATICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B2' AND student.semester='1'";
                            } elseif ($subjects == 'ENGLISH') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1ENGLISH, marks1.T2ENGLISH, marks1.T3ENGLISH FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B2' AND student.semester='1'";
                            }

                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <h5><?php echo $subjects; ?></h5>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>T1</th>
                                        <th>T2</th>
                                        <th>T3</th>
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
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T1SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T1SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T1PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T1PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T1MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T1ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T2SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T2SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T2PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T2PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T2MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T2ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T3SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T3SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T3PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T3PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T3MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T3ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B1333" class="container tab-pane fade">


                            <?php
                            $subjects = $_SESSION['subject_taught'];
                            if ($subjects == 'SDF1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDF1, marks1.T2SDF1, marks1.T3SDF1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B3' AND student.semester='1'";
                            } elseif ($subjects == 'SDFLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDFLAB1, marks1.T2SDFLAB1, marks1.T3SDFLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B3' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICS1, marks1.T2PHYSICS1, marks1.T3PHYSICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B3' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICSLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICSLAB1, marks1.T2PHYSICSLAB1, marks1.T3PHYSICSLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B3' AND student.semester='1'";
                            } elseif ($subjects == 'MATHEMATICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1MATHEMATICS1, marks1.T2MATHEMATICS1, marks1.T3MATHEMATICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B3' AND student.semester='1'";
                            } elseif ($subjects == 'ENGLISH') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1ENGLISH, marks1.T2ENGLISH, marks1.T3ENGLISH FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B3' AND student.semester='1'";
                            }

                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <h5><?php echo $subjects; ?></h5>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>T1</th>
                                        <th>T2</th>
                                        <th>T3</th>
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
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T1SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T1SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T1PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T1PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T1MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T1ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T2SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T2SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T2PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T2PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T2MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T2ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T3SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T3SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T3PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T3PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T3MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T3ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="B1444" class="container tab-pane fade">


                            <?php
                            $subjects = $_SESSION['subject_taught'];
                            if ($subjects == 'SDF1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDF1, marks1.T2SDF1, marks1.T3SDF1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B4' AND student.semester='1'";
                            } elseif ($subjects == 'SDFLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1SDFLAB1, marks1.T2SDFLAB1, marks1.T3SDFLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B4' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICS1, marks1.T2PHYSICS1, marks1.T3PHYSICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B4' AND student.semester='1'";
                            } elseif ($subjects == 'PHYSICSLAB1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1PHYSICSLAB1, marks1.T2PHYSICSLAB1, marks1.T3PHYSICSLAB1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B4' AND student.semester='1'";
                            } elseif ($subjects == 'MATHEMATICS1') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1MATHEMATICS1, marks1.T2MATHEMATICS1, marks1.T3MATHEMATICS1 FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B4' AND student.semester='1'";
                            } elseif ($subjects == 'ENGLISH') {
                                $sql1 = "SELECT student.student_ID, student.student_name, student.batch, student.semester, marks1.T1ENGLISH, marks1.T2ENGLISH, marks1.T3ENGLISH FROM student RIGHT JOIN marks1 ON student.student_ID=marks1.student_ID WHERE student.batch='B4' AND student.semester='1'";
                            }

                            $result1 = mysqli_query($conn, $sql1);
                            ?>
                            <h5><?php echo $subjects; ?></h5>
                            <table id="content" class="table table-bordered table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>T1</th>
                                        <th>T2</th>
                                        <th>T3</th>
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
                                                <?php echo "{$info['batch']}"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T1SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T1SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T1PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T1PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T1MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T1ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T2SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T2SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T2PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T2PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T2MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T2ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($subjects == 'SDF1') {
                                                    echo "{$info['T3SDF1']}";
                                                } elseif ($subjects == 'SDFLAB1') {
                                                    echo "{$info['T3SDFLAB1']}";
                                                } elseif ($subjects == 'PHYSICS1') {
                                                    echo "{$info['T3PHYSICS1']}";
                                                } elseif ($subjects == 'PHYSICSLAB1') {
                                                    echo "{$info['T3PHYSICSLAB1']}";
                                                } elseif ($subjects == 'MATHEMATICS1') {
                                                    echo "{$info['T3MATHEMATICS1']}";
                                                } elseif ($subjects == 'ENGLISH') {
                                                    echo "{$info['T3ENGLISH']}";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
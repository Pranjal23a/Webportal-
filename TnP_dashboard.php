<?php
session_start();
include "_dbconnect_tnp.php";

if (isset($_SESSION['tnp_ID']) && isset($_SESSION['tnp_name']) && isset($_SESSION['image_link'])) {
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
                            <a class="navbar-brand left_area" href="TnP_dashboard.php" style="color: white; ">
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
                            <h4 class="m-0"><?php echo $_SESSION['tnp_name']; ?></h4>
                            <p class="font-weight-light text-muted mb-0">TnP Admin</p>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img src="listimage.png" alt="image" style="margin-right: 8px;">Placement Details
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column bg-white mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a href="#t11" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Placement Records
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#t12" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                            <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
                                            <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Add Placement Record
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
                <!-- <button id="sidebarCollapse" type="button"  class="btn btn-light bg-white  shadow-sm "><i class="fa fa-bars"></i><small class="text-uppercase font-weight-bold " style="font-size: 30px;">≡</small></button> -->
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold  m-2" style="font-size: 30px;">≡</small></button>
            </div>

            <div class="page-content tab-content p-2" id="content">
                <div id="t11" class="container-sm tab-pane fade">

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
                <div id="t12" class="container-sm tab-pane fade">
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
                            echo ("<script>window.location = 'TnP_dashboard.php';</script>");
                            exit();
                        } else {
                            $sql1 = "UPDATE student SET placement= '1' WHERE student_ID = '$studentid'";
                            $sql2 = "INSERT INTO placed(Student_ID, Company) VALUES('$studentid', '$companyname')";
                            $result1 = mysqli_query($conn, $sql1);
                            $result2 = mysqli_query($conn, $sql2);
                            if ($result1 and $result2) {
                                echo ("<script>alert('Successfully Records Added!')</script>");
                                echo ("<script>window.location = 'TnP_dashboard.php';</script>");
                                exit();
                            } else {
                                echo "<script>alert('Unsuccessfull!')</script>";
                                echo ("<script>window.location = 'TnP_dashboard.php';</script>");
                                exit();
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </section>


    </body>

    </html>
<?php
} else {
    header("Location: TnP_login.php");
    exit();
}
?>
<?php
session_start();
include "_dbconnect_student.php";

if (isset($_POST['username']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
}
$username= validate($_POST['username']);
$password= validate($_POST['password']);

// if(empty($username))
// {
//     header("Location: index.html?error=User Name is required");
//     exit();
// }
// else if(empty($password))
// {
//     header("Location: index.html?error=Password is required");
//     exit();
// }

$sql= "SELECT * FROM student WHERE student_ID='$username' AND password='$password'";

$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result)===1)
{
    $row= mysqli_fetch_assoc($result);
    if($row['student_ID'] === $username && $row['password'] === $password)
    {
        echo "Logged In!";
        $_SESSION['student_ID'] = $row['student_ID'];
        // $_SESSION['name'] = $row['name'];
        $_SESSION['student_name'] = $row['student_name'];
        $_SESSION['image_link'] = $row['image_link'];
        $_SESSION['academic_year'] = $row['academic_year'];
        $_SESSION['program'] = $row['program'];
        $_SESSION['semester'] = $row['semester'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['batch'] = $row['batch'];
        $_SESSION['hostal_room_no'] = $row['hostal_room_no'];

        header("Location: student_dashboard.php");
        exit();
    }
    else
    {
        echo("<script>alert('Incorrect User ID or Password!')</script>");
        echo("<script>window.location = 'index.html';</script>");
        // header("Location: index.html?error=Incorrect User Name or Password");
        exit();
    }
}
else
{
    echo("<script>alert('Incorrect User ID or Password!')</script>");
    echo("<script>window.location = 'index.html';</script>");
    // header("Location: index.html");
    exit();
}

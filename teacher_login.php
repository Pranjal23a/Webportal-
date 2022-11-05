<?php
session_start();
include "_dbconnect_teacher.php";

if(isset($_POST['username']) && isset($_POST['password']))
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
//     header("Location: admin.php?error=User Name is required");
//     exit();
// }
// else if(empty($password))
// {
//     header("Location: admin.php?error=Password is required");
//     exit();
// }

$sql= "SELECT * FROM teacher WHERE teacher_ID='$username' AND password='$password'";

$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result)===1)
{
    $row= mysqli_fetch_assoc($result);
    if($row['teacher_ID'] === $username && $row['password'] === $password)
    {
        echo "Logged In!";
        $_SESSION['teacher_ID'] = $row['teacher_ID'];
        // $_SESSION['name'] = $row['name'];
        $_SESSION['teacher_name'] = $row['teacher_name'];
        $_SESSION['image_link'] = $row['image_link'];

        header("Location: teacher_dashboard.php");
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
?>

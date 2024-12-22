<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{

    $id         = mysqli_real_escape_string($con,$_POST['id']);

    $query      = "DELETE FROM students WHERE id = '$id' ";

    $query_run  = mysqli_query($con,$query);

    if($query_run)
    {
       $_SESSION['message']="Student Deleted Successfully";
       header("Location: index.php");
        exit(0);
    }
    if (!$query_run) {
        die("Query Failed: " . mysqli_error($con));
    }
    else
    {
        $_SESSION['message']="Student Not Be  Deleted";
        header("Location: student-edit.php");
        exit(0);
       
    }

}


if(isset($_POST['update_student']))
{
    $id     = mysqli_real_escape_string($con,$_POST['id']);
    $name           = mysqli_real_escape_string($con,$_POST['name']);
    $email          = mysqli_real_escape_string($con,$_POST['email']);
    $phone          = mysqli_real_escape_string($con,$_POST['phone']);
    $cnic           = mysqli_real_escape_string($con,$_POST['cnic']);
    $reg            = mysqli_real_escape_string($con,$_POST['reg']);
    $degree         = mysqli_real_escape_string($con,$_POST['degree']);
    $session        = mysqli_real_escape_string($con,$_POST['session']);

    $query= "UPDATE students SET  
                    name='$name', email= '$email', phone= '$phone', cnic= '$cnic', regno= '$reg', degree= '$degree',session= '$session' WHERE id= '$id' ";

    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
       $_SESSION['message']="Student Updated Successfully";
       header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Student Not Updated";
        header("Location: student-edit.php");
        exit(0);
       
    }
}

if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $cnic = mysqli_real_escape_string($con,$_POST['cnic']);
    $reg = mysqli_real_escape_string($con,$_POST['reg']);
    $degree = mysqli_real_escape_string($con,$_POST['degree']);
    $session = mysqli_real_escape_string($con,$_POST['session']);

    $query= "INSERT INTO students(name,email,phone,cnic,regno,degree,session) VALUES
    ('$name','$email','$phone','$cnic','$reg','$degree','$session')";

    $query_run = mysqli_query($con,$query);
    

    if($query_run)
    {
       $_SESSION['message']="Student Created Successfully";
       header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Student Not Created";
        header("Location: student-create.php");
        exit(0);
       
    }



}
?>
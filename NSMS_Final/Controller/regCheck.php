<?php  

if(isset($_POST['submit']))
{

include_once('../model/userModel.php');

session_start();


    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];


$status = register ($name,$email, $gender, $password);
 
 if($name == "" || $email == "" || $gender == "" || $password == ""){
            
    header('location: ../view/registration.php?msg=invalid');
        }
 else if($status){
    header('location:../view/login.php');
 } else{
    header('location:../view/registration.php');
 }

}

?>




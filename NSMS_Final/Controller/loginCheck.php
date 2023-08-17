<?php 
   
    require_once('../model/userModel.php');

    session_start();
    
    if(isset($_POST['submit']))
    {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $status = login($email, $password);

        if($email == "" || $password == ""){
            
            header('location: ../view/login.php?msg=invalid');
        }else if($status){
            
            $_SESSION['flag'] = 'true';
            header('location: ../view/dashboard.php');
        }else{
            
            header('location: ../view/login.php?msg=invalid');
        }
    }
?>
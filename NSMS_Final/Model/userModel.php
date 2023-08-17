<?php
require_once('config.php');

function login($email, $password) {
    $conn = getConnection();

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $gender = mysqli_real_escape_string($conn, $gender);
    $name = mysqli_real_escape_string($conn, $name);
    //$password = md5($password);

    $sql = "SELECT * FROM regdata WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);


    if ($count == 1) {

        $row = mysqli_fetch_assoc($result);
        $gender = $row['gender'];
        $name = $row['name'];
        $email = $row['email'];
        
        $_SESSION['gender'] = $gender;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        return true;
    } else {
        return false;
    }
}


function register($name,$email,$gender,$password){
      if (empty($name) || empty($email) || empty($gender) || empty($password)) {
    return false;
  }
    $conn = getConnection();
    $sql="insert into regdata (name,email,gender,password) values('$name','$email','$gender','$password')";
    if(mysqli_query($conn,$sql)){
        return true;
    } else{
        return false;
    }
}


?>

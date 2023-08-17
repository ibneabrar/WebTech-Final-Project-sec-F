<?php
 require_once('../model/config.php');
if (!session_id()) {
    session_start();
}
 if(!isset($_SESSION['flag'])){
       header('location: login.php'); 
    }
    if (!empty($_POST['submit'])) {
      
      $password = $_POST['password'];
      $newPassword = $_POST['newPassword'];
      $confirmPassword = $_POST['confirmPassword'];
      
      if ($newPassword == $confirmPassword) {
        $email = $_SESSION['email'];

        $conn = getConnection();
         
         $query = "SELECT * FROM regdata WHERE email = '$email' AND password = '$password'";
         $result = mysqli_query($conn,$query);
         $count = mysqli_num_rows($result);
         
         if ($count>0) {
           $query = "UPDATE regdata SET password = '$newPassword' WHERE email = '$email'";
           mysqli_query($conn,$query);
           
           echo "password Updated successfully";
         }
         else {
           echo "Old Password does not match";
           }

       }
         else {
           
           echo "New pass and old pass doesnot match";
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
   <style>
    <?php include "style.css" ?>
                    .container {
            border-style: double;
            justify-content: center;
            align-items: center;
            margin-inline: 100px;
            padding: 20px;
            width: 20%;
        }
        .error {
            color: red;
        }
</style>
<script src="script.js"></script>
</head>
<body>
<header>
	<h2>National Student Management System</h2>
</header>

<section>
	<nav>
		<ul>
      <li><a href="profile.php">Go Back</a></li><br><br>      
      <br>
			<a href="../controller/logout.php"> logout </a></li> 	
		</ul>
	</nav>
     
     <article>
      <div class="container">
     	<h1>Change Password</h1>
      <form method="post" action="" onsubmit="return validateFormPass();">
      <label for="Password">Old password:</label>
      <input type="text" id="password" name="password"><br><br>
            <label for="newPassword">New password:</label>
      <input type="text" id="newPassword" name="newPassword"><br><br>
            <label for="confirmPassword">Confirm password:</label>
      <input type="text" id="confirmPassword" name="confirmPassword"><br><br>
                  <input type="submit" name="submit" value="Save">
      </form>
      </div>
     </article>
</section>

<footer>
	<p>Copyright &copy;</p>
</footer>

</body>
</html>
<?php
  require('../controller/loginCheck.php');

if (!session_id()) {
    session_start();
}
 if(!isset($_SESSION['flag'])){
       header('location: login.php'); 
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

   
table, th, td {
  border: 1px solid black;
  border-radius: 10px;
}
</style>
</head>
<body>
<header>
	<h2>National Student Management System</h2>
</header>

<section>
	<nav>
		<ul>
      <li><a href="dashboard.php">Go Back</a></li><br><br>      
			<li><a href="changeName.php">Change Profile Name</a></li>
			<li><a href="changePass.php">Change Password</a></li>
      <li><a href="changeEmail.php">Change Email</a></li>

      <br>
			<a href="../controller/logout.php"> logout </a></li> 	
		</ul>
	</nav>
     
     <article>
    <h1>Welcome to your Profile Section</h1>
    <table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Email</th> 
    <th>Gender</th>
  </tr>
   
  <tr>
    <td><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></td>
    <td></b><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></td>
    <td></b><?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : ''; ?></td>
  </tr>
</table>
</article>
<footer>
	<p>Copyright &copy;</p>
</footer>

</body>
</html>
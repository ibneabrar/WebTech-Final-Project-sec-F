<?php
    require_once('../model/config.php');
    include_once('../model/userModel.php');
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
	<title>Dashboard</title>
   <style>
    <?php include "style.css" ?>
   </style>
</head>
<body>
	
<header>
	<h2>National Student Management System</h2>
</header>

<section>
	<nav>
		<ul>
			<li><a href="profile.php">Profile</a></li>
            <li><a href="displayStudent.php">Check Students</a></li>
			<li><a href="transcript.php">Check Trasncript</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="journal.php">Journals</a></li>
            <li><a href="faq.php">FAQ</a></li>
			<a href="../controller/logout.php"> logout </a></li> 	
		</ul>
	</nav>
     
     <article>
     	<h1>Welcome to your Dashboard</h1>
     	<p> Welcome <b><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></b>! </p>
     	<p>Start Your Teaching Journey</p>

     </article>
</section>

<footer>
	<p>Copyright &copy;</p>
</footer>

</body>
</html>
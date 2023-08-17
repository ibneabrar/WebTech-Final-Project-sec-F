<?php

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
	<title>Journal</title>
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
      <li><a href="dashboard.php">Go Back</a></li><br><br>      

      <br>
			<a href="../controller/logout.php"> logout </a></li> 	
		</ul>
	</nav>
     
     <article>
     	<h1>Welcome to your Journal Section</h1>
     	<b>Journal Links:</b><br><br>
      <ul>
        <li><a href=" https://www.nature.com/"> Nature </a></li>
        <li><a href="  https://www.sciencemag.org/"> Science </a></li>
        <li><a href="  https://ieeexplore.ieee.org/Xplore/home.jsp"> IEEE Xplore</a></li>
        <li><a href="https://pubs.acs.org/">Chemical Society</a></li>
    </ul>

     </article>
</section>

<footer>
	<p>Copyright &copy;</p>
</footer>

</body>
</html>
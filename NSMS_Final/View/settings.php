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
	<title>Settings</title>
   <style>
   	* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #A9A9A9;;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #A9A9A9;;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
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
			<li><a href="changeName.php">Change Profile Name</a></li>
			<li><a href="changePass.php">Change Password</a></li>
			<li><a href="Profsettings.php">Settings</a></li>
      <li><a href="dashboard.php">Go Back</a></li>
      <br>
			<a href="../controller/logout.php"> logout </a></li> 	
		</ul>
	</nav>
     
     <article>
     	<h1></h1>
     	<b>Name:</b><br><br>
      <b>Email:</b><br><br>
      <b>Gender:</b><br><br>
     </article>
</section>

<footer>
	<p>Copyright &copy;</p>
</footer>

</body>
</html>
<?php
require_once('../model/config.php');

if (!session_id()) {
    session_start();
}

if (!isset($_SESSION['flag'])) {
    header('location: login.php');
}

if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $NewName = $_POST['NewName'];

    $email = $_SESSION['email'];

    // Get the database connection object
    $conn = getConnection();

    // Check if the new name is not empty
    if (!empty($NewName)) {

        // Check if the current name exists in the database for the given email
        $query = "SELECT * FROM regdata WHERE email = '$email' AND name = '$name'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            // Update the name in the database
            $query = "UPDATE regdata SET name = '$NewName' WHERE email = '$email'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "Name updated successfully.";
            } else {
                echo "Error updating name.";
            }
        } else {
            echo "Current name not found in the database.";
        }
    } else {
        echo "New name cannot be empty.";
    }

    // Close the database connection
    mysqli_close($conn);
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
     	<h1>Change Profile Name</h1>
      <div class = "container">
            <form method="post" action="" onsubmit="return validateFormName();">
     <label for="name">Current Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="NewName">Enter New Name:</label>
      <input type="text" id="NewName" name="NewName"><br><br>
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
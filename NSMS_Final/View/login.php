<?php
require('../controller/loginCheck.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <style>
    <?php include "style.css" ?>
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
      <li><a href="index.php">Home</a></li><br>     
      <br>
      <a href="registration.php"> Sign Up </a></li>  
    </ul>
  </nav>
     <article>
    <div class="container">
        <h1>Instructor Login</h1>
        <form method="POST" action="../controller/loginCheck.php" enctype="multipart/form-data" onsubmit="return validateFormL();">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
          <br><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
         </article>
</section>
<footer>
  <p>Copyright &copy;</p>
</footer>

</body>
</html>
</body>
</html>

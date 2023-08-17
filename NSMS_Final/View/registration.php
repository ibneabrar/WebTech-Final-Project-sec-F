<?php
require('../controller/regCheck.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
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
      <a href="login.php"> Sign In </a></li>  
    </ul>
  </nav>
     <article>
    <div class="container">
        <p><span class="error">* required field</span></p>
        <h1>Instructor Registration</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" onsubmit="return validateFormR();">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br><br>
           
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <br><br>
            
            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
             <br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            </span><br><br>
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword">
            <br><br>            
            <input type="submit" name="submit" value="Sign up">        
        </form>
    </div>
         </article>
</section>
<footer>
  <p>Copyright &copy;</p>
</footer>

</body>
</html>

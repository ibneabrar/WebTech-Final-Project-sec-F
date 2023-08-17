<?php
include_once('../model/config.php');
session_start();
if(!isset($_SESSION['flag'])){
       header('location: login.php');
       exit(); 
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Students</title>
     <style><?php include "style.css" ?></style>
      <script>
  
function showStudent(str){
  if(str == ""){
    document.getElementById("stHint").innerHTML = "";
     return ;
  } else {
     var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
         document.getElementById("stHint").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET","../controller/studentCheck.php?q=" +str,true);
  xmlhttp.send();
  }
}
</script>

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
       <h1>Student Details</h1>
 <form>
  <select name="q" onchange="showStudent(this.value)">
      <option value="">Select Students: </option>
      <option value="1">All Students</option>
    </select>
  </form>
         <br>
    <div id="stHint"><b>Display Students :</b></div>
     </article>
</section>
<footer>
  <p>Copyright &copy;</p>
</footer>

</body>
</html>

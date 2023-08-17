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
    <title>Library</title>
     <style><?php include "style.css" ?></style>
      <script>
  
function showBook(str){
  if(str == ""){
    document.getElementById("bookHint").innerHTML = "";
     return ;
  } else {
     var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
         document.getElementById("bookHint").innerHTML = this.responseText;
       }
    };
    xmlhttp.open("GET","../controller/libraryCheck.php?q=" +str,true);
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
       <h1>Search your books</h1>
 <form>
  <select name="books" onchange="showBook(this.value)">
      <option value="">Select Books: </option>
      <option value="1">Educated</option>
      <option value="2">To Kill a Mockingbird </option>
      <option value="3">Introduction to Electrodynamics</option>
      <option value="4">They Feynman Lectures on Physics</option>
      <option value="5">General Relativity</option>
    </select>
  </form>
         <br>
    <div id="bookHint"><b>Your Books :</b></div>
     </article>
</section>
<footer>
  <p>Copyright &copy;</p>
</footer>

</body>
</html>

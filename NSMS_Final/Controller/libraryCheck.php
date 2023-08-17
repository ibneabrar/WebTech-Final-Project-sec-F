<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
}

table, th, td {
  border: 1px solid black;
  border-radius: 10px;
}


</style>
</head>
<body>

    <?php

session_start();
if(!isset($_SESSION['flag'])){
       header('location: login.php'); 
    }

$q = isset($_GET['q']) ? intval($_GET['q']) : 0;
if ($q !== 0) {
 
    $conn = mysqli_connect('localhost','root','');
if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}
   
   mysqli_select_db($conn,"nsms");
   $sql = "SELECT * FROM library WHERE id = '".$q."'";
   $result = mysqli_query($conn,$sql);

   echo 
   "<table>
   <tr>
   <th>Book Name</th>
   <th>Author Name</th>
   <th>Book Link</th>
   </tr>";
 while ($row = mysqli_fetch_array($result)) {
       echo "<tr>";
       echo "<td>" . $row['bookName']."</td>";
       echo "<td>" . $row['authorName']."</td>";
       echo "<td>" . $row['bookLink']."</td>";
       echo "</tr>";
   }
   echo "</tables>";
   mysqli_close($conn);
 }
   ?>
   


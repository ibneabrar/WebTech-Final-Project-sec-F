<!DOCTYPE html>
<html>
<head>
<style>
    <?php include "style.css" ?>
</style>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['flag'])) {
    header('location: login.php');
}

$q = isset($_GET['q']) ? intval($_GET['q']) : 0;
if ($q !== 0) {
    $conn = mysqli_connect('localhost', 'root', '');
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    mysqli_select_db($conn, "nsms");
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    echo "<table>
        <tr>
        <th>Student Name</th>
        <th>Student Age</th>
        <th>Student Gender</th>
        <th>Student Class</th>
        </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['stName'] . "</td>";
        echo "<td>" . $row['stAge'] . "</td>";
        echo "<td>" . $row['stGender'] . "</td>";
        echo "<td>" . $row['stClass'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
} else {
    echo "Please select an option.";
}
?>

</body>
</html>

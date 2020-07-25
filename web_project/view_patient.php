<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
 <title>Table with database</title>
 <h1 aling=center>Results</h1>
 <style>
  table {
   align = center;
   border-collapse: collapse;
   width: 80%;
   color: #000;
   font-family: monospace;
   font-size: 15px;
   text-align: left;
     } 
  th {
   background-color: #ddd;
   color: black;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table align='center' width='600'  cellpadding='5px' cellspacing='5px' border='#000 solid 3px' style='border:#ddd solid 5px;' id='tabe'>
 <tr>
  <th>Id</th> 
  <th>Name</th>  
  <th>Blood Group</th>
  <th>Password</th> 
  <th>Age</th> 
  <th>Contact Number</th>
  <th>Address</th> 
  <th>Date of Birth</th> 
  <th>Sex</th>
  <th>Comments</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $id = $_SESSION['id'];
  $sql = "SELECT id, name, blood_group,pass,age,contact_no,address,birth_date,sex,description FROM patient where id = $id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["blood_group"]. "</td><td>" . $row["pass"]. "</td><td>" . $row["age"] . "</td><td>" . $row["contact_no"] . "</td><td>" . $row["address"]. "</td><td>" . $row["birth_date"] . "</td><td>" . $row["sex"]. "</td><td>" . $row["description"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
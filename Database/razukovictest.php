<!DOCTYPE html>
<html>
<head>
<title>APECE  attendance management system</title>
</head>
<body>

<h1 style="font-size:20px; color:blue; text-align:center" >Applied Physics, Electronics and Communication Engineering</h1>  
<h1 style="font-size:20px; text-align:center; color:blue" >University of Chittagong</h1>  
</body>
</html>
<?php get_header(); ?>
  <body>

<?php
$servername = "localhost";
$username = "id1303442_wp_55bd5273f841065b84fdc8ac423cc9fe";
$password = "c7aeae161ac5e9e0a5a0a5ebdd183bdff0a2b5c9";
$dbname = "id1303442_wp_55bd5273f841065b84fdc8ac423cc9fe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
if($conn)
{
	echo "Shaem Successful"."<br>";
}
else 
{
	echo "Shaem Faile"."<br>";
}

$sql = "SELECT id, name, template, date, mobilenumber FROM attendance ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
//
//<html>
<body>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>

  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>
</body>
//</html>
//
    while($row = mysqli_fetch_assoc($result)) {
        echo  "ID: " . $row["id"]."Name: " . $row["name"]."Template No :" .$row["template"]."Mobile No : " .$row["mobilenumber"] ."Date :" .$row["date"]  ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


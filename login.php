<?php
$db = mysqli_connect('localhost','root','','blood');
if ($db) 
{
    // echo 'conncteddddddddddddd';
} else 
{
    // echo 'not connected';
}
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password' ";

$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
// echo $count .'hhhhhhhhhh' ;
if ($count != 0) {
    // echo json_encode('error') ;
http_response_code(200);
} else {
    http_response_code(404);
}


















// Replace the values in the following variables with your own MySQL credentials
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "blood";

// // Establish a connection to MySQL server using PDO
// try {
//     $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
//     // echo "Connected to MySQL database";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// $sql = "SELECT * FROM donors";
// $stmt = $connection->prepare($sql);
// $stmt ->execute();
// $bloodd = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($bloodd);
 





 
// // Database connection details
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "blood";

// // Connect to the database
// $conn = mysqli_connect($host, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Get the data to insert from the Flutter app
 
//  print_r($_POST);
 

// $name = $_POST['name'];
// $email = $_POST['email'];
// $id = 2;
// // Prepare the SQL query
// $sql = "INSERT INTO donors (id , name, email) VALUES ('$id' , '$name', '$email')";
// $id +=1;
// // $stmt = $connection->prepare($sql);
// // $stmt ->execute();

// // Execute the query
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// // Close the database connection
// // mysqli_close($conn);
// ?>

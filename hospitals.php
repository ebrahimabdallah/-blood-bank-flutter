<?php
$db = mysqli_connect('localhost','root','','blood');
if ($db) 
{
    // echo 'conncteddddddddddddd';
} else 
{
    // echo 'not connected';
}
// $city = $_POST['city'];
// $hospital = $_POST['hospital'];
// $blood_type = $_POST['blood_type'];
// $date = $_POST['date'];

$sql = "SELECT hospital FROM hospitals WHERE city = 'Mansoura' ";
$result = mysqli_query($db,$sql);
$Mansoura_hospitals = array_column(mysqli_fetch_all($result),0);

$sql = "SELECT hospital FROM hospitals WHERE city = 'Cairo' ";
$result = mysqli_query($db,$sql);
$Cairo_hospitals = array_column(mysqli_fetch_all($result),0);

$sql = "SELECT hospital FROM hospitals WHERE city = 'Port said' ";
$result = mysqli_query($db,$sql);
$port_hospitals = array_column(mysqli_fetch_all($result),0);

$sql = "SELECT hospital FROM hospitals WHERE city = 'Alexandria' ";
$result = mysqli_query($db,$sql);
$Alexandria_hospitals = array_column(mysqli_fetch_all($result),0);

// print_r($r);
// $count1 = mysqli_num_rows($result);

// $my_integer = $count;

// print_r(($Cairo_hospitals));
// $my_array = $Mansoura_hospitals;
// $my_array = array($Mansoura_hospitals,$Cairo_hospitals,$Alexandria_hospitals,$port_hospitals);
$my_array = array($Cairo_hospitals,$Alexandria_hospitals,$Mansoura_hospitals,$port_hospitals);
$encoded_array = json_encode($my_array);

header('Content-Type: application/json');
echo $encoded_array;
// if ($count ==1 ) {
// http_response_code(200);

//     // echo 'error';
// } else {
//     http_response_code(404);
    
    
//    $insert = " INSERT into 
//                         donations(city,hospital,blood_type,date) 
//                 VALUES
//             ('$city' ,'$hospital' , '$blood_type' , '$date' )";

//     $query = mysqli_query($db,$insert);
// }













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

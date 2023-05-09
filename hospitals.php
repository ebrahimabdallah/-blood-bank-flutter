<?php
$db = mysqli_connect('localhost','root','','blood');
if ($db) 
{
    // echo 'conncteddddddddddddd';
} else 
{
    // echo 'not connected';
}


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


$my_array = array($Cairo_hospitals,$Alexandria_hospitals,$Mansoura_hospitals,$port_hospitals);
$encoded_array = json_encode($my_array);

header('Content-Type: application/json');
echo $encoded_array;
// if ($count ==1 ) {
// http_response_code(200);

//     // echo 'error';
// } else {
//     http_response_code(404);
    
    
















?>

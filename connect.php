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
$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE name = '$username' ";

$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
// echo $count .'hhhhhhhhhh' ;
if ($count != 0) {
    echo json_encode('error') ;
http_response_code(404);
    // echo 'error';
} else {
    http_response_code(200);
    
    if($count ==0)
{    $insert = "INSERT into users(name,password,email) VALUES('$username' ,'$password' , '$email' )";

    $query = mysqli_query($db,$insert);
    if($query) 
    {
        echo json_encode('success');
    }
    $count +=1;

}
}



?>







<?php
$db = mysqli_connect('localhost','root','','blood');
if ($db) 
{
    // echo 'conncteddddddddddddd';
} else 
{
    // echo 'not connected';
}
$city = $_POST['city'];
$hospital = $_POST['hospital'];
$blood_type = $_POST['blood_type'];
$amount = $_POST['amount'];
$date = $_POST['date'];



    
   $insert = " INSERT into 
                        requeests(city,hospital,blood_type,amount,date) 
                VALUES
            ('$city' ,'$hospital' , '$blood_type' , '$amount' ,  '$date' )";

    $query = mysqli_query($db,$insert); //execute the query



$delete = "DELETE from donations WHERE blood_type = '$blood_type' LIMIT $amount  " ;
$query = mysqli_query($db,$delete);





 ?>

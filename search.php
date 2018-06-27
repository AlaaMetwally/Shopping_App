<?php

$query=$_POST['query'];
include ("connect.php");
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$sql = "SELECT * FROM product WHERE name like '%".$query."%' "; // % ay 7aga 2blha aw b3dha

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count<1)
{
    echo json_encode([]); //conversion php to javasript array to string
    exit;
}
echo mysqli_error($conn);

$result_arr=[];
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    array_push($result_arr,$row);//el natayg elly tl3aly mn el search
}


$result_arr=json_encode($result_arr);

echo $result_arr;

?>
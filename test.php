<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"localisation");

$qry="select * from position";

$raw=mysqli_query($conn,$qry);
while($res=mysqli_fetch_array($raw))
{
	$data[]=$res;
}
//print(json_encode($data));
echo json_encode(array("positions" => $data));
?>
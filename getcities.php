<?php
include_once('Connection.php');
$arr=explode('~',$_REQUEST['code']);
$code=$arr[0];
$region=$arr[1];
//echo $code;die;
$query1="select country,code from regions where ID='$code'";
$result1=$mysqli->query($query1);
$row2 = $result1->fetch_assoc();
$code=$row2['country'];
$region=$row2['code'];
$query="select concat(ID,'~',name) id,name from cities where country='$code' and region='$region'";
$result=$mysqli->query($query);
$string='';
while($row = $result->fetch_assoc()){
	$id=$row['id'];
	$name=$row['name'];
   $string.="<option value='$id'>$name</option>";
}
echo $string;die;
?>
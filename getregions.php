<?php
include_once('Connection.php');
$code=$_REQUEST['code'];
$query="select concat(ID,'~',name) id,name from regions where country='$code' ORDER BY  `regions`.`name` ASC";
$result=$mysqli->query($query);
$string='';
while($row = $result->fetch_assoc()){
	$id=$row['id'];
	$name=$row['name'];
   $string.="<option value='$id'>$name</option>";
}
echo $string;die;
?>
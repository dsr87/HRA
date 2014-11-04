<?php
include("Connection.php");

session_start();
$_SESSION['MAXPICID']=$_SESSION['MAXPICID']+1;
$counter=$_SESSION['MAXPICID'];
$default=0;
if($counter==1)
{$default=1;}
$currentPropertyID=$_SESSION['currentPropertyID'];
if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST")
{
	$file_name		= strip_tags($_FILES['upload_file']['name']);
	$file_id 		= strip_tags($_POST['upload_file_ids']);
	$file_size 		= $_FILES['upload_file']['size'];
	$files_path		= 'uploaded_files/';
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);
		$rand=rand(1001, 9999);

	$file_location 	= $files_path .time().$rand.".".$ext;
	$file_name=time().$rand.".".$ext;
	
	if(move_uploaded_file(strip_tags($_FILES['upload_file']['tmp_name']), $file_location)){
	$insert_row = $mysqli->query("INSERT INTO `$databaseName`.`Step3Pics` (`id`, `property`, `picName`, `default`, `propertyPicNo`, `active`, `timeStamp`, `size`) VALUES (NULL, '$currentPropertyID', '$file_name', '$default', '$counter', '1', CURRENT_TIMESTAMP,'$file_size')");
		header("Location: step4.php");		
	}else{
		echo 'system_error';
	}
	
	// To create thumbnail
	$n_width=100;          // Fix the width of the thumb nail images
	$n_height=100;         // Fix the height of the thumb nail imaage
	$add="uploaded_files/".$file_name;
	$tsrc="uploaded_filesT/".$file_name;   // Path where thumb nail image will be stored
	//echo $tsrc;
	/* if (!($_FILES[upload_file][type] =="image/jpeg" OR $_FILES[upload_file][type]=="image/gif")){echo "Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
	 exit;} */
	/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////
	if (@$_FILES[upload_file][type]=="image/gif")
	{
		$im=ImageCreateFromGIF($add);
		$width=ImageSx($im);              // Original picture width is stored
		$height=ImageSy($im);                  // Original picture height is stored
		$newimage=imagecreatetruecolor($n_width,$n_height);
		imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
		if (function_exists("imagegif")) {
			Header("Content-type: image/gif");
			ImageGIF($newimage,$tsrc);
		}
		elseif (function_exists("imagejpeg")) {
			Header("Content-type: image/jpeg");
			ImageJPEG($newimage,$tsrc);
		}
		chmod("$tsrc",0777);
	}////////// end of gif file thumb nail creation//////////
	
	////////////// starting of JPG thumb nail creation//////////
	if($_FILES[upload_file][type]=="image/jpeg"){
		$im=ImageCreateFromJPEG($add);
		$width=ImageSx($im);              // Original picture width is stored
		$height=ImageSy($im);             // Original picture height is stored
		$newimage=imagecreatetruecolor($n_width,$n_height);
		imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
		ImageJpeg($newimage,$tsrc);
		chmod("$tsrc",0777);
	}
	
	if($_FILES[upload_file][type]=="image/png"){
		$im=imagecreatefrompng($add);
		$width=ImageSx($im);              // Original picture width is stored
		$height=ImageSy($im);             // Original picture height is stored
		$newimage=imagecreatetruecolor($n_width,$n_height);
		imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
		imagepng($newimage,$tsrc);
		chmod("$tsrc",0777);
	}
	
	}
	if($default==1)
	{
		$insert_row = $mysqli->query("UPDATE `Step1Location` SET `thumbImage`='$tsrc'  WHERE `Step1Location`.`ID` ='$currentPropertyID'");
		

	}
	// insertion into step 1 successful...present step 2
	
	?>
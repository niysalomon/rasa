<form action="" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>
<?php 
$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

$success= -1;

$descript= 0;

if (empty($description))
{
$descript= 1;
}

if (isset($name)) {

$path= 'img/vids/';

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}


//Block 1
include('connection.php');

//Block 4
if((!empty($description)) && ($success == 1)){
mysql_query("INSERT INTO vid(description, filename, fileextension)
VALUES ('$description', '$name', '$fileextension')");
}


//Block 5


?>





<?php 
$conn = mysql_connect('localhost','db_user','db_password') or die("CONNECTION PROBLEM");
mysql_select_db('homepage');
$sql= "SELECT * FROM images WHERE type='image'";
$query = mysql_query($sql,$conn) or die(mysql_error());
$no = mysql_fetch_assoc($query)['number'];
$no = $no + 1 ;




$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = '/var/www/html/welcometomyworld/images';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath =  $storeFolder . $ds;  //4
    
    $filename = "image".$no.".jpg";
    
    $targetFile =  $targetPath.$filename;  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
    $sql= "UPDATE images SET number=$no WHERE type='image'";
    
    $query = mysql_query($sql,$conn) or die(mysql_error());
}

mysql_close($conn);
?>     

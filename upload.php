<?php 
 $temp = explode(".", $_FILES["file"]["name"]);
 $extension = end($temp);
 if ((($extension == "jpg") || ($extension == "jpeg") || ($extension == "png") || ($extension == "bmp")) && $_FILES["file"]["size"] < 20000000) {

 			  move_uploaded_file($_FILES["file"]["tmp_name"],
      				"images/" .'id$' .$_FILES["file"]["name"]);
 			  echo "images/" .'id$' .$_FILES["file"]["name"];

 }


?>
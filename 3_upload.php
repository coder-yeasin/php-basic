<?php
     include'head.php';
?>




<?php
if(isset($_FILES['image'])){
   $filename = $_FILES['image']['name'];
   $filetmp = $_FILES['image']['tmp_name'];
   move_uploaded_file($filetmp, 'images/'. $filename);
   echo "image uploded successful"; 
} else{
	echo "Insart your images";
}
?>

     <form action="" method="POST" enctype="multipart/form-data">
       <input type="file" name="image"/>
       <input type="submit" name="" value="Submit"/>
     </form> 














     <?php
     include'footer.php';
?>
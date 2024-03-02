<?php
     include'head.php';
     session_start();
?>

<?php
     //PHP session
   
     $_SESSION['user']     = " YEASIN";
     $_SESSION['password']  = "123";

     echo "Usser name is" . $_SESSION['user'] . "<br/>";
     // session_unset();
     echo "Password is" .  $_SESSION['password'];
     session_destroy();

     echo "<br/>";

?>     
		<?php
		// cookie remove
		   setcookie('visited', '', time() -3600);
		?>

<?php
    //PHP cookies
    //setcookie(name, value, expair, path, domain, secure, httponly)

      if (!isset($_COOKIE['visited'])) {
	      setcookie("visited", "1", time()+86400, "/") or die("Could not set cookie !");
	      echo "This is youe first visit website";
      } else{
      	echo "you are old visit this website. ";
      }
      echo '<br/>';

?>
  
			<?php
			  // cookie remove
			  echo 'Cookies deleted';
			?>

			<?php
			  echo '<br/>';
			?>


  <?php
    $str    = "<h2> I am Yeaasin </h2>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;

  ?>

           
			<?php
			  echo '<br/>';
			?>
 
  <?php
    $str    = "yeasin@gmail.com";
    if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
    	echo " $str It is right";
    } else{ 
    	echo " $str It is not valid";
    }
  
  ?>
			<?php
			  echo '<br/>';
			?>

<?PHP
   $a = 100;
   $b = 1;
   $c = 200;

   if (filter_var($a, FILTER_VALIDATE_INT, array("options"  => array( 'min_range' => $a, 'max_range' => $c)))) {
   	  echo " It is correct advance filter";
   } else{
   	echo " It is not correct advance filter";
   }

?>

<?php
   if (isset($_POST['name'])) {
      global $yeasin; 
   	  $yeasin = $_POST['name'];
   	  // strtoupper,  strtolower, ucfirst, ucwords
   	  // trim
   	  //remove ....  trim($yeasin, ".");
   	  echo trim($yeasin, " . ");
   }
?>


<form action="" method="post"/>
	Name: <input type="text" name="name" value="<?php global $yeasin;  echo $yeasin; ?>"/>
	<input type="submit" value="Submit"/>
</form>






<?php
     include'footer.php';
?>

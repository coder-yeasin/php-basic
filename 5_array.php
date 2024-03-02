<?php
     include'head.php';
?>

<?php
  $car = array("Volvo", "Tyota", "BMW");
   $length = count($car);
   
   for($i=0; $i<$length; $i++){
   	echo $car[$i]."<br/>";
   }

?>
<?php  "<br/>"?>

<?php

   $ages = array(
                  "Yeasin" => "22",
                  "Jakiya" => "12",
                  "Shammi" => "13"
   );
      foreach($ages as $name => $age){
          echo "Name: ". $name . ", Age ". $age ."<br/>";
      }

?>
  <hr/>
<?php
  $life = array(
                 array("Yeasin", "Student", "22"),
                 array("Shammi", "Student", "13"),
                 array("Jakiya", "Student", "12")
  );


     $length = count($life);
     for($i=0; $i<$length; $i++){
   	echo  $life[$i][0];
   	echo " ". $life[$i][1];
   	echo " ". $life[$i][2] . "<br/>";
   }   
?>


<?php  "<br/>"?>
  <hr/>


<?php
$life= array(
       array(
            "Name"         => "Yeasin",
            "Occupation"   => "Student",
            "Age"          => "22",
            "Nationality"  => "Bangladesh"
       ),
       array(
            "Name"         => "Shammi",
            "Occupation"   => "Student",
            "Age"          => "13",
            "Nationality"  => "Bangladesh"
       ),
       array(
            "Name"         => "Jakiya",
            "Occupation"   => "Student",
            "Age"          => "12",
            "Nationality"  => "Bangladesh"
       )       
  );

     $name = array_column($life, "Name");
     print("<pre>");
     print_r($name); 
     print("</pre>");
?>


<?php  "<br/>"?>  <hr/>

 <?php
     $name = array("Yeasin", "Shammi", "Jakiya");
     $age = array("22", "13", "12");

     $combine = array_combine($name, $age);

     print("<pre>");
     print_r($combine); 
     print("</pre>");
 ?>

<?php  "<br/>"?>  <hr/>

<?php
     $name = array("Yeasin", "Shammi", "Jakiya","Yeasin","Yeasin","Shammi","Shammi",);
     $age = array("22", "13", "12","22","22","13","13",);


     print("<pre>");
     print_r(array_count_values($name)); 
     print("</pre>");
?>
<?php  "<br/>"?>  <hr/>


<?php
 
   $play = array(
              "a" => "red",
              "b" => "blue",
              "c" => "whith"
   );
   $one = array(
              "a" => "red",
              "b" => "blue",
              "f" => "black"
   );

   $two = array(
              "a" => "red",
              "b" => "orange",
              "c" => "green"
   );   

$result = array_diff_assoc($play, $one, $two);

print("<pre>");
print_r($result);
print("</pre>");


?>


<?php  "<br/>"?>  <hr/>


<?php
 
   $play2 = array(
              "a" => "red",
              "b" => "blue",
              "c" => "whith"
   );
   $one2 = array(
              "a" => "blue",
              "g" => "blue",
              "f" => "white"
   );
   // $two = array(
   //            "a" => "red",
   //            "b" => "orange",
   //            "c" => "green"
   // );  
 

$result2 = array_diff_key($play2, $one2);

print("<pre>");
print_r($result2);
print("</pre>");


?>


<?php  "<br/>"?>  <hr/>


<?php
 
   $play = array(
              "a" => "red",
              "b" => "blue",
              "c" => "white"
   );
   $one = array(
              "a" => "blue",
              "g" => "yellow",
              "f" => "white"
   );

$result = array_intersect($play, $one);

print("<pre>");
print_r($result);
print("</pre>");


?>

<?php
 
   $play = array(
              "a" => "red",
              "b" => "blue",
              "c" => "white"
   );
   $one = array(
              "b" => "blue",
              "g" => "yellow",
              "f" => "white"
   );

$result = array_intersect_assoc($play, $one);

print("<pre>");
print_r($result);
print("</pre>");


?>

<?php  "<br/>"?>  <hr/>
  

<?php

   function myname($yeasin){
        $shammi = strtoupper($yeasin);
        return $shammi;
   }
 
   $life = array(
              "name" => "Yeasin",
              "age" => "22"
             
   );
$result = array_map("myname", $life);

print("<pre>");
print_r($result);
print("</pre>");


?>




<?php
  
  $ar_one = array("red", "black");
  $ar_two = array("green", "blue");

$result = array_merge($ar_one, $ar_two);

print("<pre>");
print_r($result);
print("</pre>");
?>

<?php  "<br/>"?>  <hr/>


<?php
  
  $ar_one = array(
                  "a" => "red",
                  "b" => "green"
                    );
  $ar_two = array(
                  "c" => "red",
                  "b" => "yellow"
                    );

$result = array_merge($ar_one, $ar_two);

print("<pre>");
print_r($result);
print("</pre>");
?>


<?php  "<br/>"?>  <hr/>


<?php
  
  $ar_one = array(
                       "reds",
                       "green"
                    );
  $ar_two = array(

                 "yellow",
                 "black"
                    );
  array_merge($ar_one,  $ar_two  );

print("<pre>");
print_r($ar_one);
print("</pre>");
print("<pre>");
print_r($ar_two);
print("</pre>");

?>




<?php  "<br/>"?>  <hr/>
<?php
  
  $ar_one = array(
                  "red",
                  "green"
                    );
  $ar_two = array(
                  "red",
                  "green"
                    );

$result = array_pad($ar_one, 5, "black");

print("<pre>");
print_r($result);
print("</pre>");
?>


<?php  "<br/>"?>  <hr/>
<?php
  
  $ar_one = array(
                 "a" => "red",
                 "b" => "green"
                    );

  $ar_two = array(   
                 "b" => "yellow",  
                 "black"
                    );

$result = array_replace($ar_one,  $ar_two);

print("<pre>");
print_r($result);
print("</pre>");
?> 



<?php
   $play = array(
              "a" => "red",
              "b" => "blue",
              "c" => "white"
   );

  if (isset($_POST['nm'])) {
  	  global  $yes;
  	  $yes = $_POST['nm'];
  	  $result = array_search($yes, $play);
  	  echo "you -> $yes and -> $result ";
  }
?>


<form action="" method="post"  >
	<input type="text" name="nm" value="<?php global $yes; echo $yes ?>" />
	<input type="submit" name="btn" value="Submit" />
</form>


<?php
   $nm = array(12, 2, 40);
   $result = array_sum($nm );
   echo "Total: ". $result;
?>

<?php
    
    function myfunction($name, $color){
          echo "I'm $name and my value is $color <br/>";
    }

   $yeasin = array(
           "a" => "RED",
           "b" => "YELLOW",
           "c" => "GREEN"
   );
   array_walk($yeasin, "myfunction");
?>

<?php  "<br/>"?>  <hr/>
<?php
            $a = "Coder";
            $b = "Actor";
            $c = "Doctor";

            $result = compact("a", "b", "c");
            print("<pre>");
            print_r($result);
            print("</pre>");
            //echo $result;
?>

<?php  "<br/>"?>  <hr/>


<?php
  $namecheck = array("Yeasin", "Red", "Green", "oeange", "Blue");
  if (isset($_POST['ussername'])) {
    $chack = $_POST['ussername'];

    if (in_array($chack, $namecheck)) {
      echo "$chack Exit";
    }else{
      echo "$chack NOT Exit";
    }
  }
?>

<form action="" method="post" >
  <input type="text" name="ussername">
  <input type="submit" name="Submit">
</form>


<?php  "<br/>"?>  <hr/>










<?php
     include'footer.php';
?>

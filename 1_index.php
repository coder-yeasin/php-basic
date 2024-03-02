<?php
   include'head.php';
?>



<!-- ======================================================================== -->




      
    1.String (Simple word)
    2.Integer (Integer Number)
    3.Float (Decimal Number)
    4.Boolean (True/False)
    5.Arry
    6.Object
    7.Null
    8.Resource 
    <br/>
    <hr/> 
    2.Integer<hr/><br/>

    <?php 
          $a = array("Yeasin" , "Jakiya" , "Shammi");
          var_dump($a)
    ?>


<?php 
       
       class Student {
        function department(){
          return "Math";
        }

        function details(){
         echo $this->department();

        }
       }
           
      $stpa = new student;
      $stpa->details();
?>
    

    
    <?php
    
    class teacher {
      function department () {
         return "Science";
      }
      function details(){
         echo $this->department();
      }
    }

    $st = new teacher;
    $st->details();
     
    ?>
                  <?php
                     class Student_2 {
                      function document(){
                        return "Math+Science";
                      }
                        function details(){
                          echo $this-> document();
                        }
                     }

                     $st = new student_2;
                     $st->details();
                  ?>

<br/>
<hr/>
   
<?php 
   $x = "Yeasin jumadder ";
   echo str_replace("Yeasin" , "Php" , $x);
?>
<br/>
<hr/>
   <h4>Define</h4>
<?php 
   define ("VALUE" , "I am Yeasin Jumadder Learn PHP" , true);
    function Student(){
      return value;
    }
   echo Student();
?>

<br/>
<hr/>
<h4>Operators</h4>
   1. Arithmetic Operators
   <hr/>
<?php 
//1. Arithmetic Operators  +, -, *, /
   $x = 9;
   $y = 4;

   echo $x+$y; echo "<br/>";
   echo $x-$y; echo "<br/>";
   echo $x*$y; echo "<br/>";
   echo $x/$y; echo "<br/>";
   echo $x%$y; echo "<br/>";

?>

   2. Assignment Operators
   <hr/>
<?php 
//2. Assignment Operators =, +=, -=, *=, /=, %= 
   $x = 10;
   $x += 4;
   echo $x; echo "<br/>";

   $y = 30;
   $y -= 10;
   echo $y;
    echo "<br/>";

  $a = 10;
  $a *= 4;
  echo $a;
    echo "<br/>";
$b = 30;
$b /= 9;
echo $b;
 echo "<br/>";

 $c = 40;
 $c %= 9;
 echo $c;
  echo "<br/>";
?>

3.Comparison Operators
<hr/>

<?php
//3.Comparison operators ==, ===, >=, <=, !=, !==,
  $x = 10;
  $y = "10";
  if( $x == $y){
         echo  "You Are right";
  }
 echo "<br/>";
 ?>


4.Increment/Decrement Operators 
<hr/>

<?php
//4.Increment/Decrement Operators ++, --
    
     $x = 10;
     echo ++$x; 
     echo "<br/>";
     $y = 10;
     echo --$y;

echo "<br/>";

     /*$x = 10;
     echo $x++;
     echo $x;*/
 
 ?>



5.Logical Operators
<hr/>

<?php
//5.Logical operators and/&&, or/||, xor 
  
   $a = 40;
   $b = 20;

   if($a == 40 && $b == 20 ){
       echo "Correct You Are";
   } 
   else{
    echo "Worng";
   };

 echo "<br/>";

   $age = 18;
   $tk = 1000;

   if($age >= 18 and $tk >= 10000 ){
       echo "Allow Bangladesh";
   } 
   else{
    echo "Not Allow Bangladesh";
   };

 echo "<br/>";
 ?>
 
6. String Operators
<hr/>

<?php
//6. String Operators  ., .=
 
 $x = "Yeasin";
 $y = " Jumadder";
 $z = $x . $y;
 echo $z;

 echo "<br/>";

 $a = "Yeasin";
 $b = " Jumadder";
 $a .= $b;
 echo $a;

 echo "<br/>";
 ?>


7. Array Operators
<hr/>

<?php
// Array Operators  =>
    $x = array(
      "a" => "Dhaka",
      "b" => "Narail"
    );
    $y = array(
      "c" => "comilla",
      "d" => "Rajshahi"
    );
    var_dump($x+$y);
 echo "<br/>";
 ?>

PHP conditional Statment
<hr/>

<?php
//PHP conditional Statment  if, else, ifelse
 
  $tk = 30;
  if($tk >= 5){
    echo "You get a pen";
  }
  elseif($tk >= 10){
    echo "You get a note book";
  }
  elseif($tk >= 20){
    echo "You get 4 shingra";
  }
  else{
    echo " You don't get any producat";
  };

 echo "<br/>";
 ?>



PHP Switch statement
<hr/>

<?php
//Switch statement   
$coading = "Java";
switch($coading){
   case "php":
   echo "I Love PHP";
   break;

   case "Java":
   echo "I Love Java";
   break;

   case "phyton":
   echo "I Love phyton";
   break;

   default:
   echo "I Love Programing";
}
 
 echo "<br/>";
 ?>


PHP While loop
<hr/>

<?php
//PHP While loop while, do while
 $student = 1;
 while($student <= 15){
  echo "  I Love Shammi";
  $student++;
 }
   
  $p= 20;
  do{
    echo "  I love shammi";
    $p++;
  }
  while( $p <= 10);

 echo "<br/>";
 ?>


PHP For loop
<hr/>

<?php
//PHP For loop
   for($x = 0; $x <= 10; $x++){
    echo " I love Shammi";
   }
 echo "<br/>";
 ?>


foreach loop
<hr/>

<?php
//foreach loop
  $colors = array( "green" , "blue" , "red");
  foreach($colors as $yeasin){
    echo "$yeasin <br/>";
  }
 echo "<br/>";
 ?>



<!-- 
3.Comparison Operators
<hr/>

<?php
//3.Comparison operators ==, ===, >=, <=, !=, !==,
 
 echo "<br/>";
 ?>
 -->



PHP array
<hr/>

<?php
//PHP array   Index Array
   $yeasin = array( 5, 9, 10, 18);
   $y = count($yeasin);

   for( $p = 0; $p<$y; $p++){
    echo $yeasin[$p];
    echo "<br/>";
   };


   $jakiya = array( 9, 10, 44, 88);
     $yeasin_jumadder = count($jakiya);
     for( $omalia = 0; $omalia <$yeasin_jumadder; $omalia++){
      echo $jakiya[$omalia];
      echo "<br/>";
     };

   // $x[0] = 5;
   // $x[1] = 9;
   // $x[2] = 16;
   // $x[3] = 40;
   // echo $x[3] ;
// -------------------------------------------------

  $age = array(
    "korim" => "19", 
    "kamal" => "13", 
    "roman" => "33");

         foreach( $age as $x => $value){
          echo " Name: $x". "  Age: $value" . "<br/>";
         };
// -------------------------------------------------
   $cars = array(
          array("BMW", 16, "Killomiter" ),
          array("Toyota", 36, "Killomiter" ),
          array("Daimler", 26, "Killomiter" )
   );
       echo $cars[1][0];
       echo "<br/>";
// -------------------------------------------------
      $car = array(
          array("BMW", 16, "Killomiter" ),
          array("Toyota", 36, "Killomiter" ),
          array("Daimler", 26, "Killomiter" )
   );
       echo "<p>". "Feture Of car" ."</p>";
       for($row = 0; $row <3; $row++){
        
        echo "<ul>";
        for($col = 0; $col <3; $col++){
       
          echo "<li>" . $car[$row][$col]."<br/>" . "</li>"; 
        };
        echo "</ul>";
       };
// -------------------------------------------------
//sort array- sort, rsort
       //$myname = array("Yeasin", "Liza", "Amena", "Alif" );
       $myname = array(24, 6, 46, 9, 12 );
       rsort($myname);
       $length = count($myname);
       for($i = 0; $i < $length; $i++){
        echo $myname[$i];
        echo "<br/>";
       };
// -------------------------------------------------
//sort array- ksort, asort
     $age = array("Zamal" => "5", "Azamal" => "12", "Rezmal" => "6", );
     ksort($age);
     $length = count($age);
     foreach($age AS $i=> $value){
      echo "My name is " . $i . " and my age " . "$value" . " `years old";
      echo "<br/>";
     }; 

 echo "<br/>";

 ?>


<?php
  
 $x = 10;
  function yeasin(){
    global $x;
    echo $x;

  };

 yeasin();

?>
<!-- ------------------------------------ -->


PHP Superglobals
<hr/>
$_GLOBALS<br/>
$_SERVER<br/>
$_RESUEST<br/>
$_POST<br/>
$_GET<br/>
$_FILE<br/>
$_ENV<br/>
$_COOKIE<br/>
$_SESSION<br/>
<hr/>


<?php
//PHP $_GLOBALS
      $x = 8;
      $y =30;
      function liza(){
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
      };
      liza();
      echo $z;
 echo "<br/>";
 
 echo $_SERVER['PHP_SELF']; echo "<br/>";
 echo $_SERVER['SERVER_NAME']; echo "<br/>";
 echo $_SERVER['SCRIPT_NAME']; echo "<br/>";
 echo $_SERVER['HTTP_USER_AGENT']; echo "<br/>"; 
 echo $_SERVER['SERVER_ADDR']; echo "<br/>";

 ?>
<!-- ----------------------------------------- -->

  PHP Superglobsls [$_REQUES & $_POST]
  <hr/>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Usser Name: <input type="text" name="ussername"> 
    <input type="submit" name="" value="submit">
  </form>

  <?PHP
    
  ?>

<!-- ====================================================== -->


<?php
   include'footer.php';
?>
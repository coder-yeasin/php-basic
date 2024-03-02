<?php
     include'head.php';
?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div>
          
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

    
 echo $_SERVER['PHP_SELF']; echo "<br/>";
 echo $_SERVER['SERVER_NAME']; echo "<br/>";
 echo $_SERVER['SCRIPT_NAME']; echo "<br/>";
 echo $_SERVER['HTTP_USER_AGENT']; echo "<br/>"; 
 echo $_SERVER['SERVER_ADDR']; echo "<br/>";

 ?> 
-- ----------------------------------------- --

   PHP Superglobsls [$_REQUES & $_POST]
  <hr/>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Usser Name: <input type="text" name="username"> 
    <input type="submit" name="" value="submit">
  </form>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
   $yeasin =  $_REQUEST['username'];
    if(empty($yeasin)){
      echo " <span style='color:red'>" . "This Usser name is empty" . "</span>";
    } else{
      echo " <span style='color: green'>" . "This Usser name submited" . "</span>";
    }
  }
  ?>


 <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     $yeasin = $_REQUEST['username'];
    if(empty($yeasin)){
      echo "worng";
    }
     else{
      echo "Rignt";
    }
   }
  ?>  
<!-- ------------------------------------- -->

<?php

  $errname = $errnam = $errmail ="";

// if(empty($name)){
//         echo " <span style='color:red'>" . "This  file is empty" . "</span>";
//       } else{
//         echo " <span style='color:green'>" . "This  file is Submited" . "</span>";
//          }; 
        
?> 

<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){

if(empty($_POST['name'])){
        $errname = "This fill is Required";
      } else{
       $name       = validate($_POST['name']);
         }; 
if(empty($_POST['number'])){
        $errnam = "This fill is Required";
      } 
         elseif(!filter_var($_POST['number'], FILTER_VALIDATE_URL)){
       $errnam = "This fill is Invalide";
  }

      else{
       $number = validate($_POST['number']);
         };

if(empty($_POST['email'])){
        $errmail = "This fill is Required";
      } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )){
        $errmail = "This fill is Invalide";

      }

       else{
       $email = validate($_POST['name']);
         };

      $name       = validate($_POST['name']);
      $number     = validate($_POST['number']); 
      $email     = validate($_POST['email']); 
      $gander     = validate($_POST['gander']);
      $passwored  = validate($_POST['passwored']);
      $submit     = validate($_POST['submit']);   
     }

     echo "Name " . $name . "<br/>";
     echo "number " . $number . "<br/>";
     echo "passwored " . $passwored . "<br/>";
     echo "gander" . $gander . "<br/>";

   function validate($data){
       $data = trim($data);
       $data = stripcslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }; 

        
  ?>

  PHP From Validition
<p style="color: red">* File is Required</p>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <table>
    <tr>
      <td><p>Name:<p/></td>
      <td><input type="text" name="name"  /> * <?php echo $errname; ?>
  </td>
    </tr>
    <tr>
      <td><p>Web:<p/></td>
      <td><input type="text" name="number" /> * <?php echo $errnam; ?> </td>
    </tr>
    <tr>
      <td><p>Email:<p/></td>
      <td><input type="text" name="email" /> * <?php echo $errmail; ?> </td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="gander" value="male" />Male</td>
      <td><input type="radio" name="gander" value="male" />Femail</td>
    </tr>
    <tr>
      <td><p>Passwored:<p/></td>
      <td><input type="passwored" name="passwored"/> *  </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="submit" /></td>
    </tr>
  </table>
</form>

PHP Date Formate:  
<?php
   echo 'Today is: ' . date('d/m/Y') . "<br/>";
   echo 'Today is: ' . date('l') . "<br/>";
   echo 'Defult Time is: ' . date('h:i:sa') . "<br/>";
   date_default_timezone_set('Asia/dhaka');
   echo 'Bangladesh Today is: ' . date('h:i:sa') . "<br/>";
   echo date_default_timezone_get(); echo '<br/>';
?>


<?php
echo readfile('text.txt');
?>

<?php
if(isset($_FILES['image'])){
   $filename = $_FILES['image']['name'];
   $filetmp = $_FILES['image']['tmp_name'];
   move_uploaded_file($filetmp, 'images/'. $filename);
   echo "image uploded successful"; 
}
?>

<!-- ====================================================== -->
     <br/>
     <br/>
     <form action="" mathod="POST" enctype="multipart/form-data">
       <input type="file" name="image"/>
       <input type="submit" name="" value="Submit"/>
     </form>     

          </div>
        </div>
      </div>
    </div>


 
<?php
     include'footer.php';
?>

   </section>


   </body>
</html>


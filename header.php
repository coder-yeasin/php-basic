<?php
   $fonts = "arial";
 ?>

<!DOCTYPE HTML>
<html>
   <header>
   	<title> php prictise</title>
   	<style type="text/css">
   		.class-1, .class-3{
             background-color: <?php echo "#000" ?>;
             color: #fff;
             text-align: center;
        	 font-family: arial;
   		}
   		.all-code{
             min-height: 500px;
             background: #ddd;
             width: 80%;
             margin: auto;
   		}
        .class-1 h1, .class-3 h1{
             padding: 14px;
        }
/*        .class-3 h1{
          position: relative;
          bottom: 0;
        }*/
        .container.class-3 {
          position: relative;
          top: 270px;
      } 
      body{
         font-family: <?php echo $fonts ?>;
      }
   	</style>
   </header>
   <body>
   	 <section class="all-code">
   	 	<div class="container class-1">
   	 		<div class="row">
   	 			<div class="col-md-12">
   	 				<h1><?php  echo "Practise End PHP";?></h1>
   	 			</div>
   	 		</div>
   	 	</div>
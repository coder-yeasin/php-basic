<?php
     include'head.php';
?>

<?php
	if(isset($_POST['submit'])){
		global $coder;
		$coder = $_POST['coder'];
		$shownm = $_POST['name']; 
		$gender = $_POST['gender'];
		$dep = $_POST['dep'];   
	
?>

<?php  
/*
	if (isset($_POST['submit'])) {
		if(!empty($_POST['coder'])){
			foreach ($_POST['coder'] as $selected) {
				global $selected;
				
			}
		}
	}
	*/
?>





<form>
	<table class="tblone">
		<tr>
			<td colspan="2"  align="center" >Output</td>
		</tr>
		<tr>
			<td>Name</td>
			<td> <?php global $shownm; echo $shownm ;?> </td>
		</tr>
		<tr>
			<td>Gender</td>
			<td> <?php global $gender; echo $gender ;?> </td>
		</tr>
		<tr>
			<td>Coder</td>
			<td>


			 <?php 
				if($coder == 'PHP'){
					echo "PHP";
				} elseif ($coder == "JAVA") {
					echo "JAVA";
				}elseif ($coder == "C++") {
					echo "C++";
				}else{
					//echo "Select an department";
				}

			?> </td>

		</tr>
		<tr>
			<td>Department</td>
			<td> <?php 
					if($dep == "Math"){
						echo "Math";
					}elseif ($dep == "Physic") {
						echo "Physic";
					}elseif ($dep == "Computer") {
						echo "Computer";
					}else{
						//echo "Select one department";
					}

			 	  ?>  </td>

		</tr>
	</table>
</form>

<?php } ?>

<form action="" method="post">
	<table class="tbltwo">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"/> </td>
		</tr>
		<tr>
			<td >Gender:</td>
			<td required="1">
				<input type="radio" name="gender" value="Male" /> Male
			    <input type="radio" name="gender" value="Female"/> Female 
			    <input type="radio" name="gender" value="Other"/>Other
			</td> 
		</tr>
		<tr>
			<td>Department:</td>
			<td>
				<select class="opt" name="dep" >
					<option value="">Select one</option>
					<option value="Math">Math</option>
					<option value="Physic">Physic</option>
					<option value="Computer">Computer</option>
				</select>
			</td> 
		</tr>
		<tr>
			<td>Coder:</td>
			<td >
				<input type="checkbox" name="coder" value="PHP" /> PHP
			    <input type="checkbox" name="coder" value="JAVA"/> JAVA 
			    <input type="checkbox" name="coder" value="C++"/>C++
			</td> 
		</tr>
		<tr>
			<td></td>
			<td> <input type="submit" name="submit" value="Submit">
				<input type="reset" name="clear" value="Reset"></td> 
		</tr>
	</table>
</form>


	







<?php
     include'footer.php';
?>






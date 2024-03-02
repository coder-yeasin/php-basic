<?php
     include'head.php';
?>


<?php
  		if (isset($_POST['submit'])) {
  			$coder = $_POST['coder'];
  			echo "You have selected :";
  			foreach ($coder as $lang => $value) {
  				echo $value. ", ";
  			}
  	}
?>
<form action="" method="post" name="myfrom" /> 
	<table>
		<tr>
			<td>Gender: </td>
			<td><input type="checkbox" name="coder[]" value="JAVA" /> JAVA
			<input type="checkbox" name="coder[]" value="PHP" /> PHP
			<input type="checkbox" name="coder[]" value="PAYTHON" /> PAYTHON</td>
		</tr> 
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit" />
			<input type="reset" Value="Clear" /></td>
		</tr>
	</table>
</form>

		<?php
			if(isset($_POST['coder'])){
				$showresult = $_POST['coder'];
				echo "Your Dristic is: ". $showresult; 
			}
		?>



<form action="" method="post" name="" id=""> 
	<table>
		<tr>
			<td>Dristic</td>
			<td><select name="coder" />
				<option>Select one</option>
				<option>Narail</option>
				<option>Khulana</option>
				<option>Dhaka</option>
				<option>Rajshai</option>
			</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit" />
			<input type="reset" Value="Clear" /></td>
		</tr>
	</table>
</form>



<?php
     include'footer.php';
?>


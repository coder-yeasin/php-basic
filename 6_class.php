<?php
     include'head.php';
?>

<?php
  		if (isset($_POST['Ussername'])) {
  			$data = $_POST['Ussername'];
			echo "Ussername : ". $data;
  		}
?>

<form action="" method="post" name="" id=""> 
	<table>
		<tr>
			<td>Ussername</td>
			<td><input type="text" name="Ussername" required="" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit" />
			<input type="reset" Value="Clear" /></td>
		</tr>
	</table>
</form>


<hr/>

<?php
  		if (isset($_POST['gender'])) {
  			$data = $_POST['gender'];
  			if($data == "Male"){
			echo "You are a Male";
  		} elseif ($data == "Female") {
			echo "You are a Female";
  		} else{
			echo "You are a Others";

  		}
  	}
?>
<form action="" method="post" name="mydata" /> 
	<table>
		<tr>
			<td>Gender: </td>
			<td><input type="radio" name="gender" value="Male" /> Male</td>
			<td><input type="radio" name="gender" value="Female" /> Female</td>
			<td><input type="radio" name="gender" value="Other" /> Other</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit" />
			<input type="reset" Value="Clear" /></td>
		</tr>
	</table>
</form>

<hr/>












<?php
     include'footer.php';
?>
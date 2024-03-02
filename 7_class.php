<?php
     include'head.php';
?>

<h3>From Validition by javascript</h3>

<script type="text/javascript">
	function yeasin(){
	var name = document.mydata.Ussername.value;
	var showdata = "Ussername is : " + name;
	document.getElementById("dataOn").innerHTML = showdata;		
	}
</script>

<div id="dataOn"></div>

<form action="" method="post" name="mydata" id="mydata" onsubmit="yeasin(); return false";  > 
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


<script type="text/javascript">
	function myFunction(){
		var data = document.mydata.gender.length;
		for(i = 0; i < length; i++){
			var myCheck = document.mydata.gender[i].checked;
			if(myCheck){
				var result = document.mydata.gender.value;
			}
		}
		var showReselt = "You are : " + result;
		document.getElemenetById("myResult").innerHTML = showReselt;
	}

</script>
<div id="myResult"></div>
<form action="" method="post" name="mydata" onsubmit="myFunction(); return false";  > 
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














<?php
     include'footer.php';
?>
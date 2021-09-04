<?php
	$connection = mysqli_connect("localhost","root","","blood_bank");
	$db = mysqli_select_db($connection,"Blood Bank");
	$query = "insert into hospital_members values('$_POST[id]','$_POST[fullName]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration Successfully....You may login now.")
	window.location.href = "index.php";
</script>

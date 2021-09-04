<?php
	function get_unit_count(){
	$connection = mysqli_connect("localhost", "root", "", "blood_bank");
	$db = mysqli_select_db($connection, "Blood Bank");
	$unit_count = "";
	$query = "select unit from blood_info ";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$unit_count = $row['unit'];
	}
	return ($unit_count);
}
	function get_total_unit_count(){
	$connection = mysqli_connect("localhost", "root", "", "blood_bank");
	$db = mysqli_select_db($connection, "Blood Bank");
	$total_unit_count = "";
	$query = "select sum(unit) as total_unit_count from blood_info ";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$total_unit_count = $row['total_unit_count'];
	}
	return ($total_unit_count);
}
	function get_unit($x){
	$connection = mysqli_connect("localhost", "root", "", "blood_bank");
	$db = mysqli_select_db($connection, "Blood Bank");
	$unit = "";
	$query = "select sum(unit) as unit from blood_info where bloodGroup='$x'";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$unit = $row['unit'];
	}
	return ($unit);

	}
	function get_request_count(){
	$connection = mysqli_connect("localhost", "root", "", "blood_bank");
	$db = mysqli_select_db($connection, "Blood Bank");
	$request_count = "";
	$query = "select count(email) as request_count from request ";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
		$request_count = $row['request_count'];
	}
	return ($request_count);

	}
?>
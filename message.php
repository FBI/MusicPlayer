<?php 

	require_once('connect.php');

	$id = $_GET['mid'];

	$sql = "select * from message_list where mid = $id";

	$query = mysqli_query($con,$sql);
	
	if ( $query && mysqli_num_rows( $query ) ) {
		while ( $row = mysqli_fetch_assoc( $query ) ) {
			$data[] = $row;
		}
		echo json_encode( $data );
	}


 ?>
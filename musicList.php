<?php 

	require_once('connect.php');

	//从表 music_list中查询name和musicName字段
	$sql = "select id,name,musicName from music_list";
	$query = mysqli_query($con,$sql);

	if ( $query && mysqli_num_rows( $query ) ) {
		while ( $row = mysqli_fetch_assoc( $query ) ) {
			$data[] = $row;
		}
		echo json_encode( $data );
	}


 ?>
<?php 

	require_once('connect.php');

	$mid = $_POST['mid'];
	$text = htmlspecialchars($_POST['text']);//对前端可能传入的脚本进行编码

	$sql = "insert into message_list(mid,text) values($mid , '$text')";

	$query = mysqli_query($con,$sql);

	if($query){
		echo '{"code":"1","message":"'.$text.'"}';
	}
	else{
		echo '{"code":"0","message":"添加失败"}';
	}


 ?>
<?php 
error_reporting(0);
//设置当前页面的编码格式
	header("Content-Type:text/html;charset=utf-8");
	$con = mysql_connect('127.0.0.1','root','');//连接数据库
	mysql_select_db('ajaxMusic');//选择数据库
	mysql_query('set names utf8');//设置数据库编码

	$username = $_POST['username'];

	//select查询 *查询所有字段   reg:查询的表 where表示要查询的字段 等号右边为该字段的值
	$sql = "select * from reg where username =' $username'";
	$query = mysql_query($sql);//mysql_query()方法 执行查询语句  该方法返回一个对象 如果查询到了一个数据，该对外的长度就是1 没有查询到 则为0

    //mysql_num_rows($query)方法判断有没有查询到数据 查询到1个数据 返回1  否则返回0

    if ( $query && mysql_num_rows($query)) {
    	echo "<script>alert('已经有人注册过啦')</script>";
    	echo "<script>window.history.back()</script>";
    }else {
    	
    }

 ?>
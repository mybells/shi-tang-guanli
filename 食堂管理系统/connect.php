<?php
	require_once('config.php');
	//连库
	if(!(@mysql_connect(HOST, USERNAME, PASSWORD))){
		 echo mysql_error();
	
	}
	//选库
	if(!mysql_select_db('guanli')){
		echo mysql_error();
		
	}
	//字符集
	if(!mysql_query('set names utf8')){
		echo mysql_error();
		
	}
?>
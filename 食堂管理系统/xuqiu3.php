<?php
	require_once('connect.php');
	 $id = $_POST['id'];
	 $suoxu3 = $_POST['suoxu3'];
	 date_default_timezone_set('PRC'); 
	 $dateline = date("Y-m-d H:i:s");
	 $updatesql = "update xuqiu3 set suoxu3='$suoxu3',dateline='$dateline' where id=1";
	if(mysql_query($updatesql)){
		echo "<script>alert('提交成功');window.location.href='guanli.php';</script>";
	}else{
		echo "<script>alert('提交失败');window.location.href='ck3.php';</script>";
	}
?>
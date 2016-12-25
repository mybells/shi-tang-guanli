<?php
	require_once('connect.php');
	 $id = $_POST['id'];
	 $suoxu1 = $_POST['suoxu1'];
	 date_default_timezone_set('PRC'); 
	 $dateline = date("Y-m-d H:i:s");
	 $updatesql = "update xuqiu set suoxu1='$suoxu1',dateline='$dateline' where id=1";
	if(mysql_query($updatesql)){
		echo "<script>alert('提交成功');window.location.href='guanli.php';</script>";
	}else{
		echo "<script>alert('提交失败');window.location.href='ck1.php';</script>";
	}
?>
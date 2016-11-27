<?php
	require_once('connect.php');
	 @$array = $_POST['shitang'];	 
	 @$str =implode(',',$array);
	  $dizhi = $_POST['dizhi'];
	   $dianhua = $_POST['dianhua'];
	   $name = $_POST['name'];
	   date_default_timezone_set('PRC'); 
	   $dateline = date("Y-m-d H:i:s");
	 $insertsql = "insert into xuanze(shitang,dizhi,dianhua,name,dateline) values ('$str','$dizhi','$dianhua','$name','$dateline')";
	if(mysql_query($insertsql)){
		echo "<script>alert('提交成功');window.location.href='guanli.php';</script>";
	}else{
		echo "<script>alert('提交失败');window.location.href='student.php';</script>";
	}
	?>

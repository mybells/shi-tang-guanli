<?php
	require_once('connect.php');
	 $id = $_POST['id'];
	 $麻辣香锅 = $_POST['麻辣香锅'];
	 $辣子鸡 = $_POST['辣子鸡'];
	 $蛋炒饭 = $_POST['蛋炒饭'];
	 $土豆丝盖饭 = $_POST['土豆丝盖饭'];
	 $肉夹馍 = $_POST['肉夹馍'];
	 $臊子面= $_POST['臊子面'];
	 $拌面 = $_POST['拌面'];
	 $鲜菇面 = $_POST['鲜菇面'];
	 $牛肉面 = $_POST['牛肉面'];
	 $鸡蛋 = $_POST['鸡蛋'];
	 $饺子 = $_POST['饺子'];
	 $汤圆 = $_POST['汤圆'];
	 $米汤 = $_POST['米汤'];
	 $砂锅方便面 = $_POST['砂锅方便面'];
	 $砂锅麻花 = $_POST['砂锅麻花'];
	 $麻食 = $_POST['麻食'];
	 $豆浆 = $_POST['豆浆'];
	 $豆沙包子 = $_POST['豆沙包子'];
	 $面皮 = $_POST['面皮'];
	 $米饭 = $_POST['米饭'];
	 $updatesql = "update table1 set 麻辣香锅='$麻辣香锅',辣子鸡='$辣子鸡',蛋炒饭='$蛋炒饭',土豆丝盖饭='$土豆丝盖饭',肉夹馍='$肉夹馍',臊子面='$臊子面',拌面='$拌面',鲜菇面='$鲜菇面',牛肉面='$牛肉面',鸡蛋='$鸡蛋',饺子='$饺子',汤圆='$汤圆',米汤='$米汤',砂锅方便面='$砂锅方便面',砂锅麻花='$砂锅麻花',麻食='$麻食',豆浆='$豆浆',豆沙包子='$豆沙包子',面皮='$面皮',米饭='$米饭' where id=1";
	if(mysql_query($updatesql)){
		echo "<script>alert('修改菜价成功');window.location.href='manager-guanli.php';</script>";
	}else{
		echo "<script>alert('修改菜价失败');window.location.href='managerjiemian.php';</script>";
	}
?>
	
<?php
     require_once('connect.php');
     $query = mysql_query("select * from xuanze");
     //$data = mysql_fetch_assoc($query)
?>
     <html>
<head>
	<title>查询订单</title>
	<style type="text/css">
	body{background-color:orange;}
	</style>
</head>
<body style="background:url('9.jpg');">

        <h2><input type="text" value="<?php date_default_timezone_set('PRC'); echo "当前时间:" . date("Y/m/d H:i:s");?>" readOnly="true" style="font-size:20px;width:400px;border:0px;"></h2>
           <h2><a href="manager-guanli.php" style="color:#000;float:left;">返回上一页</a></h2> &nbsp;&nbsp;&nbsp;
<label><h2>订单信息：</h2></label>
<?php 
    while($data = mysql_fetch_array($query))
       {
	         echo  '<font style="color:blue;font-size:25px;">序号:</font>'.$data['id']."<br>","订单:".$data['shitang']."<br>","地址:".$data['dizhi']."<br>","电话:".$data['dianhua']."<br>","姓名:".$data['name']."<br>","日期:".$data['dateline']."<br>"."<br>"."<br>";
       }
         
 ?>        
</body>
</html>
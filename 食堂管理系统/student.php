<?php
  require_once('connect.php');
  $query = mysql_query("select * from table1 where id=1");
  $data = mysql_fetch_assoc($query);
  date_default_timezone_set('PRC');
?>
<html>
    <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>提交订单</title>
       <style type="text/css">
        
        .chuangkou1{text-align:center;border:1px solid #000;font-size:20px;}
         .chuangkou2{text-align:center;border:1px solid #000;font-size:20px;}
          .chuangkou3{text-align:center;border:1px solid #000;font-size:20px;}
           .chuangkou4{text-align:center;border:1px solid #000;font-size:20px;}
           .lianxi{border:1px solid #000;font-size:20px;}
           .tijiao{text-align:center;}
       </style>
     </head>
            <body style="background:url('10.jpg');">      
           <form name="student" method="post" action="xuanze.php">
<div class="chuangkou1"><?php echo "当前时间" . date("Y/m/d H:i:s");?><h2>食堂窗口一:电话:12334556</h2><br/>
       <input type="checkbox" name="shitang[]"  value="麻辣香锅">麻辣香锅:
       <input type="text" value="<?php echo $data['麻辣香锅']?>" readOnly="true" name="麻辣香锅" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="辣子鸡">辣子鸡:
       <input type="text" value="<?php echo $data['辣子鸡']?>" readOnly="true" name="辣子鸡" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="蛋炒饭">蛋炒饭:
       <input type="text" value="<?php echo $data['蛋炒饭']?>" readOnly="true" name="蛋炒饭" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="土豆丝盖饭">土豆丝盖饭:
       <input type="text" value="<?php echo $data['土豆丝盖饭']?>" readOnly="true" name="土豆丝盖饭" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="肉夹馍">肉夹馍:
       <input type="text" value="<?php echo $data['肉夹馍']?>" readOnly="true" name="肉夹馍" style="width:50px;border:0px;">         </br></br></div>
<div class="chuangkou2"><h2>食堂窗口二:电话:12334444</h2><br/>
        <input type="checkbox" name="shitang[]"  value="臊子面">臊子面:
        <input type="text" value="<?php echo $data['臊子面']?>" readOnly="true" name="臊子面" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="拌面">拌面:
       <input type="text" value="<?php echo $data['拌面']?>" readOnly="true" name="拌面" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="鲜菇面">鲜菇面:
       <input type="text" value="<?php echo $data['鲜菇面']?>" readOnly="true" name="鲜菇面" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="牛肉面">牛肉面:
       <input type="text" value="<?php echo $data['牛肉面']?>" readOnly="true" name="牛肉面" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="鸡蛋">鸡蛋:
       <input type="text" value="<?php echo $data['鸡蛋']?>" readOnly="true" name="鸡蛋" style="width:50px;border:0px;">         </br></br></div>
<div class="chuangkou3"><h2>食堂窗口三:电话:12334544</h2><br/>
       <input type="checkbox" name="shitang[]"  value="饺子">饺子: 
       <input type="text" value="<?php echo $data['饺子']?>" readOnly="true" name="饺子" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="汤圆">汤圆:
       <input type="text" value="<?php echo $data['汤圆']?>" readOnly="true" name="汤圆" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="米汤">米汤:
       <input type="text" value="<?php echo $data['米汤']?>" readOnly="true" name="米汤" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="砂锅方便面">砂锅方便面:
       <input type="text" value="<?php echo $data['砂锅方便面']?>" readOnly="true" name="砂锅方便面" style="width:50px;border:0px;">     
       <input type="checkbox" name="shitang[]"  value="砂锅麻花">砂锅麻花:
       <input type="text" value="<?php echo $data['砂锅麻花']?>" readOnly="true" name="砂锅麻花" style="width:50px;border:0px;">  
       </br></br></div> 
<div class="chuangkou4"><h2>食堂窗口四:电话:123345456</h2><br/>
       <input type="checkbox" name="shitang[]"  value="麻食">麻食:
       <input type="text" value="<?php echo $data['麻食']?>" readOnly="true" name="麻食" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="豆浆">豆浆:
       <input type="text" value="<?php echo $data['豆浆']?>" readOnly="true" name="豆浆" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="豆沙包子">豆沙包子:
       <input type="text" value="<?php echo $data['豆沙包子']?>" readOnly="true" name="豆沙包子" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="面皮">面皮:
       <input type="text" value="<?php echo $data['面皮']?>" readOnly="true" name="面皮" style="width:50px;border:0px;">
       <input type="checkbox" name="shitang[]"  value="米饭">米饭:
       <input type="text" value="<?php echo $data['米饭']?>" readOnly="true" name="米饭" style="width:50px;border:0px;"></br></br></div>         
       
       <div class="lianxi" style="height:80px;">
       <h3 style="float:left;">
       地址:
       <input type="text" name="dizhi" style="width:200px;height:25px;">
       </h3><h3 style="float:left;">联系电话:
       <input type="text" name="dianhua" style="width:200px;height:25px;">
       </h3><h3>姓名:
       <input type="text" name="name" style="width:200px;height:25px;">
       </h3></br></br></br></div> 
   <div class="tijiao"><input  type="submit" name="xuanzebtn" value="     提交     "></div></form>
                 
            </body>
</html>
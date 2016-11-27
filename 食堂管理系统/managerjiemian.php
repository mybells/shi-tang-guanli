<?php
  require_once('connect.php');
  $query = mysql_query("select * from table1 where id=1");
  $data = mysql_fetch_assoc($query);
?>
<html>
    <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>修改菜价</title>
       <style type="text/css">
    .chuangkou1{text-align:center;border:1px solid #000;font-size:20px;}
         .chuangkou2{text-align:center;border:1px solid #000;font-size:20px;}
          .chuangkou3{text-align:center;border:1px solid #000;font-size:20px;}
           .chuangkou4{text-align:center;border:1px solid #000;font-size:20px;}
           .lianxi{border:1px solid #000;font-size:20px;}
           .tijiao{text-align:center;}
       </style>
     </head>

    <body style="background:url('10.jpg')">
   <form name="manager" method="post" action="manager.php">
                <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
<div class="chuangkou1"><h2>修改食堂窗口一价钱:</h2><br/>
    麻辣香锅:   <input type="text" name="麻辣香锅" value="<?php echo $data['麻辣香锅']?>" style="width:50px"/>
      辣子鸡:   <input type="text" name="辣子鸡"   value="<?php echo $data['辣子鸡']?>" style="width:50px">
      蛋炒饭:   <input type="text" name="蛋炒饭"  value="<?php echo $data['蛋炒饭']?>" style="width:50px">
  土豆丝盖饭:   <input type="text" name="土豆丝盖饭"  value="<?php echo $data['土豆丝盖饭']?>" style="width:50px">
      肉夹馍:   <input type="text" name="肉夹馍"  value="<?php echo $data['肉夹馍']?>" style="width:50px">          </br></br></div>
<div class="chuangkou2"><h2>修改食堂窗口二价钱:</h2><br/>
      臊子面:   <input type="text" name="臊子面"  value="<?php echo $data['臊子面']?>" style="width:50px">
        拌面:   <input type="text" name="拌面"  value="<?php echo $data['拌面']?>" style="width:50px">
      鲜菇面:   <input type="text" name="鲜菇面"  value="<?php echo $data['鲜菇面']?>" style="width:50px">
      牛肉面:   <input type="text" name="牛肉面"  value="<?php echo $data['牛肉面']?>" style="width:50px">
        鸡蛋:   <input type="text" name="鸡蛋"  value="<?php echo $data['鸡蛋']?>" style="width:50px">        </br></br></div>
<div class="chuangkou3"><h2>修改食堂窗口三价钱:</h2><br/>
        饺子:   <input type="text" name="饺子"  value="<?php echo $data['饺子']?>" style="width:50px">
        汤圆:   <input type="text" name="汤圆"  value="<?php echo $data['汤圆']?>" style="width:50px">
        米汤:   <input type="text" name="米汤"  value="<?php echo $data['米汤']?>" style="width:50px">
  砂锅方便面:   <input type="text" name="砂锅方便面"  value="<?php echo $data['砂锅方便面']?>" style="width:50px">
    砂锅麻花:   <input type="text" name="砂锅麻花"  value="<?php echo $data['砂锅麻花']?>" style="width:50px">            </br></br></div>
<div class="chuangkou4"><h2>修改食堂窗口四价钱:</h2><br/>
        麻食:   <input type="text" name="麻食"  value="<?php echo $data['麻食']?>" style="width:50px">
        豆浆:   <input type="text" name="豆浆"  value="<?php echo $data['豆浆']?>" style="width:50px">
    豆沙包子:   <input type="text" name="豆沙包子"  value="<?php echo $data['豆沙包子']?>" style="width:50px">
        面皮:   <input type="text" name="面皮"  value="<?php echo $data['面皮']?>" style="width:50px">
        米饭:   <input type="text" name="米饭"  value="<?php echo $data['米饭']?>" style="width:50px"></br></br></div>
<div  class="tijiao"><input type="submit" value="     提交     "></div></form>
      </body>
</html>
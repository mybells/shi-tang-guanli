<?php
  require_once('connect.php');
  $query = mysql_query("select * from xuqiu where id=1");
  $xuqiu2 = mysql_query("select * from xuqiu2 where id=1");
  $xuqiu3 = mysql_query("select * from xuqiu3 where id=1");
  $xuqiu4 = mysql_query("select * from xuqiu4 where id=1");
  $data = mysql_fetch_assoc($query);
  $data2 = mysql_fetch_assoc($xuqiu2);
  $data3 = mysql_fetch_assoc($xuqiu3);
  $data4 = mysql_fetch_assoc($xuqiu4);
?>
<html>
    <head>
     <meta http-equiv="content-type" content="text/html; charset=utf-8">
       <title>查询需求</title>
       <style type="text/css">
	   form{text-align:center;}
   
       </style>
    </head>
         <body  style="background:url('7.jpg') no-repeat;">
<h2><a href="manager-guanli.php" style="color:#000">返回上一页</a></h2>
         <form>
         <label><h2>食堂窗口一所需：</h2></label>
          <textarea style="resize: none" cols="100" rows="6" name="suoxu1" readOnly="true"><?php echo $data['suoxu1']."                   ";    echo '日期:'.$data['dateline']?></textarea>
             <label><h2>食堂窗口二所需：</h2></label>
          <textarea style="resize: none" cols="100" rows="6" name="suoxu2" readOnly="true"><?php echo $data2['suoxu2']."                   ";    echo '日期:'.$data2['dateline']?></textarea>
              <label><h2>食堂窗口三所需：</h2></label>
          <textarea style="resize: none" cols="100" rows="6" name="suoxu3" readOnly="true"><?php echo $data3['suoxu3']."                   ";    echo '日期:'.$data3['dateline'];?></textarea>
             <label><h2>食堂窗口四所需：</h2></label>
          <textarea style="resize: none" cols="100" rows="6" name="suoxu4" readOnly="true"><?php echo $data4['suoxu4']."                   ";    echo '日期:'.$data4['dateline']?></textarea></br></br>
         </form>
         </body>
</html>
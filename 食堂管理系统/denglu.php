<html>
<head>
<style type="text/css">
fieldset{width:200px;}
</style>
</head>
<body style="background:url('6.jpg') no-repeat;">
<fieldset>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  
<legend>用户登录</legend>

<form name="myform" method="post" action="yanzhengmima.php" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label">用户名:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密  码:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  确 定  " class="left" />
<input type="button" value="  退出  "  onclick="window.location.href='guanli.php'">
</p>
</form>
</fieldset>
</body>
</html>
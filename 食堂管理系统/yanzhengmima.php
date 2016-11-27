<?php

header("content-type:text/html;charset=utf-8");

//连接数据库

require_once('connect.php');

//设置字符串编码

mysql_query("set names utf8");

//选择数据库

mysql_select_db("guanli");

//获取表单数据。

$username=$_POST['username'];

$password=$_POST['password'];

//$pwd=md5($pwd); //本示例仅为测试，未考虑测安全方面， 可以对密码进行md5加密。

$sql="select * from login where username='{$username}'";  

$rs=mysql_query($sql); //执行sql查询

$num=mysql_num_rows($rs); //获取记录数

if($num){ // 用户存在；

   $row=mysql_fetch_array($rs);

   if($username==='gao'&&$password===$row['password']){ //对密码进行判断。

    echo "<script>alert('登陆成功，正在为你跳转至后台页面');window.location.href='denglu.php';</script>";
    header("location:manager-guanli.php");
    }else if($username==='ck1'&&$password===$row['password']){
    	echo "<script>alert('登陆成功，正在为你跳转至后台页面');window.location.href='denglu.php';</script>";
    header("location:ck1.php");
    }
else if($username==='ck2'&&$password===$row['password']){
    	echo "<script>alert('登陆成功，正在为你跳转至后台页面');window.location.href='denglu.php';</script>";
    header("location:ck2.php");
    }else if($username==='ck3'&&$password===$row['password']){
    	echo "<script>alert('登陆成功，正在为你跳转至后台页面');window.location.href='denglu.php';</script>";
    header("location:ck3.php");
    }else if($username==='ck4'&&$password===$row['password']){
    	echo "<script>alert('登陆成功，正在为你跳转至后台页面');window.location.href='denglu.php';</script>";
    header("location:ck4.php");
    }
    else{
echo "<script>alert('密码不正确,返回登陆页面');window.location.href='denglu.php';</script>";
} 
}else{
 echo "<script>alert('用户不存在,返回登陆页面');window.location.href='denglu.php';</script>";
}

?>
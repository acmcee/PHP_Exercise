<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>获取文本框的信息</title>
</head>

<body>



    <form name = "form1"  method = "post" action = "">
         <table>  
             <tr>
             <td>用户名：<input type ="text" name="user" size ="20"></td>
             <td>密码:<input name = "pwd" type = "password" id = "pwd" size = "20"</td>
        <input name = "submit" type = "submit" id  = "submit" value = "登陆">
        </tr>
        </table>
        </form>
        

<?php
if ($_POST[submit]=="登陆")
{
    echo '您输入的用户名为 ：'.$_POST[user].";    密码为".$_POST[pwd];
}
?>

 </body>
</html>

<!doctype html>
<html>
<body>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <base href="<?php echo site_url();?>">
    <style>
        .erro{
            color: #f00;
        }
    </style>
</head>
<form action="welcome/save" method="post">
    <p>
        用户名：<input type="text" name="username">
        <span class="erro">
            <?php echo isset($err_name)?$err_name:"";?>
        </span>
    </p>
    <p>
        密码：<input type="password" name="password">
        <span class="erro">
            <?php echo isset($err_pwd)?$err_pwd:"";?>
        </span>
    </p>
    <p>
        确认密码：<input type="password" name="repassword">
    </p>
    <p>
        <input type="submit" value="注册">
    </p>
</form>
</body>
</html>
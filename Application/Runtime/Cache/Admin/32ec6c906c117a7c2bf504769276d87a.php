<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/newface/Public/admin/style/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/newface/Public/admin/style/demo.css" />
<link rel="stylesheet" type="text/css" href="/newface/Public/admin/style/login.css" />
</head>
<body class="login-body">
	<form action="/newface/index.php/admin/Login/login" method="post">
		<div class="login-form">
			<div class="form-group">
				<input type="text" class="form-control login-field" value=""
					placeholder="请输入用户名" id="login-name" name="username">
				<label class="login-field-icon fui-user" for="login-name"></label>
			</div>

			<div class="form-group">
				<input type="password" class="form-control login-field" value=""
					placeholder="请输入密码" id="login-pass" name="password">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
			</div>

			<input type="submit" class="btn btn-primary btn-lg btn-block"
				value="Login">
		</div>
	</form>
</body>
</html>
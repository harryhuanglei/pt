<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="haohaipt X_7.2" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>商家管理平台</title>
	<link href="templates/css/login.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:#00205D; ">
	
	<div class="logintop">
		<h1 class="loginlogo" style="background:url('<?php echo $this->_var['business_login_logo']; ?>') center 0 no-repeat;" title="商家管理平台">商家管理平台</h1>
	</div>
	<script>
		function check_info()
		{
			if(document.form1.user_name.value=='')
			{
				alert('请输入用户名');
				return false;	
			}
			if(document.form1.password.value=='')
			{
				alert('请输入密码');
				return false;	
			}
			return true;
			
		}
	
	</script>
	<div class="loginbox">
    <form action="index.php"  method="post" name="form1" onsubmit="return check_info();">
		<ul class="logincon">
			<li class="title">商户管理中心登录</li>
			<li>
				<i class="username"></i>
				<input type="text" title="用户名" name="user_name" value="" class="inputname" onfocus="this.className='inputname act'" onblur="this.className='inputname'">
			</li>
			<li>
				<i class="password"></i>
				<input type="password" title="密码" name="password" value="" class="inputpwd" onfocus="this.className='inputpwd act'" onblur="this.className='inputpwd'">
			</li>
			<li class="get_password">
				<a href="index.php?op=get_password&act=forget_pwd">忘记密码?</a>
			</li>
			<li>
             <input type="hidden" name="act" value="act_login_sub" />
             <input type="hidden" name="op" value="login" />
			<input type="submit" title="登录" value="登 录" class="loginbtn" />
			<input type="reset" title="重置" value="重 置" class="loginbtn2" />
			</li>
		</ul>
        </form>
        <div class="loginfoot"> 
<!--   <p><b>产品还未入驻？请点击<a href="enter.php" target="_blank">申请入驻</a>，成为我们的商铺。</b></p>
-->		
	</div>
	</div>
	
	

</body>
</html>
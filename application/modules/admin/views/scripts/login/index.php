<?php
if (!$this->isAjax) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>CRM</title>

<link href="dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
<link href="dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>
<body>
<div class="dialog" style="z-index: 1000; height: 260px; width: 520px;margin: 200px auto;position: inherit !important;">
	<div oncut="return false;" onpaste="return false;" oncopy="return false;" onselectstart="return false;" class="dialogHeader">
		<div class="dialogHeader_r">
			<div class="dialogHeader_c">
				<h1>登录</h1>
			</div>
		</div>
	</div>
	<div class="dialogContent layoutBox lookupBox" style="height: 221px;">
		<div class="pageContent" style="width: 506px; height: 220px;">
	
<?php
	$style = 'height: 162px';
	$from = 'login';
}
?>
<div class="pageContent">
	
	<form method="post" action="login/doLogin" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<div class="pageFormContent" layoutH="58" style='<?php echo $style;?>'>
			<div class="unit">
				<label>用户名：</label>
				<input type="text" name="username" size="30" class="required"/>
			</div>
			<div class="unit">
				<label>密码：</label>
				<input type="password" name="password" size="30" class="required"/>
			</div>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
		<input type='hidden' name='from' value='<?php echo $from;?>' />
	</form>
	
</div>

<?php
if (!$this->isAjax) {
?>

	
</div>

</div>
	<div class="dialogFooter"><div class="dialogFooter_r"><div class="dialogFooter_c"></div></div></div>
	<div tar="nw" class="resizable_h_l"></div>
	<div tar="ne" class="resizable_h_r"></div>
	<div tar="n" class="resizable_h_c"></div>
	<div style="height: 300px;" tar="w" class="resizable_c_l"></div>
	<div style="height: 300px;" tar="e" class="resizable_c_r"></div>
	<div tar="sw" class="resizable_f_l"></div>
	<div tar="se" class="resizable_f_r"></div>
	<div tar="s" class="resizable_f_c"></div>
</div>
</body>
</html>
<?php
}
?>
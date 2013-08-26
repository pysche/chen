<form action="<?php echo $this->URL;?>/update?navTabId=<?php echo $this->MODULE;?>" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
<input type='hidden' name='callbackType' value='closeCurrent' />
<div class="pageContent">
	<div class="pageFormContent" layoutH="58">
		<dl>
			<dt>新密码：</dt><dd><input name="Password" class="required" type="password"/>
			</dd>
		</dl>
		<dl>
			<dt>确认密码：</dt><dd><input name="Password2" class="required" type="password"/></dd>
		</dl>
	</div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
			<li><div class="button"><div class="buttonContent"><button class="close" type="button">关闭</button></div></div></li>
		</ul>
	</div>
</div>
</form>

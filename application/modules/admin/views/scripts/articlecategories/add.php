<form action="<?php echo $this->URL;?>/insert?navTabId=<?php echo $this->MODULE;?>" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
<div class="pageContent">
	<div class="pageFormContent" layoutH="58">
		<dl>
			<dt>分类名：</dt>
			<dd>
				<input type='text' name='Title' value='' size='50' />
			</dd>
		</dl>
		<dl>
			<dt>排序：</dt>
			<dd>
				<input type='text' name='SortNum' value='' alt='4位数字，越小越考前' value='9999' maxlength="4" size='50' /> 
			</dd>
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
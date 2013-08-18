<form action="<?php echo $this->URL;?>/update?navTabId=<?php echo $this->MODULE;?>" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
<input type="hidden" name="id" value="<?php echo $this->vo->id;?>"/>
<div class="pageContent">
	<div class="pageFormContent" layoutH="58">
		<dl>
			<dt>标题:</dt>
			<dd>
				<input type='text' name='Title' value='<?php echo $this->vo->Title;?>' size='50' />
			</dd>
		</dl>
		<dl>
			<dt>分类：</dt>
			<dd>
				<?php echo $this->FormSelect('Category', $this->vo->Category, null, Crm_Funcs::array_merge(array(0=>'* 请选择  *'), $this->categories));?>
			</dd>
		</dl>
		<dl>
			<dt>标签：</dt>
			<dd>
				<input type='text' name='Tags' value='<?php echo $this->vo->Tags;?>' alt='以英文逗号分隔多个标签' size='50' /> 
			</dd>
		</dl>
		<dl>
			<dt>排序：</dt>
			<dd>
				<input type='text' name='SortNum' alt='4位数字，越小越考前' value='<?php echo $this->vo->SortNum;?>' maxlength="4" size='50' /> 
			</dd>
		</dl>
		<dl>
			<dt>其他设置：</dt>
			<dd>
				<input type='checkbox' id='PubFlag' name='PubFlag' value='1' <?php if (intval($this->vo->PubFlag)>0) { ?>checked="checked" <?php } ?> />
				<label style='float: none;' for='PubFlag'>发布到前台</label>
			</dd>
		</dl>
		<dl>
			<dt>内容：</dt>
			<dd>
				<textarea class="editor" name='Content' rows='20' cols='75' tools="simple"><?php echo $this->vo->Content;?></textarea>
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
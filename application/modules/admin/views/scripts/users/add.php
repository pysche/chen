<form action="<?php echo $this->URL;?>/insert?navTabId=<?php echo $this->MODULE;?>" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
<div class="pageContent">
	<div class="pageFormContent" layoutH="58">
		<dl>
			<dt>用户名：</dt><dd><input name="Username" class="required" alt="英文字母加数字" type="text"/></dd>
		</dl>
		<dl>
			<dt>密码：</dt><dd><input name="Password" class="required" type="password"/></dd>
		</dl>
		<dl>
			<dt>确认密码：</dt><dd><input name="Password2" class="required" type="password"/></dd>
		</dl>
		<dl>
			<dt>姓名：</dt><dd><input name="Realname" class="required" type="text"/></dd>
		</dl>
		<dl class='block'>
			<dt>权限：</dt>
			<dd class='auth_pane'>
			<?php
				$ag = Crm_Config::appConfig()->auth_group->toArray();
				foreach ($ag as $group) {
			?>
			<fieldset>
				<legend><?php echo $group['title'];?></legend>
				<div>
					<ul class='auth_list'>
					<?php 
						if (isset($group['auth']) && is_array($group['auth'])) {
							foreach ($group['auth'] as $as) {
					?>
					<li>
						<dl>
							<dt><?php echo $as['title'];?></dt>
							<dd>
								<input data-group="<?php echo $group['key'];?>_<?php echo $as['key'];?>" type='checkbox' name='AuthMask[]' id='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_list' value='<?php echo $as['key'];?>_list' />
								<label for='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_list'>查看</label>

								<input data-group="<?php echo $group['key'];?>_<?php echo $as['key'];?>" type='checkbox' name='AuthMask[]' id='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_add' value='<?php echo $as['key'];?>_add' />
								<label for='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_add'>新增</label>

								<input data-group="<?php echo $group['key'];?>_<?php echo $as['key'];?>" type='checkbox' name='AuthMask[]' id='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_update' value='<?php echo $as['key'];?>_update' />
								<label for='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_update'>修改</label>

								<input data-group="<?php echo $group['key'];?>_<?php echo $as['key'];?>" type='checkbox' name='AuthMask[]' id='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_delete' value='<?php echo $as['key'];?>_delete' />
								<label for='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_delete'>删除</label>

								<input data-group="<?php echo $group['key'];?>_<?php echo $as['key'];?>" type='checkbox' name='AuthMask[]' id='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_audit' value='<?php echo $as['key'];?>_audit' />
								<label for='auth_<?php echo $group['key'];?>_<?php echo $as['key'];?>_audit'>审核</label>

							</dd>
						</dl>
					</li>
					<?php
							}
						}
					?>
					</ul>
				</div>
			</fieldset>
			<?php					
				}
			?>
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
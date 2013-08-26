<form action="<?php echo $this->URL;?>/update?navTabId=<?php echo $this->MODULE;?>" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone)">
<input type='hidden' name='callbackType' value='closeCurrent' />
<div class="pageContent pageFormContent">

		<dl class='block'>
			<dt>说明：</dt>
			<dd>
				<ol>
					<li>可以通过拖动上传好的附件位置来调整图片顺序</li>
					<li>图片大小尺寸请限制为 806x225</li>
				</ol>
			</dd>
		</dl>

		<dl class='block'>
			<dt>图片：</dt>
			<dd>
				<ol class='attach_list' data-role='attach_list'></ol>
				<ul class='attach_list'>
				<li><a data-role='upload_new' href='#'>上传新附件</a><span data-role='upload_loading'></span></li>
				<li class='upload_error hide'></li>
				</ul>
				<input type='hidden' name='attach_list_orders' data-role='attach_list_orders' value='' />				
				<input type='hidden' name='Hash' data-role='attach_hash' value='<?php echo md5('lja');?>' />
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
<script type='text/javascript' src='/js/jquery.ajaxupload.js'></script>
<script type='text/javascript'>
var bmap = null;
var attachs = <?php echo Zend_Json::encode($this->files);?>;
var panel = navTab.getCurrentPanel();
var uploader = new AjaxUpload(panel.find('[data-role="upload_new"]').eq(0), {
	action: '/files/upload',
	name: 'myfile',
	data: {
		hash: panel.find('[data-role="attach_hash"]').eq(0).val()
	},
	autoSubmit: true,
	onSubmit: function(file,ext){
		panel.find('[data-role="upload_loading"]').append('<img src="/img/loading.gif" width="24" />');
		panel.find('li.upload_error').addClass('hidden');
	},
	onComplete: function(file, upload_response){
		var fresult = {
				Error: '1',
				Err: '',
				id: ''
			};
		
		panel.find('[data-role="upload_loading"]').empty();
		
		try {
			tmp = eval(upload_response);
			
			fresult.id = tmp[4];
			fresult.Name = tmp[0];
			fresult.Ext = tmp[5];
			fresult.Size = tmp[3];
			fresult.Error = tmp[2];
			fresult.Err = tmp[6];
		} catch (rte) {
			fresult.Err = rte.message;
		}

		if (fresult.Err) {
			panel.find('li.upload_error').text('上传失败: '+fresult.Err).removeClass('hidden');
		} else {
			Lja_AppendAttachRow(fresult, 'attach_list');
		}
	}
});

for(i in attachs) {
	Lja_AppendAttachRow(attachs[i], 'attach_list');
}

Lja_AttachListOrders('attach_list');

panel.find('ol.attach_list, ol.attach_list li').disableSelection();
	
panel.find('ol.attach_list').sortable({
		revert: true,
		stop: function(event, ui) {
			id = $(this).attr('data-role');
			Lja_AttachListOrders(id);
		}
	});

</script>
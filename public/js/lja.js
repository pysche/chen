
function Lja_FormatFileSize(size) {
	re = '';
	
	if (size >= 1048576) {
		re = (Math.round(size / 1048576 * 100) / 100) + 'MB';
	} else if (size >= 1024) {
		re = (Math.round(size / 1024 * 100) / 100) + 'KB';
	} else {
		re = size + 'B';
	}
	
	return re;
};

function Lja_AttachListOrders(id) {
	var aobj = navTab.getCurrentPanel().find('[data-role="attach_list"]').eq(0);
	size = aobj.find('li').size();
	
	if (size>0) {
		obj = navTab.getCurrentPanel().find('[data-role="'+id+'_orders"]');
		tmp = [];
		
		aobj.find('li').each(function(i){
			tmp.push($(this).attr('fid'));
		});
		
		obj.val(tmp.join(','));
	}
};

function Lja_BindAttachSortAndDrag() {
	navTab.getCurrentPanel().find('[data-role="attach_list"], [data-role="attach_list"] li').disableSelection();
};

function Lja_DelAttachRow(event) {
	var fid = $(this).attr('fid');

	if (confirm('确定？')) {
		$.getJSON('/files/upload/del?fid='+fid, function(){
			navTab.getCurrentPanel().find('li[fid="'+fid+'"]').remove().replaceWith('');
			navTab.getCurrentPanel().find('input[type="hidden"][value="'+fid+'"]').remove().replaceWith('');
		});
	}
	
	return false;
}

function Lja_AppendAttachRow(d, key)
{
	key = key ? key : 'attach_list';
	
	fid = d.id;

	a = $(document.createElement('a')).attr('fid', fid).attr('href', '#').text('删除').bind('click', Lja_DelAttachRow);
	_d = fid.substr(0,1);
	_d2 = fid.substr(1, 1);
	li = $(document.createElement('li')).attr('fid', fid).append('<a href="/files/'+_d+'/'+_d2+'/'+fid+'.'+d.Ext+'" target="_blank">'+d.Name+'</a>&nbsp;'+Lja_FormatFileSize(d.Size)).append('&nbsp;').append(a);
	ip = $(document.createElement('input')).attr('type', 'hidden').attr('name', 'fids[]').val(fid);

	navTab.getCurrentPanel().find('ol[data-role="'+key+'"]').append(li);
	navTab.getCurrentPanel().find('[data-role="'+key+'_hide"]').append(ip);
	
	Lja_BindAttachSortAndDrag();
}

$(function(){
	DWZ.init("dwz/dwz.frag.xml", {
		loginUrl:"login", 
		loginTitle:"登录",	// 弹出登录对话框
		statusCode:{ok:1, error:0, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"dwz/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});

	$(':checkbox[data-role="check_all"]').click(function() {
		var _this = $(this);
		var group = _this.attr('data-group');

		$(':checkbox[data-group="'+group+'"]').attr('checked', true);
	});
});
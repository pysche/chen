
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>CRM</title>

<link href="dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
<link href="css/crm.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
<link href="dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				
				<ul class="nav">
					<li><a href="login/logout">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>

		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">
					<?php
						foreach (Crm_Config::appConfig()->auth_group->toArray() as $group) {
$title=<<<EOF
					<div class="accordionHeader">
						<h2><span>Folder</span>{$group['title']}</h2>
					</div>
EOF;
							$menus = '';
							foreach ($group['auth'] as $v) {
								if ($v['display'] && isset($this->member['AuthMask'][$v['key']])) {
$menus .=<<<EOF
<li><a href='{$v['route']}' target='navTab' rel='{$v['key']}'>{$v['title']}</a></li>
EOF;
								}
							}

							if ($menus!='') {
								?>
								<?php echo $title;?>
								<div class="accordionContent">
								<ul class='tree treeFolder'>
								<?php echo $menus;?>
								</ul>
								</div>
								<?php
							}
							$menus!='' && $menus = '<ul class="tree treeFolder">'.$menus.'</ul>';
						}
					?>
				</div>

			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">首页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">公司网站</a></li>
					<li><a href="javascript:;">邮箱登录</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page lookupBox">
						<div class="accountInfo">
							<div class="alertInfo">
							</div>
						</div>
						<div class="pageFormContent" layoutH="80">

						</div>
						
					</div>
					
				</div>
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; <?php echo date('Y');?> </div>

</body>

<script src="dwz/js/speedup.js" type="text/javascript"></script>
<script src="dwz/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="dwz/js/jquery.bgiframe.js" type="text/javascript"></script>
<script src="xheditor/xheditor-1.2.1.min.js" type="text/javascript"></script>
<script src="uploadify/scripts/jquery.uploadify.js" type="text/javascript"></script>
<script src="dwz/js/dwz.min.js" type="text/javascript"></script>
<script src="dwz/js/dwz.regional.zh.js" type="text/javascript"></script>
<script src="js/crm.js" type="text/javascript"></script>
</html>
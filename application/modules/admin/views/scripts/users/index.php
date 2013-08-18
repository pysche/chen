<div class="pageHeader">
	<form id="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->URL; ?>" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="orderField" value="<?php echo $_REQUEST['orderField']?>"/>
	<input type="hidden" name="orderDirection" value="<?php echo $_REQUEST['orderDirection']?>"/>
	
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>用户名：</label>
				<input type="text" name="Username" value="<?php echo $_REQUEST['Username']?>"/>
			</li>
			<li>
				<label>姓名</label>
				<input type="text" name="Realname" value="<?php echo $_REQUEST['Realname']?>"/>
			</li>
		</ul>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
			</ul>
		</div>
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" width='750' height='550' href="<?php echo $this->URL; ?>/add" target="navTab" mask="true" title="添加用户"><span>添加用户</span></a></li>
			<li><a class="delete" href="<?php echo $this->URL; ?>/foreverdelete?id={sid_obj}&navTabId=<?php echo $this->MODULE?>" target="ajaxTodo" title="你确定要删除吗？" warn="请选择一个用户"><span>删除</span></a></li>
			<li><a class="edit" width='750' height='550' href="<?php echo $this->URL; ?>/edit?id={sid_obj}" target="navTab" mask="true" warn="请选择一个用户" title="编辑用户"><span>编辑用户</span></a></li>
		</ul>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
		<tr>
			<th width="100" orderField="code" <?php if ($_REQUEST['orderField'] == 'code') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>编号</th>
			<th orderField="name" <?php if ($_REQUEST['orderField'] == 'name') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>名称</th>
			<th>最后登录</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($this->list as $vo){?>
			<tr target="sid_obj" rel="<?php echo $vo->id;?>">
				<td><?php echo $vo->Username;?></td>
				<td><?php echo $vo->Realname;?></td>
				<td><?php echo $vo->LastLogin ? date('Y-m-d H:i:s', $vo->LastLogin) : '--';?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>

	<div class="panelBar">
		<div class="pages">
			<span>共<?php echo $this->totalCount;?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->totalCount;?>" numPerPage="<?php echo $this->numPerPage;?>" pageNumShown="10" currentPage="<?php echo $this->currentPage;?>"></div>
	</div>

</div>



<div class="pageHeader">
	<form id="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->URL; ?>" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="orderField" value="<?php echo $_REQUEST['orderField']?>"/>
	<input type="hidden" name="orderDirection" value="<?php echo $_REQUEST['orderDirection']?>"/>
	
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>分类名:</label>
				<input type="text" name="Title" value="<?php echo $_REQUEST['Title']?>"/>
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
			<li><a class="add" href="<?php echo $this->URL; ?>/add" target="dialog" mask="true" title="添加分类"><span>添加分类</span></a></li>
			<li><a class="delete" href="<?php echo $this->URL; ?>/foreverdelete?id={sid_obj}&navTabId=<?php echo $this->MODULE?>" target="ajaxTodo" title="你确定要删除吗？" warn="请选择一条数据"><span>删除</span></a></li>
			<li><a class="edit" href="<?php echo $this->URL; ?>/edit?id={sid_obj}" target="dialog" mask="true" warn="请选择一条数据" title="编辑分类"><span>编辑分类</span></a></li>
		</ul>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
		<tr>
			<th width="5%" orderField="Title" <?php if ($_REQUEST['orderField'] == 'Title') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>分类</th>
			<th width='40%' orderField="SortNum" <?php if ($_REQUEST['orderField'] == 'SortNum') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>排序</th>
			<th orderField="CreateTime" <?php if ($_REQUEST['orderField'] == 'CreateTime') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>添加时间</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($this->list as $vo){?>
			<tr target="sid_obj" rel="<?php echo $vo->id;?>">
				<td><?php echo $vo->Title;?></td>
				<td><?php echo $vo->SortNum;?></td>
				<td><?php echo $vo->CreateTime ? date('Y-m-d H:i:s', $vo->CreateTime) : '--';?></td>
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



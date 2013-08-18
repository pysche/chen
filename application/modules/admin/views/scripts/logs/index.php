<div class="pageHeader">
	<form id="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->URL; ?>" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="orderField" value="<?php echo $_REQUEST['orderField']?>"/>
	<input type="hidden" name="orderDirection" value="<?php echo $_REQUEST['orderDirection']?>"/>
	
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>操作内容</label>
				<input type="text" name="Content" value="<?php echo $_REQUEST['Content']?>"/>
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

	<table class="table" width="100%" layoutH="138">
		<thead>
		<tr>
			<th width="100" orderField="code" <?php if ($_REQUEST['orderField'] == 'Uid') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>用户Id</th>
			<th orderField="name" <?php if ($_REQUEST['orderField'] == 'Uid') { echo 'class="'.$_REQUEST['orderDirection'].'"'; }?>>IP地址</th>
			<th>操作时间</th>
			<th>操作内容</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($this->list as $vo){?>
			<tr target="sid_obj" rel="<?php echo $vo->id;?>">
				<td><?php echo $vo->Uid;?></td>
				<td><?php echo $vo->Ip;?></td>
				<td><?php echo date('Y-m-d H:i:s', $vo->ActTime);?></td>
				<td><?php echo $vo->Message;?></td>
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



<?php include(dirname(__FILE__).'/../include/header.php');?>
<?php include(dirname(__FILE__).'/../include/top.php');?>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="125" valign="top"><img src="images/banner8.jpg" width="1003" height="120" /></td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td height="101" valign="top" bgcolor="#FFFFFF"><table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="61"><img src="images/menu07.gif" width="257" height="53" /></td>
      </tr>
    </table>
      <?php foreach ($this->list as $vo) { ?>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>
          <td width="150" class="w01"><img src="<?php echo Lja_File::Url($vo->FirstAttach);?>" width="130" height="100" /></td>
          <td class="w01"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><span class="w02"><strong>酒店名称：<?php echo $vo->Title;?></strong></span><br />
酒店地址：<?php echo $vo->Address;?></td>
            </tr>
            <tr>
              <td align="right"><a href="<?php echo $this->URL;?>/read?id=<?php echo $vo->id;?>"><img src="images/more.gif" width="55" height="20" border="0" /></a></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="34" class="w01">-----------------------------------------------------------------------------------------------------------------------------------------------------</td>
        </tr>
      </table>
      <?php } ?>
      <br />
      <table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="50" align="center" class="w03">首页 上一页 下一页 1 2 3 4 5 ... 第
            <input name="textfield" type="text" size="5" />
          页</td>
        </tr>
      </table></td>
  </tr>
</table>
<?php include(dirname(__FILE__).'/../include/bottom.php');?>
<?php include(dirname(__FILE__).'/../include/footer.php');?>
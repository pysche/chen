<?php include(dirname(__FILE__).'/../include/header.php');?>
<?php include(dirname(__FILE__).'/../include/top.php');?>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="125" valign="top"><img src="images/banner10.jpg" width="1003" height="120" /></td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td height="101" valign="top" bgcolor="#FFFFFF"><table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="61"><img src="images/index_2013_17.gif" width="273" height="53" /></td>
      </tr>
    </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="722" height="54" align="center" class="w05"><strong><?php echo $this->vo->Title;?></strong></td>
        </tr>
        <tr>
          <td height="24" align="center" class="w01">发布时间：<?php echo $this->vo->CreateTime;?></td>
        </tr>
        <tr>
          <td height="24" align="center" class="w01">----------------------------------------------------------------------------------------------------------------------------------------------------</td>
        </tr>
        <tr>
          <td class="w05" style='padding: 10px;'>
            <?php echo $this->vo->Content;?>
          </td>
        </tr>
      </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      </table>
    </td>
  </tr>
</table>
<?php include(dirname(__FILE__).'/../include/bottom.php');?>
<?php include(dirname(__FILE__).'/../include/footer.php');?>
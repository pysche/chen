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
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>
          <td width="310" class="w01"><img src="<?php echo Lja_File::Url($this->vo->FirstAttach);?>" width="300" height="225" /><br />
            <br />
            <table width="300" border="0" cellpadding="5" cellspacing="2" bgcolor="#C7C4BC">
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="w03"><strong class="w02">每晚起价<br />
                <?php echo $this->vo->Price;?> RMB</strong></td>
            </tr>
          </table>
          <br /></td>
          <td width="590" valign="top" class="w01"><table width="588" height="51" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="51"><span class="w02"><strong>酒店名称：<?php echo $this->vo->Title;?></strong></span></td>
            </tr>

          </table>
            <table width="588" height="77" border="0" cellpadding="0" cellspacing="2">
              <tr>
                <td width="97" align="right" valign="top"><strong>酒店地址</strong>：</td>
                <td width="485"><?php echo $this->vo->Address;?></td>
              </tr>
              <tr>
                <td align="right" valign="top"><strong>酒店简介</strong>：</td>
                <td><?php echo $this->vo->Content;?></td>
              </tr>
              <tr>
                <td align="right" valign="top"><strong>酒店菜系</strong>：</td>
                <td><?php echo $this->vo->Category;?></td>
              </tr>
              <tr>
                <td align="right" valign="top"><strong>联系方式</strong>：</td>
                <td><?php echo $this->vo->ContactInfo;?></td>
              </tr>
              <tr>
                <td align="right" valign="top"><strong>特色</strong>：</td>
                <td><?php echo $this->vo->Specials;?></td>
              </tr>
              <tr>
                <td align="right" valign="top" class="w04"><strong>安诚会员价</strong>：</td>
                <td class="w04"><?php echo $this->vo->MemberPrice;?></td>
              </tr>
            </table></td>
        </tr>
    </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <?php for ($i=1;$i<count($this->files);$i++) { ?>
          <td height="229" align="center"><span class="w01"><img src="<?php echo Lja_File::Url($this->files[$i]['id']);?>" width="280" height="210" /></span></td>
          <?php } ?>
        </tr>
      </table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div id='maps' style='width: 900px; height: 513px;'></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php include(dirname(__FILE__).'/../include/bottom.php');?>
<script type='text/javascript'>

function Lja_LoadBaiduMapScript(callback)
{
  var script = document.createElement('script');
  script.src = 'http://api.map.baidu.com/api?v=1.3&callback='+callback;
  document.body.appendChild(script);
}

function Lja_RenderAddressMap()
{
  bmap = new BMap.Map('maps');
  bpointer = new BMap.Point(<?php echo $this->vo->PositionLongitude ? $this->vo->PositionLongitude : '120.625419';?>, <?php echo $this->vo->PositionLatitude ? $this->vo->PositionLatitude : '31.311701';?>);
  bmarker = new BMap.Marker(bpointer);

  blabel = new BMap.Label();
  blabel.setTitle('<?php echo $this->vo->Title;?>');
  blabel.setContent('<?php echo $this->vo->Address;?>');
  blabel.setPosition(bmarker.getPosition());

  bmap.addOverlay(blabel);
  bmap.addOverlay(bmarker);
  bmap.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, offset: new BMap.Size(10, 10)}));
  bmap.centerAndZoom(bpointer, 13);
  bmap.enableScrollWheelZoom();
}

$(function() {
  Lja_LoadBaiduMapScript('Lja_RenderAddressMap');
});
</script>
<?php include(dirname(__FILE__).'/../include/footer.php');?>
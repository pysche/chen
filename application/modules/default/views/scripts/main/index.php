<?php include(dirname(__FILE__).'/../include/header.php');?>
<?php include(dirname(__FILE__).'/../include/top.php');?>

<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>

      <div id="banner">
        <div class="slides_container">
        <?php foreach ($this->banners as $file) { ?>
        <a href='javascript:void(0);'><img width='806' height='225' src='<?php echo Lja_File::Url($file['id']);?>' /></a>
        <?php } ?>
      </div>
    </td>
    <td><img src="images/ac_g_10.gif" width="198" height="225" /></td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="206" valign="top"><table width="209" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/ac_g_11.gif" width="209" height="56" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_12.gif" width="209" height="41" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_13.gif" width="209" height="41" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_14.gif" width="209" height="41" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_15.gif" width="209" height="41" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_16.gif" width="209" height="41" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_17.gif" width="209" height="41" /></td>
      </tr>
      <tr>
        <td><img src="images/ac_g_18.gif" width="209" height="11" /></td>
      </tr>
    </table>
      <table width="209" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><a href="/questions"><img src="images/ac_g_29.gif" width="209" height="62" border="0" /></a></td>
        </tr>
        <tr>
          <td><img src="images/ac_g_30.gif" width="209" height="62" border="0" usemap="#Map" /></td>
        </tr>
        <tr>
          <td><img src="images/ac_g_31.gif" width="209" height="61" border="0" usemap="#Map3" /></td>
        </tr>
      </table></td>
    <td valign="top"><table width="794" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="456" height="110" valign="top"><table width="456" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/index_2013_01.gif" width="456" height="150" border="0" usemap="#Map4" /></td>
          </tr>
          <tr>
            <td height="88" background="images/index_2013_02.gif" valign="top"><table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
            <?php
              foreach ($this->news as $news) {
            ?>
              <tr>
                <td width="339" height="30" class="w01">·<a href="/news/read?id=<?php echo $news['id'];?>" target="_blank" class="w01"><?php echo Lja_Funcs::cutstr($news['Title'], 24);?></a></td>
                <td width="71" align="right" class="w01"><?php echo substr($news['CreateTime'], 0, 10);?></td>
              </tr>
            <?php
              }
            ?>
            </table></td>
          </tr>
          <tr>
            <td><img src="images/index_2013_03.gif" width="456" height="13" /></td>
          </tr>
        </table></td>
        <td valign="top"><table width="338" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="112" height="142" valign="top"><table width="112" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_2013_04.gif" width="112" height="150" /></td>
              </tr>
              <tr>
                <td background="images/index_2013_05.gif">&nbsp;</td>
              </tr>
              <tr>
                <td><img src="images/index_2013_06.gif" width="112" height="134" /></td>
              </tr>
            </table></td>
            <td valign="top"><table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_2013_07.gif" width="226" height="20" /></td>
              </tr>
              <tr>
                <td height="274" valign="top" background="images/index_2013_08.gif"><table width="216" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><span class="w01">　　苏州安诚汽车代驾服务有限公司是工商局正式批准注册汽车代驾服务中心，注册资本50万，系苏州首家专业并主要从事酒后代驾的服务型公司，除此之外公司还开展旅游、商务、婚庆代驾以及汽车租赁等业务。公司为客户提供正规机打发票。我们致力于打造苏州最专业、最安全、服务最优质的代驾企业。 <br />
                    　　为保证我公司代驾服务质量和客户的人身及财产安全，我公司特制订...</span></td>
                  </tr>
                  <tr>
                    <td align="right"><a href="/aboutus"><img src="images/more.gif" width="55" height="20" border="0" /></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/index_2013_09.gif" width="226" height="12" /></td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
      </tr>
    </table>
      <table width="794" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><a href="/services"><img src="images/ac_g_32a.gif" width="157" height="236" border="0" id="Image7" onmouseover="MM_swapImage('Image7','','images/ac_g_32.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          <td><a href="/services/travel"><img src="images/ac_g_34a.gif" width="159" height="236" border="0" id="Image9" onmouseover="MM_swapImage('Image9','','images/ac_g_34.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          <td><a href="/services/biz"><img src="images/ac_g_33a.gif" width="160" height="236" border="0" id="Image8" onmouseover="MM_swapImage('Image8','','images/ac_g_33.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          <td><a href="/services/long"><img src="images/ac_g_35a.gif" width="160" height="236" border="0" id="Image10" onmouseover="MM_swapImage('Image10','','images/ac_g_35.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          <td><a href="/services/train"><img src="images/ac_g_36a.gif" width="158" height="236" border="0" id="Image13" onmouseover="MM_swapImage('Image13','','images/ac_g_36.gif',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#D7D7D7">
  <tr>
    <td height="189" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="160" background="images/index_2013_11.gif"><img src="images/index_2013_10.gif" width="160" height="35" /></td>
        <td width="754" background="images/index_2013_11.gif">&nbsp;</td>
        <td width="87" align="center" background="images/index_2013_11.gif"><a href="/drivers"><img src="images/more2.gif" width="44" height="13" border="0" /></a></td>
      </tr>
    </table>
      <table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <?php foreach ($this->drivers as $driver) { ?>
        <td height="195" align="center" class="w01"><a href="#"><img src="<?php echo Lja_File::Url($driver['FirstAttach']);?>" width="120" height="150" border="0" /></a><br />
            <u class="w01"><a href="#" class="w01"><?php echo $driver['Title'];?></a></u></td>
        <?php } ?>
      </tr>
    </table></td>
  </tr>
</table>
<?php include(dirname(__FILE__).'/../include/bottom.php');?>
<script type='text/javascript' src='/js/slides.js'></script>
<script type='text/javascript'>
$(function() {
  $('#banner').slides({
    preload: true,
    preloadImage: '/img/loading.gif',
    play: 3000,
    pause: 2500,
    hoverPause: true
  });

});
</script>
<style type='text/css'>
#banner {
  float: left;
  height: 225px !important;
  margin: 5px 0 0;
  width: 806px !important;
}
.slides_container {
    display: none;
    overflow: hidden;
    position: relative;
    width: 806px;
    height:225px;
}
.slides_container a {
    display: block;
    height: 215px;
    width: 806px;
}
.slides_container a img {
    display: block;
}
#slides .next, #slides .prev {
    display: block;
    height: 43px;
    left: -39px;
    position: absolute;
    top: 107px;
    width: 24px;
    z-index: 101;
}
#slides .next {
    left: 585px;
}
</style>

<map name="Map2" id="Map2"><area shape="rect" coords="13,11,238,114" href="/" />
</map>
<map name="Map" id="Map"><area shape="rect" coords="6,5,199,56" href="http://hao.360.cn/weizhang.html" target="_blank" />
</map>
<map name="Map3" id="Map3"><area shape="rect" coords="8,5,201,55" href="http://hao.360.cn/weizhang.html" target="_blank" />
</map>
<map name="Map4" id="Map4">
<area shape="rect" coords="394,14,461,43" href="/news" />
</map>

<?php include(dirname(__FILE__).'/../include/footer.php');

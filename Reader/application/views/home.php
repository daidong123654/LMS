<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>和谐社区图书馆</title>
<?//echo base_url();?>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>/css/dsb_base.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>/css/dsb_index_other.css">

<script type="text/javascript" src="<?php echo base_url()?>/js/dsb_win.js"></script>

<link rel="alternate" type="application/rss+xml" title="最新公告" href="http://www.nlc.gov.cn/newRss/zwrss/zxgg/index.xml">

<link rel="alternate" type="application/rss+xml" title="国图新闻" href="http://www.nlc.gov.cn/newRss/zwrss/gtxw/index.xml">

<link rel="alternate" type="application/rss+xml" title="书刊推介" href="http://www.nlc.gov.cn/newRss/zwrss/sktj/index.xml">

<link rel="alternate" type="application/rss+xml" title="最新预告" href="http://www.nlc.gov.cn/newRss/zwrss/zxyg/index.xml">

<link rel="alternate" type="application/rss+xml" title="在线展览" href="http://www.nlc.gov.cn/newRss/zwrss/zxzl/index.xml">


<script language="javascript">
function winSizer(){
windowWidth = window.screen.availWidth;
windowHeight = window.screen.availHeight;
window.moveTo(0,0);
window.resizeTo(windowWidth,windowHeight);
}

var tmArray_dh = [
    {lose_f:".//images/dsb_index1101yyc_13.jpg",get_f:".//images/dsb_index1125yyc_01.jpg"},
	{lose_f:".//images/dsb_index1101yyc_14.jpg",get_f:".//images/dsb_index1125yyc_02.jpg"},
	{lose_f:".//images/dsb_index1101yyc_15.jpg",get_f:".//images/dsb_index1125yyc_03.jpg"},
	{lose_f:".//images/dsb_index1101yyc_16.jpg",get_f:".//images/dsb_index1125yyc_04.jpg"},
	{lose_f:".//images/dsb_index1101yyc_17.jpg",get_f:".//images/dsb_index1125yyc_05.jpg"},
	{lose_f:".//images/dsb_index1101yyc_18.jpg",get_f:".//images/dsb_index1125yyc_06.jpg"},
	{lose_f:".//images/dsb_index1101yyc_19.jpg",get_f:".//images/dsb_index1125yyc_07.jpg"},
	{lose_f:".//images/dsb_index1101yyc_20.jpg",get_f:".//images/dsb_index1125yyc_08.jpg"}
	
];

function CL(n){

	for(i=0; i <8; i++)
		{
		
			if (i == n)
			{
				document.getElementById("tp00"+i).src=tmArray_dh[i].get_f;
				document.getElementById("ff").className  = "show";
			}else{
				document.getElementById("tp00"+i).src=tmArray_dh[i].lose_f;
				
			}
			
		} 
		
}
function CL1(n){

	for(i=0; i <8; i++)
		{
		
			if (i == n)
			{
				document.getElementById("tp00"+i).src=tmArray_dh[i].get_f;
				document.getElementById("bc00"+i).className  = "show";
				document.getElementById("top1").className  = "hide";
				document.getElementById("ff").className  = "show";
			}else{
				document.getElementById("tp00"+i).src=tmArray_dh[i].lose_f;
				document.getElementById("bc00"+i).className  = "hide";
				document.getElementById("top1").className  = "hide";
				
			}
			
		} 
		
}



function fhsy(obj){
		switch(obj){
			case 0:
				document.getElementById("ff").className="hide";
				break;
		}
}

function submitf(){
	if(document.getElementById("ft").value==""){
		alert("");
		return;
	}else{
		//alert(document.getElementById("slt").value);
		if(document.getElementById("slt").value=="0"){
			urlstr=encodeURI("http://opac.nlc.gov.cn/F/?request="+document.getElementById("ft").value+"&func=find-m&find_code=WRD&FIND_BASE=NLC01&FIND_BASE=NLC09");
			window.location.href = urlstr;
			
		}else if(document.getElementById("slt").value=="1"){
			urlstr=encodeURI("http://res4.nlc.gov.cn/home/search.trs?method=advSearch&channelid=19&ifmulty=1&pageSize=20&parmName=bookname&parmValue="+document.getElementById("ft").value+"&amp;urlEncodeFlag=true&amp;resourceid=1&amp;resourceid=2&amp;resourceid=3&amp;resourceid=4&amp;resourceid=5&amp;resourceid=6&amp;resourceid=7&amp;resourceid=8&amp;resourceid=9&amp;resourceid=10&amp;resourceid=11&amp;resourceid=12&amp;resourceid=13&amp;resourceid=19&amp;Submit=GO");
			window.location.href = urlstr;
			
		}else if(document.getElementById("slt").value=="2"){
			document.getElementById("shtb").value=document.getElementById("ft").value
			document.main_form.submit();
			return ;
		}else if(document.getElementById("slt").value=="3"){
			urlstr=encodeURI("http://202.106.125.42:8080/search/search?channelid=154615&templet=nlc_outline.jsp&token=1.1328063976107.41&searchword="+document.getElementById("ft").value);
			window.location.href = urlstr;
		}
	}
	
}
function keyact(){
	if(window.event.keyCode==13){
		submitf();
        }
}
</script>

<style type="text/css">
<!--
#lovexin12{
   width:36px;
   height:162px;
}
#ft{ background:url(./zy_120313mai_07.jpg);}
.a-lan{ color:#05576e; text-decoration:none;}
.a-lan:hover{ color:#05576e; text-decoration:underline;}

.a-fhsy{ color:#18657b; text-decoration:none;}
.a-fhsy:hover{ color:#18657b; text-decoration:none;}
-->
</style>
<style type="text/css">
    #msg_win{position:absolute;right:-2px;display:none;overflow:hidden;z-index:99;width:255px;font-size:12px;margin:0px;}
    #msg_win .icos{position:absolute;top:2px;*top:0px;right:2px;z-index:9;}
    .icos a{float:left;color:#FFFFFF;margin:1px;text-align:center;font-weight:bold;width:14px;height:22px;line-height:22px;padding:1px;text-decoration:none;font-family:webdings;}
    .icos a:hover{color:#FFFFFF;}
    #msg_title{height:24px;line-height:24px; }
    #msg_content{margin:5px;margin-right:17px;width:255px;overflow:hidden;}
#uboxstyle .select_box{width:100px;height:27px;}


#uboxstyle div.tag_select{display:block; color:#000; width:80px; height:27px; background:transparent url(".//images/ubox-select.jpg") no-repeat 0 0; padding:0 10px; line-height:27px;}
#uboxstyle div.tag_select_hover{display:block; color:#000; width:80px; height:27px; background:transparent url(".//images/ubox-select.jpg") no-repeat 0 -27px; padding:0 10px;line-height:27px;}
#uboxstyle div.tag_select_open{display:block; color:#000; width:80px; height:27px; background:transparent url(".//images/ubox-select.jpg") no-repeat 0 -54px; padding:0 10px;line-height:27px;}

#uboxstyle ul.tag_options{position:absolute;padding:0;margin:0;list-style:none;background:transparent url(".//images/ubox-select.jpg") no-repeat right bottom;width:100px;padding:0 0 5px;margin:0;}
#uboxstyle ul.tag_options li{background:transparent url(".//images/ubox-select.jpg") repeat-y -100px 0;display:block;width:80px;padding:0 10px;height:24px;text-decoration:none;line-height:24px;color:#000;}

#uboxstyle ul.tag_options li.open_hover{background:transparent url(".//images/ubox-select.jpg") no-repeat 0 -81px;color:#fff}
#uboxstyle ul.tag_options li.open_selected{background:transparent url(".//images/ubox-select.jpg") no-repeat 0 -105px;color:#fff}
    </style>
<style>#haloword-pron { background: url(chrome-extension://bhkcehpnnlgncpnefpanachijmhikocj/img/icon.svg) -94px -32px; }#haloword-pron:hover { background: url(chrome-extension://bhkcehpnnlgncpnefpanachijmhikocj/img/icon.svg) -110px -32px; }#haloword-open { background: url(chrome-extension://bhkcehpnnlgncpnefpanachijmhikocj/img/icon.svg) -94px -16px; }#haloword-open:hover { background: url(chrome-extension://bhkcehpnnlgncpnefpanachijmhikocj/img/icon.svg) -110px -16px; }#haloword-close { background: url(chrome-extension://bhkcehpnnlgncpnefpanachijmhikocj/img/icon.svg) -94px 0; }#haloword-close:hover { background: url(chrome-extension://bhkcehpnnlgncpnefpanachijmhikocj/img/icon.svg) -110px 0; }</style></head>
<body onload="winSizer();" leftmargin="0" topmargin="0" onkeydown="keyact();">
<table align="center" width="1024" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="147" valign="top"><table width="1024" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="112" valign="top" background="<?php echo base_url()?>/images/title.jpg" style="background-repeat:no-repeat;"><table width="836" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td colspan="2" height="102" valign="bottom"><div align="right"><a href="http://www.nlc.gov.cn/newen/" target="_blank"><img src="<?php echo base_url()?>/images/dsb_index1115yf_01.jpg" width="56" height="22"></a><a href="http://www.nlc.gov.cn/dsb_footer/rss/" target="_blank"><img src="<?php echo base_url()?>/images/dsb_index1115yf_02.jpg" width="53" height="22"></a></div></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td height="35" valign="top" background="<?php echo base_url()?>/images/dsb_index1101yyc_80.jpg"><table width="836" height="35" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="9"><img src="<?php echo base_url()?>/images/dsb_index1101yyc_03.jpg"></td>
            <td width="819" valign="top" background="<?php echo base_url()?>/images/dsb_index1101yyc_79.jpg"><table width="819" height="35" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="30"></td>
                <td width="77" valign="top"></td>
                <td width="5"></td>
                <td valign="top" width="77"><table width="77" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td height="6"></td>
                  </tr>
                  
                  <tr>
                    <td valign="top"></td>
                  </tr>
                </tbody></table></td>
                <td width="5"></td>
                <td valign="top" width="77"><table width="77" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td height="6"></td>
                  </tr>
                  <tr>
                    <td valign="top"></td>
                  </tr>
                </tbody></table></td>
                <td width="164"></td>
                <td width="384" background="<?php echo base_url()?>/images/dsb_index1101yyc_05.jpg" style="background-repeat:no-repeat;" align="right" class="fs14p cf fwb"><script src="<?php echo base_url()?>/images/dsb_nongli.js" type="text/javascript" language="javascript"></script><?
				echo $date['west_date']."&nbsp".$date['chinese_date']
				?></td>
              </tr>
            </tbody></table></td>
            <td width="8"><img src="<?php echo base_url()?>/images/dsb_index1101yyc_04.jpg"></td>
          </tr>
        </tbody></table></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
<table align="center" width="1024" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_index1101yyc_70.jpg" style="background-repeat:repeat-y;"><table align="center" width="1024" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top"><table width="1024" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td valign="top"><table width="1024" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="94" align="center" valign="top"><table width="94" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="94" valign="top" align="left" style="padding-left:15px;"></td>
  </tr>
</tbody></table></td>
                
				
                
              
                <td valign="top" align="left" style="padding-left:6px;"><h1>在这里插入新闻</h1></td>
                <td width="95" valign="top" align="left"><table align="left" width="95" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="95" valign="top" align="left" style="padding-left:6px;">
</td>
  </tr>
  <tr>
    <td valign="top"></td>
  </tr>
</tbody></table></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td valign="top" width="1024"><table width="1024" align="center" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="94" align="left" valign="top"><!--对联广告-->

      <table width="93" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td align="left" valign="top" style="padding-left:14px;"><script language="JavaScript" type="text/javascript">
lastScrollY=0;
function hide12()  
{   
lovexin12xx.style.visibility="hidden"; 
}
function heartBeatleft(){ 
var diffnY;
if (document.documentElement && document.documentElement.scrollTop)



    diffnY = document.documentElement.scrollTop;
else if (document.body)
    diffnY = document.body.scrollTop
else
    {/*Netscape stuff*/}
    
//alert(diffnY);
percent=.1*(diffnY-lastScrollY); 
if(percent>0)percent=Math.ceil(percent); 
else percent=Math.floor(percent); 
document.getElementById("lovexin12xx").style.top=parseInt(document.getElementById

("lovexin12xx").style.top)+percent+"px";

lastScrollY=lastScrollY+percent; 
//alert(lastScrollY);
}

</script></td>
  
  </tr>
</tbody></table></td>
    <td width="5"></td>
    <td width="824" valign="top"><table width="824" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td valign="top" align="left"><table width="824" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td valign="bottom"><table width="824" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td height="111" align="left" valign="bottom" style="padding-bottom:15px;" background="<?php echo base_url()?>/images/ss_120323mak_01.jpg">
						  
						  <form style="margin:0px;">
						  <input type="text" name="textfield2" style="display:none;">
						  <table border="0" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                              <td width="74" align="center" valign="middle">&nbsp;</td>
                              <td width="325" align="left" valign="middle">
                                <table width="325" border="0" cellspacing="0" cellpadding="0">
                                  <tbody><tr>
                                    <td align="center" valign="middle" background="<?php echo base_url()?>/images/zy_120313mai_06.jpg"><input name="text" type="text" id="ft" style="color:#000; width:290px; height:25px; font-size:13px; line-height:25px; border:0px;"></td>
                                  </tr>
                                </tbody></table></td>
                              <td width="100" align="left" valign="middle" style="padding-left:3px;">
							  
							  <div id="uboxstyle">
							    <div id="select_slt" class="select_box"><div id="select_info_slt" class="tag_select" style="cursor: pointer; ">馆藏目录</div><ul id="options_slt" class="tag_options" style="position: absolute; display: none; z-index: 999; "><li style="cursor: pointer; " class="open_selected" id="selected_slt">馆藏目录</li><li style="cursor: pointer; " class="open">特色资源</li><li style="cursor: pointer; " class="open">地方馆资源</li><li style="cursor: pointer; " class="open">站内检索</li></ul></div><select name="slt" id="slt" style="font-size: 12px; color: rgb(0, 0, 0); display: none; ">
                                  <option value="0">馆藏目录</option>
                                  <option value="1">特色资源</option>
                                  <option value="2">地方馆资源</option>
                                  <option value="3">站内检索</option>
                                </select>
							  </div></td>
                              <td width="86" style="padding-left:3px;"><a href="http://www.nlc.gov.cn/#" onclick="submitf();"><img src="<?php echo base_url()?>/images/zy_120313mai_05.jpg" width="86" height="27" border="0"></a></td>
                            </tr>
                            <tr>
                              <td align="center" valign="middle"></td>
                              <td height="10" align="center" valign="middle"></td>
                              <td align="left" valign="middle"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td align="center" valign="bottom">&nbsp;</td>
                              <td align="center" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                  <td align="right" valign="bottom"><a href="http://opac.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/dsb_dh120322mak_01.jpg" border="0"></a></td>
                                  <td width="110" align="left" valign="bottom"><a href="http://mylib.nlc.gov.cn/web/guest/search" target="_blank"><img src="<?php echo base_url()?>/images/dsb_dh120322mak_02.jpg" border="0"></a></td>
                                  <td align="left" valign="bottom"><a href="http://mylib.nlc.gov.cn/web/guest/zhengjiguanzangteseziyuan" target="_blank"><img src="<?php echo base_url()?>/images/dsb_dh120322mak_03.jpg" border="0"></a></td>
                                </tr>
                              </tbody></table></td>
                              <td align="left" valign="middle">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </tbody></table>
                          </form></td>
                          <td width="120" align="right" valign="middle"><table width="120" border="0" cellspacing="0" cellpadding="0">
                            
							<tbody><tr>
                              <td align="right" valign="middle"><a href="http://mylib.nlc.gov.cn/web/guest/reader_login?redirect=/web/guest/home" target="_blank"><img src="<?php echo base_url()?>/images/W020120929339570819048.jpg"></a></td>
                            </tr>
                            
                            
							<tr>
                              <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="20" valign="top" align="center" style="padding-top:5px;"></td>
    <td width="8"></td>
    <td valign="top" align="right"><a href="http://mylib.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120929339681734907.jpg"></a></td>
  </tr>
</tbody></table>
</td>
                            </tr>
                            
                            
							<tr>
                              <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="20" valign="top" align="center" style="padding-top:5px;"><a href="http://find.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120928684975297605.gif"></a></td>
    <td width="8"></td>
    <td valign="top" align="right"><a href="http://find.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120929339849124055.jpg"></a></td>
  </tr>
</tbody></table>
</td>
                            </tr>
                            
							<tr>
                              <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="20" valign="top" align="center" style="padding-top:5px;"></td>
    <td width="8"></td>
    <td valign="top" align="right"><a href="http://dportal.nlc.gov.cn:8332/zylb/zylb.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120929339965506638.jpg"></a></td>
  </tr>
</tbody></table>
</td>
                            </tr>
                            
							<tr>
                              <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="20" valign="top" align="center" style="padding-top:5px;"></td>
    <td width="8"></td>
    <td valign="top" align="right"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/wszxt/" target="_blank"><img src="<?php echo base_url()?>/images/W020120929346825484857.jpg"></a></td>
  </tr>
</tbody></table>
</td>
                            </tr>
                            
                          </tbody></table></td>
                        </tr>
                      </tbody></table></td>
                    </tr>

                    <tr>
                      <td height="1" bgcolor="#e3e6e8"></td>
                    </tr>
                    
                    <tr>
                      <td valign="top"><table width="824" border="0" cellspacing="0" cellpadding="0">
                         
                          <tbody><tr>
                            <td height="21" align="left" valign="top"><a name="M1"></a><div id="ff" class="hide"><table width="110" border="0" cellspacing="0" cellpadding="0">
                              <tbody><tr>
                                
								<td height="21" align="left" valign="middle" background="<?php echo base_url()?>/images/shouye_120326mak_01.jpg" style="color:#18657b;">　　&nbsp;<a href="<?php echo base_url()?>/images/和谐社区图书馆.htm" class="a-fhsy" onclick="fhsy(0)">返回首页</a></td>
                              </tr>
                            </tbody></table></div></td>
                          </tr>
                          <tr>
                            <td valign="top"><table width="824" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                  <td width="25"></td>
                                  <td width="772" valign="top"><table width="772" border="0" cellspacing="0" cellpadding="0">
                                      <tbody><tr>
                                        <td align="center"><table width="772" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(0)"><img id="tp000" src="<?php echo base_url()?>/images/dsb_index1101yyc_13.jpg" onclick="CL1(0)"></td>
        <td></td>

        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(1)"><img id="tp001" src="<?php echo base_url()?>/images/dsb_index1101yyc_14.jpg" onclick="CL1(1)"></td>
        <td></td>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(2)"><img id="tp002" src="<?php echo base_url()?>/images/dsb_index1101yyc_15.jpg" onclick="CL1(2)"></td>
        <td></td>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(3)"><img id="tp003" src="<?php echo base_url()?>/images/dsb_index1101yyc_16.jpg" onclick="CL1(3)"></td>
        <td></td>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(4)"><img id="tp004" src="<?php echo base_url()?>/images/dsb_index1101yyc_17.jpg" onclick="CL1(4)"></td>
        <td></td>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(5)"><img id="tp005" src="<?php echo base_url()?>/images/dsb_index1101yyc_18.jpg" onclick="CL1(5)"></td>
        <td></td>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(6)"><img id="tp006" src="<?php echo base_url()?>/images/dsb_index1101yyc_19.jpg" onclick="CL1(6)"></td>
        <td></td>
        <td width="90" height="119" align="center" valign="middle" onmousemove="CL(7)"><img id="tp007" src="<?php echo base_url()?>/images/dsb_index1101yyc_20.jpg" onclick="CL1(7)"></td>
      </tr>
    </tbody></table></td>
</tr>
                                    </tbody></table></td>
                                  <td width="27"></td>
                                </tr>
                              </tbody></table></td>
                          </tr>
                        </tbody></table></td>
                    </tr>
                    <tr>
                      <td valign="top">
					  <div id="top1" class="show">
					  
					  	<table width="824" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="213" height="453" align="right" valign="top" background="<?php echo base_url()?>/images/zy_120313mai_01.jpg"><table width="182" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="138" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top" style="line-height:16px; font-size:12px;">
			
				<strong>开馆时间</strong>
				<br><style type="text/css">

</style>
<style type="text/css">
</style><font color="#5d5d5d"><font color="#4f5c6d">总馆南区：</font>封闭维修改造中<br>
总馆北区：<br>
周一至周五 9：00--21：00<br>
周六至周日 9：00--17：00 <br>
少年儿童馆：<br>
周一至周日9：00--17：00 <br>
古 籍 馆：<br>
周一至周五9：00--17：00</font>
					</td>
      </tr>
      <tr>
        <td width="151" height="20" align="right" valign="middle" style="font-size:12px;"><a class="a-lan" href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_kgsj/">更多&gt;&gt;</a></td>
        <td width="31" align="right" valign="middle" style="font-size:12px;">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" align="left" valign="top" style="color:#05576e; line-height:20px; padding-top:13px;">　　<a href="http://www.nlc.gov.cn/newhjzx/"><img src="<?php echo base_url()?>/images/W020120327554277384670.jpg"></a></td>
      </tr>
	  <tr>
        <td colspan="2" align="left" valign="top" style="line-height:20px;">　　<a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/yjjy/"><img src="<?php echo base_url()?>/images/W020120327554895770589.jpg"></a></td>
      </tr>
    </tbody></table></td>
    <td width="397" align="left" valign="top"><table width="397" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="224" align="center" valign="top" background="<?php echo base_url()?>/images/zy_120313mai_02.jpg"><table width="94%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="143">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
		  <tr>
            <td height="28" align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201011/t20101122_11696.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314335286742017.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201011/t20101122_11692.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314336435386730.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201104/t20110411_40390.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314341183114601.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201011/t20101122_11693.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314344520913795.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201106/t20110614_44208.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314344731982112.jpg"></a></td>
          </tr>
		  
		  <tr>
            <td height="28" align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201011/t20101122_11697.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314345563315672.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201011/t20101122_11695.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314345954877196.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newkyck/kyfw/201011/t20101122_11694.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120314346170005241.jpg"></a></td>
            <td align="left" valign="middle"><a href="http://www.nlc.gov.cn/newqyzx/zxjj/cpyfw/" target="_blank"><img src="<?php echo base_url()?>/images/W020120726322025546451.png"></a></td>
            <td align="left" valign="middle"><a href="http://mobile.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120726323044704631.png"></a></td>
          </tr>
		  
        </tbody></table></td>
      </tr>
      <tr>
        <td height="229" align="left" valign="top" background="<?php echo base_url()?>/images/zy_120313mai_03.jpg"><table width="94%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td width="63%" height="75">&nbsp;</td>
            <td width="37%">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" valign="top"><table width="89%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td height="30" align="left" valign="middle"><a href="http://pcab.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120316385538286908.jpg"></a>
                  </td>
              </tr>
              <tr>
                <td height="30" align="left" valign="middle"><a href="http://www.ndlib.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120314530847766247.jpg"></a>
                  </td>
              </tr>
			  <tr>
                <td height="30" align="left" valign="middle"><a href="http://www.nlc.gov.cn/newstgc/" target="_blank"><img src="<?php echo base_url()?>/images/W020120327563826999358.jpg"></a>
                  </td>
              </tr>
            </tbody></table></td>
            <td align="left" valign="top" style="line-height:22px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td height="30" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zyyfw/zdxm/mgsqwxbh/201203/t20120314_60385.htm" class="a-lan">民国时期文献保护计划</a></td>
              </tr>
              <tr>
                <td height="30" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zt/xzzt/dbkrlj/" class="a-lan">中国记忆</a></td>
              </tr>
              <tr>
                <td height="30" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zyyfw/zdxm/ldgbjzgxpt/201203/t20120314_60387.htm" class="a-lan">领导干部讲座共享平台</a></td>
              </tr>
            </tbody></table></td>
          </tr>
        </tbody></table></td>
      </tr>
    </tbody></table></td>
    <td width="214" align="left" valign="top" background="<?php echo base_url()?>/images/zy_120313mai_04.jpg"><table width="214" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="159">&nbsp;</td>
      </tr>
      <tr>
        <td><table width="87%" border="0" cellspacing="0" cellpadding="0">
          
		  <tbody><tr>
            <td width="32%">&nbsp;</td>
            <td width="13%" height="25" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zx/jzyg/" class="a-lan">讲座</a></td>
            <td width="22%" align="left" valign="middle"><img src="<?php echo base_url()?>/images/W020120313598406154126.jpg"></td>
            <td width="13%" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zx/pxyg/" class="a-lan">培训</a></td>
            <td width="20%" align="left" valign="middle"><img src="<?php echo base_url()?>/images/W020120313599967405656.jpg"></td>          </tr>
          
		  <tr>
            <td width="32%">&nbsp;</td>
            <td width="13%" height="25" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zx/zlyg/" class="a-lan">展览</a></td>
            <td width="22%" align="left" valign="middle"><img src="<?php echo base_url()?>/images/W020120313600251013547.jpg"></td>
            <td width="13%" align="left" valign="middle"><a href="http://www.nlc.gov.cn/dsb_zx/ycyg/" class="a-lan">演出</a></td>
            <td width="20%" align="left" valign="middle"><img src="<?php echo base_url()?>/images/W020120313600491884850.jpg"></td>          </tr>
          
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
          <a href="http://vod.nlc.gov.cn/"><img src="<?php echo base_url()?>/images/W020120314552877133139.jpg"></a>
          <br><a href="http://www.nlc.gov.cn/dsb_zyyfw/5dzxzl/"><img src="<?php echo base_url()?>/images/W020120314554086291810.jpg"></a></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
					  </div>
					  
					  
					  
<div id="bc000" class="hide">
<table width="824" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="215" valign="top" background="<?php echo base_url()?>/images/dsb_ylsjs120131mak_01.jpg" style="background-repeat:no-repeat;"><table width="215" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td width="49"></td>
          <td width="166" valign="top"><table width="166" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td height="170" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td height="110"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/" target="_blank"><img src="<?php echo base_url()?>/images/dsb_dzzn120131mak_01.jpg" border="0"></a></td>
                  </tr>
                </tbody></table></td>
              </tr>
             
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#zwtsq" target="_blank"><img src="<?php echo base_url()?>/images/W020111114323121957572.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#jdtsq" target="_blank"><img src="<?php echo base_url()?>/images/W020120331537079757864.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#gjs" target="_blank"><img src="<?php echo base_url()?>/images/W020120331530758745850.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#jczwyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111114324089314981.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#bcbyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111114324321449631.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#wwwxyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111114324651383742.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#rbcbwwkyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111114324959488579.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#tgawxyls" target="_blank"><img src="<?php echo base_url()?>/images/W020120331537231546015.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
              <tr>
                <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#zgnjyls" target="_blank"><img src="<?php echo base_url()?>/images/W020120331531811750195.jpg"></a></td>
              </tr>
              <tr>
                <td height="12"></td>
              </tr>
              
  
            </tbody></table></td>
        </tr>
      </tbody></table></td>
    <td width="392" valign="top" background="<?php echo base_url()?>/images/dsb_index1101yyc_49.jpg" style="background-repeat:repeat-x;"><table width="392" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td height="73"></td>
        </tr>
        <tr>
          <td valign="top"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="102"></td>
                <td width="153" valign="top"><img src="<?php echo base_url()?>/images/dsb_index1101yyc_46.jpg"></td>
                <td width="22"></td>
                <td width="95" align="right" valign="bottom" class="dark-blue1"><a href="http://www.nlc.gov.cn/dsb_zyyfw/ts/tszyk/" class="dark-blue1" target="_blank"><img src="<?php echo base_url()?>/images/dsb_gd120221mak_01.jpg" border="0"></a></td>
                <td width="20"></td>
              </tr>
            </tbody></table></td>
        </tr>
        
        <tr>
          <td height="18"></td>
        </tr>
        <tr>
          <td valign="top"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="19"></td>
                <td width="357" valign="top"><table width="357" border="0" cellspacing="0" cellpadding="0">
                
                    <tbody><tr>
                      <td width="123" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/zhongwentushu" target="_blank"><img src="<?php echo base_url()?>/images/W020120104670306895784.jpg"></a></td>
                      <td width="11"></td>
                      <td width="223" valign="top" class="dark-blue1 lh20p"><a href="http://mylib.nlc.gov.cn/web/guest/zhongwentushu" target="_blank" class="dark-blue1">中国国家图书馆自建中文图书数字资源，共收书26万余种。国家图书馆全面入藏中文图书，115种文字的外国文献……</a></td>
                    </tr>
                    <tr>
                      <td height="40"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    
                  </tbody></table></td>
                <td width="16"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td height="2" align="center" background="<?php echo base_url()?>/images/dsb_index1101yyc_47.jpg" style="background-repeat:no-repeat;"></td>
        </tr>


        
        <tr>
          <td height="40"></td>
        </tr>
        <tr>
          <td valign="top"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="19"></td>
                <td width="357" valign="top"><table width="357" border="0" cellspacing="0" cellpadding="0">
               	
                    <tbody><tr>
                      <td width="123" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/minguotushu" target="_blank"><img src="<?php echo base_url()?>/images/W020120120409904005785.jpg"></a></td>
                      <td width="11"></td>
                      <td width="223" valign="top" class="dark-blue1 lh20p"><a href="http://mylib.nlc.gov.cn/web/guest/minguotushu" target="_blank" class="dark-blue1">该库已推出15028种民国图书全文影像资源，读者可以通过互联网进行浏览和研究。</a></td>
                    </tr>
                    <tr>
                      <td height="30"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    
                  </tbody></table></td>
                <td width="16"></td>
              </tr>
            </tbody></table></td>
        </tr>
        
        <tr>
          <td valign="top"></td>
        </tr>
        <tr>
          <td width="392" valign="top" height="60"></td>
        </tr>
        <tr>
          <td height="16"></td>
        </tr>
      </tbody></table></td>
    <td width="217" valign="top" background="<?php echo base_url()?>/images/dsb_extra0104yyc_3.jpg" style="background-repeat:no-repeat;"><table width="217" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td height="128"></td>
        </tr>
        <tr>
          <td height="20" valign="top"><table width="217" height="20" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="38"></td>
    <td width="179"><a href="http://wenjin.nlc.gov.cn/2011/hjts2011/zhanshi2011.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120327568378940986.jpg"></a></td>
  </tr>
</tbody></table></td>
        </tr>
        <tr>
          <td height="39"></td>
        </tr>
        <tr>

          <td valign="top"><table width="217" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="83"></td>
                <td width="134" valign="top"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td valign="top"><table width="217" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="53"></td>
                <td width="149" valign="top"><table width="149" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td valign="top">
                        <table width="149" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="59"><img src="<?php echo base_url()?>/images/W020120330545943882723.jpg"></td>
                            <td width="10"></td>
                            <td width="80" valign="top" style="padding-top:19px;"><a href="http://www.nlc.gov.cn/newzxfw/sktj/" target="_blank"><img src="<?php echo base_url()?>/images/W020111230487913227782.jpg"></a></td>
                          </tr>
                        </tbody></table>
                        <table width="149" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="15"></td>
  </tr>
</tbody></table>

                        <table width="149" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="59"><img src="<?php echo base_url()?>/images/W020120330546152151044.jpg"></td>
                            <td width="10"></td>
                            <td width="80" valign="top" style="padding-top:19px;"><a href="http://dportal.nlc.gov.cn:8332/nlcdrss/gjs/gjs.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020111230488311183211.jpg"></a></td>
                          </tr>
                        </tbody></table>
                        <table width="149" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="15"></td>
  </tr>
</tbody></table>

                        <table width="149" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="59"><img src="<?php echo base_url()?>/images/W020120330546354172048.jpg"></td>
                            <td width="10"></td>
                            <td width="80" valign="top" style="padding-top:19px;"><a href="http://dportal.nlc.gov.cn:8332/nlcdrss/ydzhg/ydzhg.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020111230488758271164.jpg"></a></td>
                          </tr>
                        </tbody></table>                        </td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>
                  </tbody></table></td>
                <td width="15"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td height="35"></td>
        </tr>
        <tr>
          <td valign="top" style="padding-left:48px;"><!--<a href="http://vod.nlc.gov.cn/" target="_blank"><img src="./dsb_zyyfw/ts/dsbzxjz/201111/W020120314552877133139.jpg"/></a><br /><a href="./dsb_zyyfw/5dzxzl/" target="_blank"><img src="./dsb_zyyfw/5dzxzl/201202/W020120314554086291810.jpg"/></a>--></td>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
</div>

<div id="bc001" class="hide">
<table width="824" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="210" height="420" valign="top" background="<?php echo base_url()?>/images/dsb_extra1230yyc_19.jpg" style="background-repeat:no-repeat;"><table width="210" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td width="42"></td>
          <td width="168" valign="top"><table width="168" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="141"></td>
  </tr>
  
  <tr>
    <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#zwqkq" target="_blank"><img src="<?php echo base_url()?>/images/W020111230508979288603.jpg"></a></td>
  </tr>
  <tr>
    <td height="28"></td>
  </tr>
  
  <tr>
    <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#wwwxyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111230509203615906.jpg"></a></td>
  </tr>
  <tr>
    <td height="28"></td>
  </tr>
  
  <tr>
    <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#tgawxyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111230509435122733.jpg"></a></td>
  </tr>
  <tr>
    <td height="28"></td>
  </tr>
  
</tbody></table></td>
        </tr>
      </tbody></table></td>
    <td width="397" valign="top" background="<?php echo base_url()?>/images/dsb_index1125yyc_11.jpg" style="background-repeat:repeat-x;"><table width="397" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td height="71"></td>
        </tr>
        <tr>
          <td valign="top"><table width="397" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="44"></td>
                <td width="204" valign="top"><img src="<?php echo base_url()?>/images/dsb_indexqk1128yyc_05.jpg"></td>
                <td width="34"></td>
                <td width="98" align="right" valign="bottom" class="dark-blue1"><a href="http://www.nlc.gov.cn/dsb_zyyfw/qk/qkzyk/" class="dark-blue1" target="_blank"><img src="<?php echo base_url()?>/images/dsb_gd120221mak_01.jpg" border="0"></a></td>
                <td width="17"></td>
              </tr>
            </tbody></table></td>
        </tr>
        
        <tr>
          <td height="18"></td>
        </tr>
        <tr>
          <td valign="top"><table width="397" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="18"></td>
                <td width="357" valign="top"><table width="357" border="0" cellspacing="0" cellpadding="0">
                
                    <tbody><tr>
                      <td width="135" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/minguoqikan" target="_blank"><img src="<?php echo base_url()?>/images/W020120120495065418817.png"></a></td>
                      <td width="6"></td>
                      <td width="216" valign="top" class="dark-blue1 lh20p"><a href="http://mylib.nlc.gov.cn/web/guest/minguoqikan" target="_blank" class="dark-blue1">是以馆藏民国期刊的缩微胶片数字化资料为基础建设的数据库，预计将在三年内完成近600万拍缩微胶片的数字转换。</a></td>
                    </tr>
                    
                    <tr>
                      <td height="20"></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody></table></td>
                <td width="16"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td height="2" align="center" background="<?php echo base_url()?>/images/dsb_index1101yyc_47.jpg" style="background-repeat:no-repeat;"></td>
        </tr>
        
        <tr>
          <td height="18"></td>
        </tr>
        <tr>
          <td valign="top"><table width="397" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="18"></td>
                <td width="357" valign="top"><table width="357" border="0" cellspacing="0" cellpadding="0">
                
                    <tbody><tr>
                      <td width="135" valign="top"><a href="http://dlib.edu.cnki.net/kns50/index.aspx" target="_blank"><img src="<?php echo base_url()?>/images/W020120120542819974375.png"></a></td>
                      <td width="6"></td>
                      <td width="216" valign="top" class="dark-blue1 lh20p"><a href="http://dlib.edu.cnki.net/kns50/index.aspx" target="_blank" class="dark-blue1">该数据库以学术、技术、政策指导、高等科普及教育类期刊为主，内容覆盖自然科学、工程技术、农业、哲学、医学、人文社会科学等各个领域。截至2011年6月，收录国内学术期刊 7778种，包括创刊至今出版的学术期刊 4600余种，全文文献总量 3200多万篇。</a></td>
                    </tr>
                    
                    <tr>
                      <td height="20"></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody></table></td>
                <td width="16"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td valign="top"></td>
        </tr>






        <tr>
          <td height="16"></td>
        </tr>
      </tbody></table></td>
    <td width="217" valign="top" background="<?php echo base_url()?>/images/dsb_extra1230yyc_26_x1.jpg" style="background-repeat:no-repeat;"><table width="217" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td height="138"></td>
        </tr>
        <tr>
          <td valign="top"><table width="217" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="41"></td>
                <td width="166" valign="top">

                        <table width="166" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="57"><img src="<?php echo base_url()?>/images/W020111128511045245210.jpg"></td>
                            <td width="5"></td>
                            <td><a href="http://navi.nlc.gov.cn:8080/newspaper_navi/" target="_blank"><img src="<?php echo base_url()?>/images/W020111128511045403098.jpg"></a></td>
                          </tr>
                        </tbody></table>
                        <table width="166" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="28"></td>
  </tr>
</tbody></table>
<table width="166" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="57"><img src="<?php echo base_url()?>/images/W020111128511992647936.jpg"></td>
                            <td width="5"></td>
                            <td><a href="http://www.nlc.gov.cn/newzxfw/sktj/" target="_blank"><img src="<?php echo base_url()?>/images/W020111128511992797874.jpg"></a></td>
                          </tr>
                        </tbody></table>                      </td>
                    </tr>
                    <tr>
                      <td height="5"></td>
                    </tr>
                  </tbody></table></td>
                <td width="10"></td>
              </tr>
            </tbody></table></td>
  </tr>
</tbody></table>
</div>

<div id="bc002" class="hide">
<table width="824" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="215" height="420" valign="top" background="<?php echo base_url()?>/images/dsb_extra1230yyc_29.jpg" style="background-repeat:no-repeat;"><table width="215" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td width="49"></td>
          <td width="166" valign="top"><table width="166" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="150"></td>
  </tr>
  
  <tr>
    <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#zwbzq" target="_blank"><img src="<?php echo base_url()?>/images/W020111230526881023870.jpg"></a></td>
  </tr>
  <tr>
    <td height="33"></td>
  </tr>
  
  <tr>
    <td valign="top"><a href="http://www.nlc.gov.cn/dsb_zyyfw/wdtsg/dzzn/dsb_gtfw/dsb_afwbjyd/dsb_bq/index.htm#tgawxyls" target="_blank"><img src="<?php echo base_url()?>/images/W020111230527152467446.jpg"></a></td>
  </tr>
  <tr>
    <td height="33"></td>
  </tr>
  
</tbody></table></td>
        </tr>
      </tbody></table></td>
    <td width="392" valign="top" background="<?php echo base_url()?>/images/dsb_index1125yyc_11.jpg" style="background-repeat:repeat-x;"><table width="392" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td height="71"></td>
        </tr>
        <tr>
          <td valign="top"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="45"></td>
                <td width="205" valign="top"><img src="<?php echo base_url()?>/images/dsb_index1125yyc_10.jpg"></td>
                <td width="34"></td>
                <td width="91" align="right" valign="bottom" class="dark-blue1"><a href="http://www.nlc.gov.cn/dsb_zyyfw/bz/bzzyk/" target="_blank" class="dark-blue1"><img src="<?php echo base_url()?>/images/dsb_gd120221mak_01.jpg" border="0"></a></td>
                <td width="17"></td>
              </tr>
            </tbody></table></td>
        </tr>
        
        <tr>
          <td height="18"></td>
        </tr>
        <tr>
          <td valign="top"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="19"></td>
                <td width="357" valign="top"><table width="357" border="0" cellspacing="0" cellpadding="0">
                
                    <tbody><tr>
                      <td width="128" valign="top"><a href="http://newspaper.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120120531077152744.png"></a></td>
                      <td width="6"></td>
                      <td valign="top" class="dark-blue1 lh20p"><a href="http://newspaper.nlc.gov.cn/" target="_blank" class="dark-blue1">在线读报栏目收录了全国各地各大报纸的电子版内容，可每日奉上最新的报纸以供读者阅读。（仅限局域网访问）</a></td>
                    </tr>
                    
                    <tr>
                      <td height="20"></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody></table></td>
                <td width="16"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td height="2" align="center" background="<?php echo base_url()?>/images/dsb_index1101yyc_47.jpg" style="background-repeat:no-repeat;"></td>
        </tr>
        
        <tr>
          <td height="18"></td>
        </tr>
        <tr>
          <td valign="top"><table width="392" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="19"></td>
                <td width="357" valign="top"><table width="357" border="0" cellspacing="0" cellpadding="0">
                
                    <tbody><tr>
                      <td width="128" valign="top"><a href="http://192.168.29.17:8030/webpage_bz/webpage_CKXX/GNS-HomePage_b.htm" target="_blank"><img src="<?php echo base_url()?>/images/W020120120521932688517.png"></a></td>
                      <td width="6"></td>
                      <td valign="top" class="dark-blue1 lh20p"><a href="http://192.168.29.17:8030/webpage_bz/webpage_CKXX/GNS-HomePage_b.htm" target="_blank" class="dark-blue1">该数据库收录了参考消息1957年3月至2007年1月报纸原版、文字、图片、表格、广告信息的全文信息。（仅限局域网访问）</a></td>
                    </tr>
                    
                    <tr>
                      <td height="20"></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody></table></td>
                <td width="16"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="16"></td>
        </tr>
      </tbody></table></td>
    <td width="217" valign="top" background="<?php echo base_url()?>/images/dsb_extra1230yyc_30.jpg" style="background-repeat:no-repeat;"><table width="217" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td height="133"></td>
        </tr>
        <tr>
          <td valign="top"><table width="217" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="36"></td>
                <td width="171" valign="top"><table width="171" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td valign="top">
                        <table width="171" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="55" align="center"><img src="<?php echo base_url()?>/images/W020111125560321734680.jpg"></td>
                            <td width="4"></td>
                            <td width="109"><a href="http://192.168.30.129/search/index.html" target="_blank"><img src="<?php echo base_url()?>/images/W020111125560322045069.jpg"></a></td>
                          </tr>
                        </tbody></table>
                        <table width="171" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="17"></td>
  </tr>
</tbody></table>

                        <table width="171" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td width="55"><img src="<?php echo base_url()?>/images/W020111128631582237592.jpg"></td>

                            <td width="4"></td>
                            <td><a href="http://navi.nlc.gov.cn:8080/newspaper_navi/" target="_blank"><img src="<?php echo base_url()?>/images/W020111128631582380340.jpg"></a></td>
                          </tr>
                        </tbody></table>                      </td>
                    </tr>
                    <tr>
                      <td height="4"></td>
                    </tr>

                  </tbody></table></td>
                <td width="10"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td height="45"></td>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
</div>

<div id="bc003" class="hide">
<table width="824" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="216" height="590" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_01.jpg" style="background-repeat:no-repeat;"><table width="216" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="28"></td>
    <td width="188" valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="98"></td>
  </tr>
  <tr>
    <td valign="top" style="padding-left:15px;"><img src="<?php echo base_url()?>/images/dsb_indexgj1125yyc_07.jpg"></td>
  </tr>
  <tr>
    <td height="35"></td>
  </tr>
  <tr>
    <td height="15"></td>
  </tr>
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
    
  <tbody><tr>
    <td valign="top"><img src="<?php echo base_url()?>/images/W020111126474595314693.jpg"></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">地点：</span><br><style type="text/css">

</style>
总馆北区四层北侧中</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">馆藏范围：</span><br><style type="text/css">

</style>
本馆收藏的博士学位论文20 余万种。</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">开放时间：</span><br><style type="text/css">

</style>
<style type="text/css">
</style>周一到周五&nbsp;9:00-21:00（闭架文献网上预约时间：0:00-16:00）周日：9:00-17:00（闭架文献网上预约时间：0:00-16:00）</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">联系方式：</span><br><style type="text/css">

</style>
88545401</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
   
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
    <td width="608" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_02.jpg" style="background-repeat:repeat-x;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="63"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="33"></td>
    <td width="150" valign="top"><img src="<?php echo base_url()?>/images/dsb_indexlw1126yyc_03.jpg"></td>
    <td width="45"></td>

    <td width="380" valign="bottom" class="dark-blue1"><a href="http://www.nlc.gov.cn/dsb_zyyfw/lw/lwzyk/" target="_blank" class="dark-blue1"><img src="<?php echo base_url()?>/images/dsb_gd120221mak_01.jpg" border="0"></a></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="17"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="129" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/boshilunwen" target="_blank"><img src="<?php echo base_url()?>/images/W020120120538349298337.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">仅供浏览前24页，不提供电子版的下载、打印服务。</td>
  </tr>
</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>

  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="129" valign="top"><a href="http://c.g.wanfangdata.com.cn/Thesis.aspx" target="_blank"><img src="<?php echo base_url()?>/images/W020120120524587987359.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">该库由国家法定学位论文收藏机构——中国科技信息研究所提供，并委托万方数据加工建库，收录了自1980年以来我国理、工、农、医、人文社科等各个领域的博士、博士后及硕士研究生论文，论文全文已达200余万篇。</td>
  </tr>
</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>

  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="129" valign="top"><a href="http://192.168.30.10:8888/lw/b/index.jsp" target="_blank"><img src="<?php echo base_url()?>/images/W020120120525602454530.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">收录1981年以来北京协和医学院培养的博士、硕士研究生学位论文，学科范围涉及医学、药学各专业领域及其他相关专业，可在线浏览文章的前30页。每季更新。 </td>
  </tr>
</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>

  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="129" valign="top"><a href="http://pqdt.bjzhongke.com.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120120525785914034.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">收录有欧美1000余所大学文、理、工、农、医等领域的博士、硕士学位论文，通过我馆可访问当年集团订购的所有论文全文约3万多篇。</td>
  </tr>
</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>

  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="129" valign="top"><a href="http://ieeexplore.ieee.org/" target="_blank"><img src="<?php echo base_url()?>/images/W020120120526002285819.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">IEEE Xplore/IEL收录IEEE美国电气电子工程师学会(Institute of Electrical and Electronic Engineers) 及IET英国工程技术学会(Institution of Engineering and Technology)出版内容，包括1988年到现在所有的期刊、会议录和标准。当中13个学会的内容都回溯到了1950年，大部分的会议录甚至回溯到了1913年。主要内容有：（1）IEEE期刊、会刊与杂志149种；（2）IET期刊23种；（3）IEEE会议录900多种；（4）IET会议录和研讨会摘要40多种；（5）IEEE标准3100多种IEEE标准文献，包括现行、历史及作废的所有标准。</td>
  </tr>
</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>

  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
</tbody></table></td>
  </tr>
</tbody></table>
</div>

<div id="bc004" class="hide">
<table width="824" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="216" height="590" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_01.jpg" style="background-repeat:no-repeat;"><table width="216" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="28"></td>
    <td width="188" valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="98"></td>
  </tr>
  <tr>
    <td valign="top" style="padding-left:15px;"><img src="<?php echo base_url()?>/images/dsb_indexgj1125yyc_07.jpg"></td>
  </tr>
  <tr>
    <td height="35"></td>
  </tr>
  <tr>
    <td height="15"></td>
  </tr>
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
    
  <tbody><tr>
    <td valign="top"><img src="<?php echo base_url()?>/images/W020111126420666236062.jpg"></td>
  </tr>
  <tr>
    <td height="7"></td>

  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>

    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">地点：</span><br><style type="text/css">

</style>
古籍馆文津楼&nbsp;A301</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>

    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">馆藏范围：</span><br><style type="text/css">

</style>
明清至民国时期的普通古籍，建国以后的新印古籍</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>

    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">开放时间：</span><br><style type="text/css">

</style>
周一至周五 9:00—17:00（取书时间：9:00—12:00，13:00—16:30）</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>

    <td width="158" valign="top" style="line-height:20px;" class="light-black1 fs12p"><span class="dark-blue2">证卡要求：</span><br><style type="text/css">

</style>
硕士研究生或中级职称以上，凭本人国家图书馆读者卡。</td>
    <td width="30"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
   
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
    <td width="608" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_02.jpg" style="background-repeat:repeat-x;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="63"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="33"></td>
    <td width="216" valign="top"><img src="<?php echo base_url()?>/images/dsb_indexgj1125yyc_08.jpg"></td>
    <td width="45"></td>
    <td width="314" valign="bottom" class="dark-blue1"><a href="http://www.nlc.gov.cn/dsb_zyyfw/gj/gjzyk/" target="_blank" class="dark-blue1"><img src="<?php echo base_url()?>/images/dsb_gd120221mak_01.jpg" border="0"></a></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>

    <td height="16"></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="130" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/jiagushiwu" target="_blank"><img src="<?php echo base_url()?>/images/W020120120526384808152.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">国家图书馆珍藏甲骨35651片，包括，甲骨元数据3764条，影像7532幅。</td>
  </tr>

</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="130" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/beitiejinghua" target="_blank"><img src="<?php echo base_url()?>/images/W020120120526632849835.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">《中文拓片资源库》现已有元数据23000余条，影像29000余幅。</td>
  </tr>

</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="130" valign="top"><a href="http://idp.nlc.gov.cn/" target="_blank"><img src="<?php echo base_url()?>/images/W020120120526859042862.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">我馆国际敦煌项目（IDP）数据库。包括我馆及英、法、俄、日、美等国多家收藏机构所藏敦煌西域文献的高清晰图片十余万幅，以及多种敦煌西域文献目录、研究论著索引。</td>
  </tr>

</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="130" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/xixialunzhu" target="_blank"><img src="<?php echo base_url()?>/images/W020120120527031429909.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">数字资源库包括：馆藏西夏古籍书目数据125条；馆藏西夏古籍原件影像近5000拍。</td>
  </tr>

</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_03.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_04.jpg" style="background-repeat:repeat-y;"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="1"></td>
  </tr>
  <tr>
    <td valign="top"><table width="608" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="30"></td>
    <td width="130" valign="top"><a href="http://mylib.nlc.gov.cn/web/guest/shuzifangzhi" target="_blank"><img src="<?php echo base_url()?>/images/W020120209404978081803.png"></a></td>
    <td width="14"></td>
    <td width="380" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top" class="fs12p lh20p light-black1">本库含有1949年前纂修的6868种古旧地方志类图书，跨越明、清、民国三个朝代。</td>
  </tr>

</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="1"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="9" valign="top" background="<?php echo base_url()?>/images/dsb_indexgj1125yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
 
</tbody></table></td>
  </tr>
</tbody></table>
</div>

<div id="bc005" class="hide">
<table width="824" border="0" cellspacing="0" cellpadding="0" align="center">

  <tbody><tr>
    <td height="47" align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_yy1126mak_01.jpg" width="824" height="95"></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="<?php echo base_url()?>/images/dsb_xmtfw1121mak_03.jpg"></td>
  </tr>
  <tr>
    <td align="left" valign="top" background="<?php echo base_url()?>/images/dsb_yy1126mak_02.jpg" class="fs12p lh20p" style="padding-left:48px; padding-right:75px;"><style type="text/css">

</style>
<p>　　截至2009年底，国家图书馆收藏有各种音频资源4万多张，其中有激光唱片36,646张；立体声唱片967&nbsp;张；MP3&nbsp;2,405张。这些资源以中、英、日文为主。其中世界各国的经典名曲及歌曲是音频资料收藏的主要特点，外语教学磁带及CD教学光盘也有大量收藏。欢迎广大音乐爱好者了解并及时地利用这些资源。</p></td>
  </tr>
    <tr>
    <td align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_yy1126mak_03.jpg" width="824" height="35"></td>
  </tr>
    <tr>
    <td align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_yy1126mak_04.jpg" width="824" height="37"></td>
  </tr>
    <tr>
    <td align="left" valign="top" class="fs12p lh20p" style="padding-left:48px; padding-right:75px;"><style type="text/css">

</style>
<style type="text/css">
</style><style type="text/css">
</style><style type="text/css">
</style><style type="text/css">
</style><style type="text/css">
</style><style type="text/css">
</style>
<div class="cas_content">&nbsp;&nbsp;&nbsp; <span class="ylfw_title"><strong><font color="#0f4e7b">志鸟专藏</font></strong></span></div>
<div class="cas_content">&nbsp;&nbsp;&nbsp;&nbsp;在国家图书馆收藏的音频资源中有一个特别的部分，那就是志鸟荣八郎先生赠送的2万张激光唱片，这2万张激光唱片全部是西方古典音乐。</div>
<div class="cas_content">　　志鸟荣八郎先生（1926—2001）毕生从事古典音乐评论及普及工作，在国内外享有盛誉。他多次来华讲学，极受听众欢迎。志鸟先生曾经担任日本国际音乐评论家协会会员、日本音乐家协会会员、日本旅游笔会会员。担任过中国交响乐团社会音乐学院名誉院长、北京市交响乐爱好者协会名誉理事、蒙特利尔国际唱片大奖赛评委、国际唱片学院奖评委、日本《朝日新闻》、《每日周刊》等报刊的音乐评论撰稿人。他的著作有：《音乐春夏秋冬》、《西洋音乐名作故事》、《大作曲家身边的女人们》、《大作曲家及其名曲CD唱片》、《冬之旅》、《莫扎特大全》（人、曲、CD）等等。志鸟荣八郎先生对中国人民非常友好，1995年他将自己收藏的几万张唱片中的2万张激光唱片，赠送给中国国家图书馆，他的愿望是，将这些珍藏精品奉献给中国的古典音乐爱好者，与大家分享神圣的精神资源。</div></td>
  </tr>
    <tr>
    <td align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_yy1126mak_05.jpg" width="824" height="46"></td>
  </tr>
</tbody></table>
</div>

<div id="bc006" class="hide">
<table width="824" border="0" cellspacing="0" cellpadding="0" align="center">

  <tbody><tr>
    <td height="47" align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_ys1126mak_01.jpg" width="824" height="52"></td>
  </tr>
  <tr>
    <td align="center" valign="top" background="<?php echo base_url()?>/images/dsb_xmtfw1121mak_03.jpg"></td>
  </tr>
  <tr>
    <td align="left" valign="top" background="<?php echo base_url()?>/images/dsb_ys1126mak_02.jpg" class="fs12p lh20p" style="padding-left:48px; padding-right:75px;"><style type="text/css">

</style>
<style type="text/css">
</style>
<div class="cas_content">　　截至2009年底，国家图书馆收藏有各种视频资料共计18万余张/盘/盒。其中DVD视盘31,634张；LD视盘 1,880 张；VCD视盘80,886 张；VHD高密度视盘 260 张；录像带14,608盒。</div>
<div class="cas_content">　　这些视频资源涉及的学科范围广泛，包括语言、文字、哲学、宗教、政治、法律、军事、文化、教育、体育、经济、艺术、文学、工业技术、医药卫生、历史、地理、数理科学、化学、天文学、地球科学、生物科学、农业科学、航空、航天、环境科学、安全科学等领域。其中中外经典故事影片是视听资料收藏的一个重要方面。</div></td>
  </tr>
    <tr>
    <td align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_yy1126mak_03.jpg" width="824" height="35"></td>
  </tr>
    <tr>
    <td align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_ys1126mak_04.jpg" width="824" height="36"></td>
  </tr>
    <tr>
    <td align="left" valign="top" class="fs12p lh20p" style="padding-left:48px; padding-right:75px;"><style type="text/css">

</style>
<style type="text/css">
</style>
<div class="cas_content">&nbsp;&nbsp;&nbsp;&nbsp;国外影视精品原版DVD光盘。</div>
<div class="cas_content">&nbsp;&nbsp;&nbsp;&nbsp;国家图书馆每年都花费大笔资金购买国外原版的影视精品DVD光盘，以经典电影、电视剧为主，同时也包含有舞蹈、动漫等领域的经典作品。</div></td>
  </tr>
    <tr>
    <td align="left" valign="top"><img src="<?php echo base_url()?>/images/dsb_ys1126mak_05.jpg" width="824" height="52"></td>
  </tr>
</tbody></table>
</div>


<div id="bc007" class="hide">
<table width="824" background="<?php echo base_url()?>/images/dsb_indexsw1126yyc_10.jpg" style="background-repeat:repeat-x;" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>

	<td valign="top"><table width="824" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="62" valign="top" background="<?php echo base_url()?>/images/dsb_indexsw1126yyc_01.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top"><table width="824" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="251" valign="top"><table width="251" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top"><table width="251" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="250" valign="top" bgcolor="#FFFFFF"><table width="250" border="0" cellspacing="0" cellpadding="0">

  <tbody><tr>
    <td height="8"></td>
  </tr>
  <tr>
    <td valign="top"><table width="250" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="29"></td>
    <td valign="top"><img src="<?php echo base_url()?>/images/dsb_indexsw1126yyc_02.jpg"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top"><table width="250" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top"><table width="250" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="75"></td>
    <td valign="top"><img src="<?php echo base_url()?>/images/W020111126560179175743.jpg"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="11"></td>
  </tr>
  <tr>
    <td valign="top"><table width="250" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="21"></td>
    <td width="208" valign="top"><table width="208" border="0" cellspacing="0" cellpadding="0">
    
  <tbody><tr>
    <td valign="top" class="light-black1 fs12p lh20p"><span class="dark-blue2">地点：</span><br><style type="text/css">

</style>
总馆北区四层东南侧4-23</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top" class="light-black1 fs12p lh20p"><span class="dark-blue2">室藏范围：</span><br><style type="text/css">

</style>
<style type="text/css">
</style><style type="text/css">
</style>国外博士论文、中文报刊、民国图书、1931-1934年间江西苏维埃政权出版物、日本政府出版物、英美政府解密资料和早期来华传教士文集，以及1850年前西方出版的有关中国的书籍、世界各国语种词典和各国人物传记等胶卷或平片。其中外文资料最早可追溯到1498年，中文资料最早可追溯到1862年，是国内外学者研究学习的珍贵资料。</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top" class="light-black1 fs12p lh20p"><span class="dark-blue2">开放时间：</span><br><style type="text/css">

</style>
<style type="text/css">
</style>周一到周五&nbsp;9:00-21:00（预约服务时间：9:00-16:00） <br>
周日&nbsp;9:00-17:00（预约服务时间：9:00-16:00）</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
  <tr>
    <td valign="top" class="light-black1 fs12p lh20p"><span class="dark-blue2">联系方式：</span><br><style type="text/css">

</style>
88545663</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  
</tbody></table></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="2"></td>
  </tr>
</tbody></table></td>
    <td width="1" bgcolor="#eeeeee"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="77" valign="top" background="<?php echo base_url()?>/images/dsb_indexsw1126yyc_07.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
    <td width="5"></td>
    <td width="568" valign="top"><table width="568" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top"><table width="568" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top"><table width="568" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="3"></td>
    <td width="1" bgcolor="#eeeeee"></td>
    <td width="564" valign="top" bgcolor="#FFFFFF"><table width="564" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td valign="top"><table width="564" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="41"></td>
    <td width="523" height="31" valign="top" background="<?php echo base_url()?>/images/dsb_indexsw1126yyc_04.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="15"></td>
  </tr>
  <tr>
    <td valign="top"><table width="564" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="33"></td>
    <td width="491" class="fs12p lh20p light-black2"><style type="text/css">

</style>
<style type="text/css">
</style>
<p>　　缩微资料内容范围包括国外博士论文、中文报刊、民国图书、1931-1934年间江西苏维埃政权出版物、日本政府出版物、英美政府解密资料和早期来华传教士文集，以及1850年前西方出版的有关中国的书籍、世界各国语种词典和各国人物传记等胶卷或平片。</p>
<p>　　截至2009年底，国家图书馆共收藏缩微胶卷 96,619 (卷)，缩微平片 1,292,646 (张/片)，缩微文献合计 1,389,265 (卷/张/片)。</p></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="23" background="<?php echo base_url()?>/images/dsb_indexsw1126yyc_05.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>

    <td valign="top"><table width="568" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="49" background="<?php echo base_url() ?>/images/dsb_indexsw1126yyc_06.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td valign="top"><table width="568" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="3"></td>
    <td width="1" bgcolor="#eeeeee"></td>
    <td width="564" valign="top"><table width="564" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td height="12"></td>
  </tr>
  <tr>
    <td valign="top"><table width="564" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="33"></td>
    <td width="490" valign="top" class="fs12p lh20p light-black2"><style type="text/css">

</style>
<style type="text/css">
</style>
<p><strong>·</strong>美国UMI公司的博士学位论文：自1938年至最新，并逐年增订；</p>
<p><strong>·</strong>解放前中文报纸、期刊、民国时期的图书；</p>
<p><strong>·</strong>清末中美外交档案；</p>
<p><strong>·</strong>德国美因兹大学博士论文；</p>
<p><strong>·</strong>英、美政府解密资料；日本政府出版物；</p>
<p><strong>·</strong>1850年前西方出版有关中国的书籍，以及早期来华传教士资料；</p>
<p><strong>·</strong>江西苏维埃政权出版物（陈诚档案）：1931年—1934年；</p>
<p><strong>·</strong>各国人物传记资料及荷兰学者高罗佩中文藏书（文学、书法、绘画、音乐等）；</p>
<p><strong>·</strong>世界各国语种词典。</p></td>
    <td></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
  <tr>
    <td height="75" valign="top" background="<?php echo base_url() ?>/images/dsb_indexsw1126yyc_09.jpg" style="background-repeat:no-repeat;"></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
</tr>
</tbody></table>
</div></td>
                    </tr>
                  </tbody></table></td>
              </tr>
            </tbody></table></td>
    <td width="6"></td>
    <td width="95" valign="top" align="left">
	
<!--
function init(){
	setTimeout(showbox,200);
	windowWidth = window.screen.availWidth;
	windowHeight = window.screen.availHeight;
	window.moveTo(0,0);
	window.resizeTo(windowWidth,windowHeight);
}
function showbox(){
	var cover=document.getElementById("cover");
	cover.style.width=document.documentElement.scrollWidth+"px";
	cover.style.height=document.documentElement.scrollHeight+"px";
	cover.className="show";
	var box=document.getElementById("box");
	box.style.left=(document.documentElement.clientWidth/2-200)+"px";
	box.style.top=(document.documentElement.clientHeight/2-150)+"px";
	box.className="show";
}
function closebox(){
	var cover=document.getElementById("cover");
	cover.className="hide";
	var box=document.getElementById("box");
	box.className="hide";
	windowWidth = window.screen.availWidth;
	windowHeight = window.screen.availHeight;
	window.moveTo(0,0);
	window.resizeTo(windowWidth,windowHeight);
}
-->
<table width="95%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="6">&nbsp;</td>
    <td align="left" valign="top"><script language="JavaScript" type="text/javascript">
lastScrollY=0;
function hide22()  
{   
lovexin12.style.visibility="hidden"; 
}
function heartBeat(){ 
var diffY;
if (document.documentElement && document.documentElement.scrollTop)



    diffY = document.documentElement.scrollTop;
else if (document.body)
    diffY = document.body.scrollTop
else
    {/*Netscape stuff*/}
    
//alert(diffY);
percent=.1*(diffY-lastScrollY); 
if(percent>0)percent=Math.ceil(percent); 
else percent=Math.floor(percent); 
document.getElementById("lovexin12").style.top=parseInt(document.getElementById

("lovexin12").style.top)+percent+"px";

lastScrollY=lastScrollY+percent; 
//alert(lastScrollY);
}


</script></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table></td>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table>


<div class="hide">
	  <form id="main_form" name="main_form" method="post" action="http://res4.nlc.gov.cn/home/search.trs?method=advSearch">
					<input type="text" name="textfield2" style="display:none;">
 <table width="427" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="325" valign="top"><table width="325" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td height="27" valign="middle" background="<?php echo base_url() ?>/images/dsb_index1101yyc_21.jpg" style="background-repeat:no-repeat; padding-left:7px" class="fs14p c0"><input type="text" id="shtb" name="parmValue" style="border-width:0px; width:310px;" class="fs14p c0" size="46"></td>
                  </tr>
                  <tr>
                    <td height="5" background="<?php echo base_url()?>/images/dsb_index1101yyc_22.jpg" style="background-repeat:no-repeat;"></td>
                  </tr>
                </tbody></table></td>
              <td width="16"></td>
              <td width="86" valign="top"><table width="86" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td valign="top"><a href="http://www.nlc.gov.cn/#" onclick="smt1();"><img src="<?php echo base_url()?>/images/dsb_index1101yyc_10.jpg"></a></td>
                  </tr>
                  <tr>
                    <td height="5" background="<?php echo base_url()?>/images/dsb_index1101yyc_23.jpg" style="background-repeat:no-repeat;"></td>
                  </tr>
                </tbody></table></td>
            </tr>
        </tbody></table>		
		  <input type="hidden" name="channelid" id="channelid" value="772">
		<input type="hidden" id="pageNo" name="pageNo" value="1"> 		
		<input type="hidden" id="pageSize" name="pageSize" value="15">	<!-- 检索结果每页显示条数 -->
		<input type="hidden" id="orderBy" name="orderBy" value="extend1">		
		<input type="hidden" id="order" name="order" value="desc">				                     
	    <input type="hidden" id="flag" name="flag" value="false">
	    <input type="hidden" id="ifSplitSpace" name="ifSplitSpace" value="0">
	    <input type="hidden" id="soqolo" name="soqolo" value="%28+bookname%3D+%27%E6%95%85%E4%BA%8B%27++and+subchannel%3D100+%29">                        
	    <input type="hidden" id="cutSize" name="cutSize" value="125">
		<input type="hidden" id="cutSize" name="parmName" value="bookname">								
	</form>
</div>
<table align="center" width="1024" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td valign="top"><table width="1024" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="34" align="left" valign="top" background="<?php echo base_url()?>/images/dsb_index1101yyc_71.jpg" style="background-repeat:no-repeat; padding-left:99px"><table width="824" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td valign="top"><table width="824" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td height="11"></td>
              </tr>
              <tr>
                <td valign="top" align="center" class="cf fs12p white"><a href="http://www.nlc.gov.cn/dsb_footer/bqsm/" class="cf">版权声明</a>&nbsp;丨&nbsp;<a href="http://www.nlc.gov.cn/dsb_footer/gygt/" class="cf">关于国图</a>&nbsp;丨&nbsp;<a href="http://www.nlc.gov.cn/dsb_footer/dsb_zcwm/" class="cf">支持我们</a>&nbsp;丨&nbsp;<a href="http://www.nlc.gov.cn/dsb_footer/rczp/" class="cf">人才招聘</a>&nbsp;丨&nbsp;<a href="http://www.nlc.gov.cn/dsb_footer/dsb_zddt/" class="cf">站点地图</a>&nbsp;丨&nbsp;<a href="http://www.nlc.gov.cn/dsb_footer/lxwm/" class="cf">联系我们</a>&nbsp;丨&nbsp;<a href="http://www.nlc.gov.cn/index_old.htm" class="cf">旧版链接</a></td>
              </tr>
            </tbody></table></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td height="113" align="center" valign="middle" background="<?php echo base_url()?>/images/dsb_index1101yyc_72.jpg" style="background-repeat:no-repeat;"><p class="fs14p">京ICP备05014420号 电话:(+86 10)88545426 88545360</p>
          <p class="fs14p dark-blue fwb">中国国家图书馆版权所有</p></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>

<div id="haloword-lookup" class="ui-widget-content ui-draggable"><div id="haloword-title"><span id="haloword-word"></span><a herf="#" id="haloword-pron" class="haloword-button" title="发音"></a><audio id="haloword-audio"></audio><div id="haloword-control-container"><a href="http://www.nlc.gov.cn/#" id="haloword-open" class="haloword-button" title="查看单词详细释义" target="_blank"></a><a herf="#" id="haloword-close" class="haloword-button" title="关闭查询窗"></a></div><br style="clear: both;"></div><div id="haloword-content"></div></div></body></html>
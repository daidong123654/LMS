var OxO67ee=["inp_src","btnbrowse","AlternateText","inp_id","longDesc","Align","optNotSet","optLeft","optRight","optTexttop","optAbsMiddle","optBaseline","optAbsBottom","optBottom","optMiddle","optTop","Border","bordercolor","bordercolor_Preview","inp_width","imgLock","inp_height","constrain_prop","HSpace","VSpace","outer","img_demo","onclick","src","width","height","value","cssText","style","","src_cetemp","id","vspace","hspace","border","borderColor"," ","backgroundColor","align","alt","ValidNumber","ValidID","longdesc","checked","../Images/locked.gif","../Images/1x1.gif","length"];var inp_src=Window_GetElement(window,OxO67ee[0],true);var btnbrowse=Window_GetElement(window,OxO67ee[1],true);var AlternateText=Window_GetElement(window,OxO67ee[2],true);var inp_id=Window_GetElement(window,OxO67ee[3],true);var longDesc=Window_GetElement(window,OxO67ee[4],true);var Align=Window_GetElement(window,OxO67ee[5],true);var optNotSet=Window_GetElement(window,OxO67ee[6],true);var optLeft=Window_GetElement(window,OxO67ee[7],true);var optRight=Window_GetElement(window,OxO67ee[8],true);var optTexttop=Window_GetElement(window,OxO67ee[9],true);var optAbsMiddle=Window_GetElement(window,OxO67ee[10],true);var optBaseline=Window_GetElement(window,OxO67ee[11],true);var optAbsBottom=Window_GetElement(window,OxO67ee[12],true);var optBottom=Window_GetElement(window,OxO67ee[13],true);var optMiddle=Window_GetElement(window,OxO67ee[14],true);var optTop=Window_GetElement(window,OxO67ee[15],true);var Border=Window_GetElement(window,OxO67ee[16],true);var bordercolor=Window_GetElement(window,OxO67ee[17],true);var bordercolor_Preview=Window_GetElement(window,OxO67ee[18],true);var inp_width=Window_GetElement(window,OxO67ee[19],true);var imgLock=Window_GetElement(window,OxO67ee[20],true);var inp_height=Window_GetElement(window,OxO67ee[21],true);var constrain_prop=Window_GetElement(window,OxO67ee[22],true);var HSpace=Window_GetElement(window,OxO67ee[23],true);var VSpace=Window_GetElement(window,OxO67ee[24],true);var outer=Window_GetElement(window,OxO67ee[25],true);var img_demo=Window_GetElement(window,OxO67ee[26],true);btnbrowse[OxO67ee[27]]=function btnbrowse_onclick(){function Ox4c7(Ox2a6){if(Ox2a6){function Actualsize(){var Ox550= new Image();Ox550[OxO67ee[28]]=Ox2a6;if(Ox550[OxO67ee[29]]>0&&Ox550[OxO67ee[30]]>0){inp_width[OxO67ee[31]]=Ox550[OxO67ee[29]];inp_height[OxO67ee[31]]=Ox550[OxO67ee[30]];FireUIChanged();} else {setTimeout(Actualsize,400);} ;} ;inp_src[OxO67ee[31]]=Ox2a6;setTimeout(Actualsize,400);} ;} ;editor.SetNextDialogWindow(window);if(Browser_IsSafari()){editor.ShowSelectImageDialog(Ox4c7,inp_src.value,inp_src);} else {editor.ShowSelectImageDialog(Ox4c7,inp_src.value);} ;} ;UpdateState=function UpdateState_Image(){img_demo[OxO67ee[33]][OxO67ee[32]]=element[OxO67ee[33]][OxO67ee[32]];if(Browser_IsWinIE()){img_demo.mergeAttributes(element);} ;if(element[OxO67ee[28]]){img_demo[OxO67ee[28]]=element[OxO67ee[28]];} else {img_demo.removeAttribute(OxO67ee[28]);} ;} ;SyncToView=function SyncToView_Image(){var src;src=element.getAttribute(OxO67ee[28])+OxO67ee[34];if(element.getAttribute(OxO67ee[35])){src=element.getAttribute(OxO67ee[35])+OxO67ee[34];} ;inp_src[OxO67ee[31]]=src;inp_width[OxO67ee[31]]=element[OxO67ee[29]];inp_height[OxO67ee[31]]=element[OxO67ee[30]];inp_id[OxO67ee[31]]=element[OxO67ee[36]];if(element[OxO67ee[37]]<=0){VSpace[OxO67ee[31]]=OxO67ee[34];} else {VSpace[OxO67ee[31]]=element[OxO67ee[37]];} ;if(element[OxO67ee[38]]<=0){HSpace[OxO67ee[31]]=OxO67ee[34];} else {HSpace[OxO67ee[31]]=element[OxO67ee[38]];} ;Border[OxO67ee[31]]=element[OxO67ee[39]];if(Browser_IsWinIE()){bordercolor[OxO67ee[31]]=element[OxO67ee[33]][OxO67ee[40]];} else {var arr=revertColor(element[OxO67ee[33]].borderColor).split(OxO67ee[41]);bordercolor[OxO67ee[31]]=arr[0];} ;bordercolor[OxO67ee[33]][OxO67ee[42]]=bordercolor[OxO67ee[31]]||OxO67ee[34];bordercolor[OxO67ee[33]][OxO67ee[42]]=bordercolor[OxO67ee[31]];bordercolor_Preview[OxO67ee[33]][OxO67ee[42]]=bordercolor[OxO67ee[31]];Align[OxO67ee[31]]=element[OxO67ee[43]];AlternateText[OxO67ee[31]]=element[OxO67ee[44]];longDesc[OxO67ee[31]]=element[OxO67ee[4]];} ;SyncTo=function SyncTo_Image(element){element[OxO67ee[28]]=inp_src[OxO67ee[31]];element.setAttribute(OxO67ee[35],inp_src.value);element[OxO67ee[39]]=Border[OxO67ee[31]];element[OxO67ee[38]]=HSpace[OxO67ee[31]];element[OxO67ee[37]]=VSpace[OxO67ee[31]];try{element[OxO67ee[29]]=inp_width[OxO67ee[31]];element[OxO67ee[30]]=inp_height[OxO67ee[31]];} catch(er){alert(CE_GetStr(OxO67ee[45]));return false;} ;if(element[OxO67ee[33]][OxO67ee[29]]||element[OxO67ee[33]][OxO67ee[30]]){try{element[OxO67ee[33]][OxO67ee[29]]=inp_width[OxO67ee[31]];element[OxO67ee[33]][OxO67ee[30]]=inp_height[OxO67ee[31]];} catch(er){alert(CE_GetStr(OxO67ee[45]));return false;} ;} ;var Ox4e2=/[^a-z\d]/i;if(Ox4e2.test(inp_id.value)){alert(CE_GetStr(OxO67ee[46]));return ;} ;element[OxO67ee[36]]=inp_id[OxO67ee[31]];element[OxO67ee[43]]=Align[OxO67ee[31]];element[OxO67ee[44]]=AlternateText[OxO67ee[31]];element[OxO67ee[4]]=longDesc[OxO67ee[31]];element[OxO67ee[33]][OxO67ee[40]]=bordercolor[OxO67ee[31]];if(element[OxO67ee[47]]==OxO67ee[34]||element[OxO67ee[47]]==null){element.removeAttribute(OxO67ee[47]);} ;if(element[OxO67ee[4]]==OxO67ee[34]||element[OxO67ee[4]]==null){element.removeAttribute(OxO67ee[4]);} ;if(element[OxO67ee[29]]==0){element.removeAttribute(OxO67ee[29]);} ;if(element[OxO67ee[30]]==0){element.removeAttribute(OxO67ee[30]);} ;if(element[OxO67ee[38]]==OxO67ee[34]){element.removeAttribute(OxO67ee[38]);} ;if(element[OxO67ee[37]]==OxO67ee[34]){element.removeAttribute(OxO67ee[37]);} ;if(element[OxO67ee[36]]==OxO67ee[34]){element.removeAttribute(OxO67ee[36]);} ;if(element[OxO67ee[43]]==OxO67ee[34]){element.removeAttribute(OxO67ee[43]);} ;if(element[OxO67ee[39]]==OxO67ee[34]){element.removeAttribute(OxO67ee[39]);} ;} ;function toggleConstrains(){if(constrain_prop[OxO67ee[48]]){imgLock[OxO67ee[28]]=OxO67ee[49];checkConstrains(OxO67ee[29]);} else {imgLock[OxO67ee[28]]=OxO67ee[50];} ;} ;var checkingConstrains=false;function checkConstrains(Ox569){if(checkingConstrains){return ;} ;checkingConstrains=true;try{var Ox2fe,Ox4a4;if(constrain_prop[OxO67ee[48]]){var Ox550= new Image();Ox550[OxO67ee[28]]=inp_src[OxO67ee[31]];var Ox56a=Ox550[OxO67ee[29]];var Ox56b=Ox550[OxO67ee[30]];if((Ox56a>0)&&(Ox56b>0)){var Ox2b2=inp_width[OxO67ee[31]];var Ox4cd=inp_height[OxO67ee[31]];if(Ox569==OxO67ee[29]){if(Ox2b2[OxO67ee[51]]==0||isNaN(Ox2b2)){inp_width[OxO67ee[31]]=OxO67ee[34];inp_height[OxO67ee[31]]=OxO67ee[34];} else {Ox4cd=parseInt(Ox2b2*Ox56b/Ox56a);inp_height[OxO67ee[31]]=Ox4cd;} ;} ;if(Ox569==OxO67ee[30]){if(Ox4cd[OxO67ee[51]]==0||isNaN(Ox4cd)){inp_width[OxO67ee[31]]=OxO67ee[34];inp_height[OxO67ee[31]]=OxO67ee[34];} else {Ox2b2=parseInt(Ox4cd*Ox56a/Ox56b);inp_width[OxO67ee[31]]=Ox2b2;} ;} ;} ;} ;} finally{checkingConstrains=false;} ;} ;bordercolor[OxO67ee[27]]=bordercolor_Preview[OxO67ee[27]]=function bordercolor_onclick(){SelectColor(bordercolor,bordercolor_Preview);} ;
var OxO88fe=["ua","userAgent","isOpera","opera","isSafari","safari","isGecko","gecko","isWinIE","msie","compatMode","document","CSS1Compat","head","script","language","javascript","type","text/javascript","src","id","undefined","Microsoft.XMLHTTP","readyState","onreadystatechange","","length","all","childNodes","nodeType","\x0D\x0A","caller","onchange","oninitialized","command","commandui","commandvalue","returnValue","oncommand","string","_fireEventFunction","event","parentNode","_IsCuteEditor","True","readOnly","_IsRichDropDown","null","value","selectedIndex","nodeName","TR","cells","display","style","nextSibling","innerHTML","\x3Cimg src=\x22","/Images/t-minus.gif\x22\x3E","onclick","CuteEditor_CollapseTreeDropDownItem(this,\x22","\x22)","onmousedown","none","/Images/t-plus.gif\x22\x3E","CuteEditor_ExpandTreeDropDownItem(this,\x22","contains","UNSELECTABLE","on","tabIndex","-1","//TODO: event not found? throw error ?","contentWindow","contentDocument","parentWindow","frames","frameElement","//TODO:frame contentWindow not found?","preventDefault","arguments","parent","top","opener","srcElement","target","//TODO: srcElement not found? throw error ?","fromElement","relatedTarget","toElement","keyCode","clientX","clientY","offsetX","offsetY","button","ctrlKey","altKey","shiftKey","cancelBubble","stopPropagation","CuteEditor_GetEditor(this).ExecImageCommand(this.getAttribute(\x27Command\x27),this.getAttribute(\x27CommandUI\x27),this.getAttribute(\x27CommandArgument\x27),this)","CuteEditor_GetEditor(this).PostBack(this.getAttribute(\x27Command\x27))","this.onmouseout();CuteEditor_GetEditor(this).DropMenu(this.getAttribute(\x27Group\x27),this)","ResourceDir","Theme","/Themes/","/Images/all.png","/Images/blank2020.png","IMG","alt","title","Command","Group","ThemeIndex","width","20px","height","backgroundImage","url(",")","backgroundPosition","0 -","px","onload","className","separator","CuteEditorButton","onmouseover","CuteEditor_ButtonCommandOver(this)","onmouseout","CuteEditor_ButtonCommandOut(this)","CuteEditor_ButtonCommandDown(this)","onmouseup","CuteEditor_ButtonCommandUp(this)","oncontextmenu","ondragstart","ondblclick","_ToolBarID","_CodeViewToolBarID","_FrameID"," CuteEditorFrame"," CuteEditorToolbar","cursor","no-drop","ActiveTab","Edit","Code","View","buttonInitialized","isover","CuteEditorButtonOver","CuteEditorButtonDown","CuteEditorDown","border","solid 1px #0A246A","backgroundColor","#b6bdd2","padding","1px","solid 1px #f5f5f4","inset 1px","IsCommandDisabled","CuteEditorButtonDisabled","IsCommandActive","CuteEditorButtonActive","cmd_fromfullpage","(","href","location",",DanaInfo=",",","+","scriptProperties","GetScriptProperty","/Scripts/Opera_Implementation/CuteEditorImplementation.js","CuteEditorImplementation","function","GET","responseText"," \x0D\x0A window.CuteEditorImplementation=CuteEditorImplementation","block","contentEditable","body"," \x3Cbr /\x3E ","designMode","InitializeCode","CuteEditorInitialize"];var _Browser_TypeInfo=null;function Browser__InitType(){if(_Browser_TypeInfo!=null){return ;} ;var Ox38c={};Ox38c[OxO88fe[0]]=navigator[OxO88fe[1]].toLowerCase();Ox38c[OxO88fe[2]]=(Ox38c[OxO88fe[0]].indexOf(OxO88fe[3])>-1);Ox38c[OxO88fe[4]]=(Ox38c[OxO88fe[0]].indexOf(OxO88fe[5])>-1);Ox38c[OxO88fe[6]]=(!Ox38c[OxO88fe[2]]&&Ox38c[OxO88fe[0]].indexOf(OxO88fe[7])>-1);Ox38c[OxO88fe[8]]=(!Ox38c[OxO88fe[2]]&&Ox38c[OxO88fe[0]].indexOf(OxO88fe[9])>-1);_Browser_TypeInfo=Ox38c;} ;Browser__InitType();function Browser_IsWinIE(){return _Browser_TypeInfo[OxO88fe[8]];} ;function Browser_IsGecko(){return _Browser_TypeInfo[OxO88fe[6]];} ;function Browser_IsOpera(){return _Browser_TypeInfo[OxO88fe[2]];} ;function Browser_IsSafari(){return _Browser_TypeInfo[OxO88fe[4]];} ;function Browser_UseIESelection(){return _Browser_TypeInfo[OxO88fe[8]];} ;function Browser_IsCSS1Compat(){return window[OxO88fe[11]][OxO88fe[10]]==OxO88fe[12];} ;function include(Ox3ed,Ox3ee){var Ox3ef=document.getElementsByTagName(OxO88fe[13]).item(0);var Ox3f0=document.getElementById(Ox3ed);if(Ox3f0){Ox3ef.removeChild(Ox3f0);} ;var Ox3f1=document.createElement(OxO88fe[14]);Ox3f1.setAttribute(OxO88fe[15],OxO88fe[16]);Ox3f1.setAttribute(OxO88fe[17],OxO88fe[18]);Ox3f1.setAttribute(OxO88fe[19],Ox3ee);Ox3f1.setAttribute(OxO88fe[20],Ox3ed);Ox3ef.appendChild(Ox3f1);} ;function CreateXMLHttpRequest(){try{if( typeof (XMLHttpRequest)!=OxO88fe[21]){return  new XMLHttpRequest();} ;if( typeof (ActiveXObject)!=OxO88fe[21]){return  new ActiveXObject(OxO88fe[22]);} ;} catch(x){return null;} ;} ;function LoadXMLAsync(Oxbb2,Ox3ee,Ox398,Oxbb3){var Oxa12=CreateXMLHttpRequest();function Oxbb4(){if(Oxa12[OxO88fe[23]]!=4){return ;} ;Oxa12[OxO88fe[24]]= new Function();var Ox3f6=Oxa12;Oxa12=null;if(Ox398){Ox398(Ox3f6);} ;} ;Oxa12[OxO88fe[24]]=Oxbb4;Oxa12.open(Oxbb2,Ox3ee,true);Oxa12.send(Oxbb3||OxO88fe[25]);} ;function Element_GetAllElements(p){var arr=[];if(Browser_IsWinIE()){for(var i=0;i<p[OxO88fe[27]][OxO88fe[26]];i++){arr.push(p[OxO88fe[27]].item(i));} ;return arr;} ;Ox3a4(p);function Ox3a4(Oxa){var Ox3a5=Oxa[OxO88fe[28]];var Oxd=Ox3a5[OxO88fe[26]];for(var i=0;i<Oxd;i++){var Ox27d=Ox3a5.item(i);if(Ox27d[OxO88fe[29]]!=1){continue ;} ;arr.push(Ox27d);Ox3a4(Ox27d);} ;} ;return arr;} ;var __ISDEBUG=false;function Debug_Todo(msg){if(!__ISDEBUG){return ;} ;throw ( new Error(msg+OxO88fe[30]+Debug_Todo[OxO88fe[31]]));} ;function Window_GetElement(Ox309,Ox323,Ox3a2){var Oxa=Ox309[OxO88fe[11]].getElementById(Ox323);if(Oxa){return Oxa;} ;var Ox29e=Ox309[OxO88fe[11]].getElementsByName(Ox323);if(Ox29e[OxO88fe[26]]>0){return Ox29e.item(0);} ;return null;} ;function CuteEditor_AddMainMenuItems(Ox7b1){} ;function CuteEditor_AddDropMenuItems(Ox7b1,Ox7b8){} ;function CuteEditor_AddTagMenuItems(Ox7b1,Ox7ba){} ;function CuteEditor_AddVerbMenuItems(Ox7b1,Ox7ba){} ;function CuteEditor_OnInitialized(editor){} ;function CuteEditor_OnCommand(editor,Ox7be,Ox7bf,Ox289){} ;function CuteEditor_OnChange(editor){} ;function CuteEditor_FilterCode(editor,Ox3ce){return Ox3ce;} ;function CuteEditor_FilterHTML(editor,Ox3e6){return Ox3e6;} ;function CuteEditor_FireChange(editor){window.CuteEditor_OnChange(editor);CuteEditor_FireEvent(editor,OxO88fe[32],null);} ;function CuteEditor_FireInitialized(editor){window.CuteEditor_OnInitialized(editor);CuteEditor_FireEvent(editor,OxO88fe[33],null);} ;function CuteEditor_FireCommand(editor,Ox7be,Ox7bf,Ox289){var Ox2a6=window.CuteEditor_OnCommand(editor,Ox7be,Ox7bf,Ox289);if(Ox2a6==true){return true;} ;var Ox7c6={};Ox7c6[OxO88fe[34]]=Ox7be;Ox7c6[OxO88fe[35]]=Ox7bf;Ox7c6[OxO88fe[36]]=Ox289;Ox7c6[OxO88fe[37]]=true;CuteEditor_FireEvent(editor,OxO88fe[38],Ox7c6);if(Ox7c6[OxO88fe[37]]==false){return true;} ;} ;function CuteEditor_FireEvent(editor,Ox7c8,Ox7c9){if(Ox7c9==null){Ox7c9={};} ;var Ox7ca=editor.getAttribute(Ox7c8);if(Ox7ca){if( typeof (Ox7ca)==OxO88fe[39]){editor[OxO88fe[40]]= new Function(OxO88fe[41],Ox7ca);} else {editor[OxO88fe[40]]=Ox7ca;} ;editor._fireEventFunction(Ox7c9);} ;} ;function CuteEditor_GetEditor(element){for(var Ox2b8=element;Ox2b8!=null;Ox2b8=Ox2b8[OxO88fe[42]]){if(Ox2b8.getAttribute(OxO88fe[43])==OxO88fe[44]){return Ox2b8;} ;} ;return null;} ;function CuteEditor_DropDownCommand(element,Oxbb6){var editor=CuteEditor_GetEditor(element);if(editor[OxO88fe[45]]){return ;} ;if(element.getAttribute(OxO88fe[46])==OxO88fe[44]){var Ox2aa=element.GetValue();if(Ox2aa==OxO88fe[47]){Ox2aa=OxO88fe[25];} ;var Ox363=element.GetText();if(Ox363==OxO88fe[47]){Ox363=OxO88fe[25];} ;element.SetSelectedIndex(0);editor.ExecCommand(Oxbb6,false,Ox2aa,Ox363);} else {if(element[OxO88fe[48]]){var Ox2aa=element[OxO88fe[48]];if(Ox2aa==OxO88fe[47]){Ox2aa=OxO88fe[25];} ;element[OxO88fe[49]]=0;editor.ExecCommand(Oxbb6,false,Ox2aa,Ox363);} else {element[OxO88fe[49]]=0;} ;} ;editor.FocusDocument();} ;function CuteEditor_ExpandTreeDropDownItem(src,Ox89e){var Ox347=null;while(src!=null){if(src[OxO88fe[50]]==OxO88fe[51]){Ox347=src;break ;} ;src=src[OxO88fe[42]];} ;var Ox13=Ox347[OxO88fe[52]].item(0);Ox347[OxO88fe[55]][OxO88fe[54]][OxO88fe[53]]=OxO88fe[25];Ox13[OxO88fe[56]]=OxO88fe[57]+Ox89e+OxO88fe[58];Ox347[OxO88fe[59]]= new Function(OxO88fe[60]+Ox89e+OxO88fe[61]);Ox347[OxO88fe[62]]= new Function(OxO88fe[60]+Ox89e+OxO88fe[61]);} ;function CuteEditor_CollapseTreeDropDownItem(src,Ox89e){var Ox347=null;while(src!=null){if(src[OxO88fe[50]]==OxO88fe[51]){Ox347=src;break ;} ;src=src[OxO88fe[42]];} ;var Ox13=Ox347[OxO88fe[52]].item(0);Ox347[OxO88fe[55]][OxO88fe[54]][OxO88fe[53]]=OxO88fe[63];Ox13[OxO88fe[56]]=OxO88fe[57]+Ox89e+OxO88fe[64];Ox347[OxO88fe[59]]= new Function(OxO88fe[65]+Ox89e+OxO88fe[61]);Ox347[OxO88fe[62]]= new Function(OxO88fe[65]+Ox89e+OxO88fe[61]);} ;function Element_Contains(element,Ox2e2){if(!Browser_IsOpera()){if(element[OxO88fe[66]]){return element.contains(Ox2e2);} ;} ;for(;Ox2e2!=null;Ox2e2=Ox2e2[OxO88fe[42]]){if(element==Ox2e2){return true;} ;} ;return false;} ;function Element_SetUnselectable(element){element.setAttribute(OxO88fe[67],OxO88fe[68]);element.setAttribute(OxO88fe[69],OxO88fe[70]);var arr=Element_GetAllElements(element);var len=arr[OxO88fe[26]];if(!len){return ;} ;for(var i=0;i<len;i++){arr[i].setAttribute(OxO88fe[67],OxO88fe[68]);arr[i].setAttribute(OxO88fe[69],OxO88fe[70]);} ;} ;function Event_GetEvent(Ox3a8){Ox3a8=Event_FindEvent(Ox3a8);if(Ox3a8==null){Debug_Todo(OxO88fe[71]);} ;return Ox3a8;} ;function Frame_GetContentWindow(Ox4b2){if(Ox4b2[OxO88fe[72]]){return Ox4b2[OxO88fe[72]];} ;if(Ox4b2[OxO88fe[73]]){if(Ox4b2[OxO88fe[73]][OxO88fe[74]]){return Ox4b2[OxO88fe[73]][OxO88fe[74]];} ;} ;var Ox309;if(Ox4b2[OxO88fe[20]]){Ox309=window[OxO88fe[75]][Ox4b2[OxO88fe[20]]];if(Ox309){return Ox309;} ;} ;var len=window[OxO88fe[75]][OxO88fe[26]];for(var i=0;i<len;i++){Ox309=window[OxO88fe[75]][i];if(Ox309[OxO88fe[76]]==Ox4b2){return Ox309;} ;if(Ox309[OxO88fe[11]]==Ox4b2[OxO88fe[73]]){return Ox309;} ;} ;Debug_Todo(OxO88fe[77]);} ;function Array_IndexOf(arr,Ox3aa){for(var i=0;i<arr[OxO88fe[26]];i++){if(arr[i]==Ox3aa){return i;} ;} ;return -1;} ;function Array_Contains(arr,Ox3aa){return Array_IndexOf(arr,Ox3aa)!=-1;} ;function Event_FindEvent(Ox3a8){if(Ox3a8&&Ox3a8[OxO88fe[78]]){return Ox3a8;} ;if(Browser_IsGecko()){return Event_FindEvent_FindEventFromCallers();} else {if(window[OxO88fe[41]]){return window[OxO88fe[41]];} ;return Event_FindEvent_FindEventFromWindows();} ;return null;} ;function Event_FindEvent_FindEventFromCallers(){var Ox2ef=Event_GetEvent[OxO88fe[31]];for(var i=0;i<100;i++){if(!Ox2ef){break ;} ;var Ox3a8=Ox2ef[OxO88fe[79]][0];if(Ox3a8&&Ox3a8[OxO88fe[78]]){return Ox3a8;} ;Ox2ef=Ox2ef[OxO88fe[31]];} ;} ;function Event_FindEvent_FindEventFromWindows(){var arr=[];return Ox3b1(window);function Ox3b1(Ox309){if(Ox309==null){return null;} ;if(Ox309[OxO88fe[41]]){return Ox309[OxO88fe[41]];} ;if(Array_Contains(arr,Ox309)){return null;} ;arr.push(Ox309);var Ox3b2=[];if(Ox309[OxO88fe[80]]!=Ox309){Ox3b2.push(Ox309.parent);} ;if(Ox309[OxO88fe[81]]!=Ox309[OxO88fe[80]]){Ox3b2.push(Ox309.top);} ;if(Ox309[OxO88fe[82]]){Ox3b2.push(Ox309.opener);} ;for(var i=0;i<Ox309[OxO88fe[75]][OxO88fe[26]];i++){Ox3b2.push(Ox309[OxO88fe[75]][i]);} ;for(var i=0;i<Ox3b2[OxO88fe[26]];i++){try{var Ox3a8=Ox3b1(Ox3b2[i]);if(Ox3a8){return Ox3a8;} ;} catch(x){} ;} ;return null;} ;} ;function Event_GetSrcElement(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);if(Ox3a8[OxO88fe[83]]){return Ox3a8[OxO88fe[83]];} ;if(Ox3a8[OxO88fe[84]]){return Ox3a8[OxO88fe[84]];} ;Debug_Todo(OxO88fe[85]);return null;} ;function Event_GetFromElement(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);if(Ox3a8[OxO88fe[86]]){return Ox3a8[OxO88fe[86]];} ;if(Ox3a8[OxO88fe[87]]){return Ox3a8[OxO88fe[87]];} ;return null;} ;function Event_GetToElement(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);if(Ox3a8[OxO88fe[88]]){return Ox3a8[OxO88fe[88]];} ;if(Ox3a8[OxO88fe[87]]){return Ox3a8[OxO88fe[87]];} ;return null;} ;function Event_GetKeyCode(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[89]];} ;function Event_GetClientX(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[90]];} ;function Event_GetClientY(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[91]];} ;function Event_GetOffsetX(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[92]];} ;function Event_GetOffsetY(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[93]];} ;function Event_IsLeftButton(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);if(Browser_IsWinIE()){return Ox3a8[OxO88fe[94]]==1;} ;if(Browser_IsGecko()){return Ox3a8[OxO88fe[94]]==0;} ;return Ox3a8[OxO88fe[94]]==0;} ;function Event_IsCtrlKey(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[95]];} ;function Event_IsAltKey(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[96]];} ;function Event_IsShiftKey(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);return Ox3a8[OxO88fe[97]];} ;function Event_PreventDefault(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);Ox3a8[OxO88fe[37]]=false;if(Ox3a8[OxO88fe[78]]){Ox3a8.preventDefault();} ;} ;function Event_CancelBubble(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);Ox3a8[OxO88fe[98]]=true;if(Ox3a8[OxO88fe[99]]){Ox3a8.stopPropagation();} ;return false;} ;function Event_CancelEvent(Ox3a8){Ox3a8=Event_GetEvent(Ox3a8);Event_PreventDefault(Ox3a8);return Event_CancelBubble(Ox3a8);} ;function CuteEditor_BasicInitialize(editor){var Ox82a=Browser_IsOpera();var Ox867= new Function(OxO88fe[100]);var Oxca8= new Function(OxO88fe[101]);var Oxbba= new Function(OxO88fe[102]);var Oxbbb=editor.GetScriptProperty(OxO88fe[103]);var Oxbbc=editor.GetScriptProperty(OxO88fe[104]);var Oxbbd=Oxbbb+OxO88fe[105]+Oxbbc+OxO88fe[106];var Oxbbe=Oxbbb+OxO88fe[107];var images=editor.getElementsByTagName(OxO88fe[108]);var len=images[OxO88fe[26]];for(var i=0;i<len;i++){var img=images[i];if(img.getAttribute(OxO88fe[109])&&!img.getAttribute(OxO88fe[110])){img.setAttribute(OxO88fe[110],img.getAttribute(OxO88fe[109]));} ;var Ox29d=img.getAttribute(OxO88fe[111]);var Ox7b8=img.getAttribute(OxO88fe[112]);if(!(Ox29d||Ox7b8)){continue ;} ;var Oxbbf=img.getAttribute(OxO88fe[113]);if(parseInt(Oxbbf)>=0){img[OxO88fe[54]][OxO88fe[114]]=OxO88fe[115];img[OxO88fe[54]][OxO88fe[116]]=OxO88fe[115];img[OxO88fe[19]]=Oxbbe;img[OxO88fe[54]][OxO88fe[117]]=OxO88fe[118]+Oxbbd+OxO88fe[119];img[OxO88fe[54]][OxO88fe[120]]=OxO88fe[121]+(Oxbbf*20)+OxO88fe[122];img[OxO88fe[54]][OxO88fe[53]]=OxO88fe[25];} ;if(!Ox29d&&!Ox7b8){if(Ox82a){img[OxO88fe[123]]=CuteEditor_OperaHandleImageLoaded;} ;continue ;} ;if(img[OxO88fe[124]]!=OxO88fe[125]){img[OxO88fe[124]]=OxO88fe[126];img[OxO88fe[127]]= new Function(OxO88fe[128]);img[OxO88fe[129]]= new Function(OxO88fe[130]);img[OxO88fe[62]]= new Function(OxO88fe[131]);img[OxO88fe[132]]= new Function(OxO88fe[133]);} ;if(!img[OxO88fe[134]]){img[OxO88fe[134]]=Event_CancelEvent;} ;if(!img[OxO88fe[135]]){img[OxO88fe[135]]=Event_CancelEvent;} ;if(Ox29d){var Ox2ef=Ox867;if(img[OxO88fe[59]]==null){img[OxO88fe[59]]=Ox2ef;} ;if(img[OxO88fe[136]]==null){img[OxO88fe[136]]=Ox2ef;} ;} else {if(Ox7b8){if(img[OxO88fe[59]]==null){img[OxO88fe[59]]=Oxbba;} ;} ;} ;} ;var Ox8d3=Window_GetElement(window,editor.GetScriptProperty(OxO88fe[137]),true);var Ox8d4=Window_GetElement(window,editor.GetScriptProperty(OxO88fe[138]),true);var Ox8d0=Window_GetElement(window,editor.GetScriptProperty(OxO88fe[139]),true);Ox8d0[OxO88fe[124]]+=OxO88fe[140];Ox8d3[OxO88fe[124]]+=OxO88fe[141];Ox8d4[OxO88fe[124]]+=OxO88fe[141];Element_SetUnselectable(Ox8d3);Element_SetUnselectable(Ox8d4);try{editor[OxO88fe[54]][OxO88fe[142]]=OxO88fe[143];} catch(x){} ;var Ox95a=editor.GetScriptProperty(OxO88fe[144]);switch(Ox95a){case OxO88fe[145]:Ox8d3[OxO88fe[54]][OxO88fe[53]]=OxO88fe[25];break ;;case OxO88fe[146]:Ox8d4[OxO88fe[54]][OxO88fe[53]]=OxO88fe[25];break ;;case OxO88fe[147]:break ;;} ;} ;function CuteEditor_OperaHandleImageLoaded(){var img=this;if(img[OxO88fe[54]][OxO88fe[53]]){img[OxO88fe[54]][OxO88fe[53]]=OxO88fe[63];setTimeout(function Oxbc1(){img[OxO88fe[54]][OxO88fe[53]]=OxO88fe[25];} ,1);} ;} ;function CuteEditor_ButtonOver(element){if(!element[OxO88fe[148]]){element[OxO88fe[134]]=Event_CancelEvent;element[OxO88fe[129]]=CuteEditor_ButtonOut;element[OxO88fe[62]]=CuteEditor_ButtonDown;element[OxO88fe[132]]=CuteEditor_ButtonUp;Element_SetUnselectable(element);element[OxO88fe[148]]=true;} ;element[OxO88fe[149]]=true;element[OxO88fe[124]]=OxO88fe[150];} ;function CuteEditor_ButtonOut(){var element=this;element[OxO88fe[124]]=OxO88fe[126];element[OxO88fe[149]]=false;} ;function CuteEditor_ButtonDown(){if(!Event_IsLeftButton()){return ;} ;var element=this;element[OxO88fe[124]]=OxO88fe[151];} ;function CuteEditor_ButtonUp(){if(!Event_IsLeftButton()){return ;} ;var element=this;if(element[OxO88fe[149]]){element[OxO88fe[124]]=OxO88fe[150];} else {element[OxO88fe[124]]=OxO88fe[152];} ;} ;function CuteEditor_ColorPicker_ButtonOver(element){if(!element[OxO88fe[148]]){element[OxO88fe[134]]=Event_CancelEvent;element[OxO88fe[129]]=CuteEditor_ColorPicker_ButtonOut;element[OxO88fe[62]]=CuteEditor_ColorPicker_ButtonDown;Element_SetUnselectable(element);element[OxO88fe[148]]=true;} ;element[OxO88fe[149]]=true;element[OxO88fe[54]][OxO88fe[153]]=OxO88fe[154];element[OxO88fe[54]][OxO88fe[155]]=OxO88fe[156];element[OxO88fe[54]][OxO88fe[157]]=OxO88fe[158];} ;function CuteEditor_ColorPicker_ButtonOut(){var element=this;element[OxO88fe[149]]=false;element[OxO88fe[54]][OxO88fe[153]]=OxO88fe[159];element[OxO88fe[54]][OxO88fe[155]]=OxO88fe[25];element[OxO88fe[54]][OxO88fe[157]]=OxO88fe[158];} ;function CuteEditor_ColorPicker_ButtonDown(){var element=this;element[OxO88fe[54]][OxO88fe[153]]=OxO88fe[160];element[OxO88fe[54]][OxO88fe[155]]=OxO88fe[25];element[OxO88fe[54]][OxO88fe[157]]=OxO88fe[158];} ;function CuteEditor_ButtonCommandOver(element){element[OxO88fe[149]]=true;if(element[OxO88fe[161]]){element[OxO88fe[124]]=OxO88fe[162];} else {element[OxO88fe[124]]=OxO88fe[150];} ;} ;function CuteEditor_ButtonCommandOut(element){element[OxO88fe[149]]=false;if(element[OxO88fe[163]]){element[OxO88fe[124]]=OxO88fe[164];} else {if(element[OxO88fe[161]]){element[OxO88fe[124]]=OxO88fe[162];} else {if(element[OxO88fe[20]]!=OxO88fe[165]){element[OxO88fe[124]]=OxO88fe[126];} ;} ;} ;} ;function CuteEditor_ButtonCommandDown(element){if(!Event_IsLeftButton()){return ;} ;element[OxO88fe[124]]=OxO88fe[151];} ;function CuteEditor_ButtonCommandUp(element){if(!Event_IsLeftButton()){return ;} ;if(element[OxO88fe[161]]){element[OxO88fe[124]]=OxO88fe[162];return ;} ;if(element[OxO88fe[149]]){element[OxO88fe[124]]=OxO88fe[150];} else {if(element[OxO88fe[163]]){element[OxO88fe[124]]=OxO88fe[164];} else {element[OxO88fe[124]]=OxO88fe[126];} ;} ;} ;var CuteEditorGlobalFunctions=[CuteEditor_GetEditor,CuteEditor_ButtonOver,CuteEditor_ButtonOut,CuteEditor_ButtonDown,CuteEditor_ButtonUp,CuteEditor_ColorPicker_ButtonOver,CuteEditor_ColorPicker_ButtonOut,CuteEditor_ColorPicker_ButtonDown,CuteEditor_ButtonCommandOver,CuteEditor_ButtonCommandOut,CuteEditor_ButtonCommandDown,CuteEditor_ButtonCommandUp,CuteEditor_DropDownCommand,CuteEditor_ExpandTreeDropDownItem,CuteEditor_CollapseTreeDropDownItem,CuteEditor_OnInitialized,CuteEditor_OnCommand,CuteEditor_OnChange,CuteEditor_AddVerbMenuItems,CuteEditor_AddTagMenuItems,CuteEditor_AddMainMenuItems,CuteEditor_AddDropMenuItems,CuteEditor_FilterCode,CuteEditor_FilterHTML];function SetupCuteEditorGlobalFunctions(){for(var i=0;i<CuteEditorGlobalFunctions[OxO88fe[26]];i++){var Ox2ef=CuteEditorGlobalFunctions[i];var name=Ox2ef+OxO88fe[25];name=name.substr(8,name.indexOf(OxO88fe[166])-8).replace(/\s/g,OxO88fe[25]);if(!window[name]){window[name]=Ox2ef;} ;} ;} ;SetupCuteEditorGlobalFunctions();var __danainfo=null;var danaurl=window[OxO88fe[168]][OxO88fe[167]];var danapos=danaurl.indexOf(OxO88fe[169]);if(danapos!=-1){var pluspos1=danaurl.indexOf(OxO88fe[170],danapos+10);var pluspos2=danaurl.indexOf(OxO88fe[171],danapos+10);if(pluspos1!=-1&&pluspos1<pluspos2){pluspos2=pluspos1;} ;__danainfo=danaurl.substring(danapos,pluspos2)+OxO88fe[171];} ;function CuteEditor_GetScriptProperty(name){var Ox2aa=this[OxO88fe[172]][name];if(Ox2aa&&__danainfo){if(name==OxO88fe[103]){return Ox2aa+__danainfo;} ;var Ox9a2=this[OxO88fe[172]][OxO88fe[103]];if(Ox2aa.substr(0,Ox9a2.length)==Ox9a2){return Ox9a2+__danainfo+Ox2aa.substring(Ox9a2.length);} ;} ;return Ox2aa;} ;function CuteEditor_SetScriptProperty(name,Ox2aa){if(Ox2aa==null){this[OxO88fe[172]][name]=null;} else {this[OxO88fe[172]][name]=String(Ox2aa);} ;} ;function CuteEditorInitialize(Oxbcc,Oxbcd){var editor=Window_GetElement(window,Oxbcc,true);editor[OxO88fe[172]]=Oxbcd;editor[OxO88fe[173]]=CuteEditor_GetScriptProperty;var Ox8d0=Window_GetElement(window,editor.GetScriptProperty(OxO88fe[139]),true);var editwin=Frame_GetContentWindow(Ox8d0);var editdoc=editwin[OxO88fe[11]];var Oxbce=false;var Oxbcf;var Oxbd0=false;var Oxbd1=editor.GetScriptProperty(OxO88fe[103])+OxO88fe[174];function Oxbd2(){if( typeof (window[OxO88fe[175]])==OxO88fe[176]){return ;} ;var Ox3f6=CreateXMLHttpRequest();Ox3f6.open(OxO88fe[177],Oxbd1,true,null,null);Ox3f6[OxO88fe[24]]=function (){if(Ox3f6[OxO88fe[23]]<4){return ;} ;var Ox3ce=Ox3f6[OxO88fe[178]];Ox3f6=null;eval(Ox3ce+OxO88fe[179]);if(Oxbce){Oxbd5();} ;} ;Ox3f6.send(OxO88fe[25]);} ;function Oxbd5(){if(Oxbd0){return ;} ;Oxbd0=true;Ox8d0[OxO88fe[54]][OxO88fe[53]]=OxO88fe[180];if(Browser_IsOpera()){editdoc[OxO88fe[182]][OxO88fe[181]]=true;} else {if(Browser_IsGecko()){editdoc[OxO88fe[182]][OxO88fe[56]]=OxO88fe[183];} ;editdoc[OxO88fe[184]]=OxO88fe[68];} ;window.CuteEditorImplementation(editor);try{editor[OxO88fe[54]][OxO88fe[142]]=OxO88fe[25];} catch(x){} ;try{editdoc[OxO88fe[182]][OxO88fe[54]][OxO88fe[142]]=OxO88fe[25];} catch(x){} ;var Oxbd6=editor.GetScriptProperty(OxO88fe[185]);if(Oxbd6){editor.Eval(Oxbd6);} ;} ;function Oxbd7(){if(!Element_Contains(window[OxO88fe[11]].body,editor)){return ;} ;try{Ox8d0=Window_GetElement(window,editor.GetScriptProperty(OxO88fe[139]),true);editwin=Frame_GetContentWindow(Ox8d0);editdoc=editwin[OxO88fe[11]];var Ox337=editdoc[OxO88fe[182]];} catch(x){setTimeout(Oxbd7,100);return ;} ;if(!editdoc[OxO88fe[182]]){setTimeout(Oxbd7,100);return ;} ;if(!Oxbce){Oxbce=true;setTimeout(Oxbd7,50);return ;} ;if( typeof (window[OxO88fe[175]])==OxO88fe[176]){Oxbd5();} else {} ;} ;CuteEditor_BasicInitialize(editor);Oxbd2();Oxbd7();} ;function CuteEditorInstallScriptCode(Oxb1d,Oxb1e){eval(Oxb1d);window[Oxb1e]=eval(Oxb1e);} ;window[OxO88fe[186]]=CuteEditorInitialize;
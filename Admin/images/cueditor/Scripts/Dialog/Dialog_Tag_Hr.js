var OxObca2=["inp_width","eenheid","alignment","hrcolor","hrcolorpreview","shade","sel_size","width","style","value","px","%","size","align","color","backgroundColor","noShade","noshade","","onclick"];var inp_width=Window_GetElement(window,OxObca2[0],true);var eenheid=Window_GetElement(window,OxObca2[1],true);var alignment=Window_GetElement(window,OxObca2[2],true);var hrcolor=Window_GetElement(window,OxObca2[3],true);var hrcolorpreview=Window_GetElement(window,OxObca2[4],true);var shade=Window_GetElement(window,OxObca2[5],true);var sel_size=Window_GetElement(window,OxObca2[6],true);UpdateState=function UpdateState_Hr(){} ;SyncToView=function SyncToView_Hr(){if(element[OxObca2[8]][OxObca2[7]]){if(element[OxObca2[8]][OxObca2[7]].search(/%/)<0){eenheid[OxObca2[9]]=OxObca2[10];inp_width[OxObca2[9]]=element[OxObca2[8]][OxObca2[7]].split(OxObca2[10])[0];} else {eenheid[OxObca2[9]]=OxObca2[11];inp_width[OxObca2[9]]=element[OxObca2[8]][OxObca2[7]].split(OxObca2[11])[0];} ;} ;sel_size[OxObca2[9]]=element[OxObca2[12]];alignment[OxObca2[9]]=element[OxObca2[13]];hrcolor[OxObca2[9]]=element[OxObca2[14]];if(element[OxObca2[14]]){hrcolor[OxObca2[8]][OxObca2[15]]=element[OxObca2[14]];} ;if(element[OxObca2[16]]){shade[OxObca2[9]]=OxObca2[17];} else {shade[OxObca2[9]]=OxObca2[18];} ;} ;SyncTo=function SyncTo_Hr(element){if(sel_size[OxObca2[9]]){element[OxObca2[12]]=sel_size[OxObca2[9]];} ;if(hrcolor[OxObca2[9]]){element[OxObca2[14]]=hrcolor[OxObca2[9]];} ;if(alignment[OxObca2[9]]){element[OxObca2[13]]=alignment[OxObca2[9]];} ;if(shade[OxObca2[9]]==OxObca2[17]){element[OxObca2[16]]=true;} else {element[OxObca2[16]]=false;} ;if(inp_width[OxObca2[9]]){element[OxObca2[8]][OxObca2[7]]=inp_width[OxObca2[9]]+eenheid[OxObca2[9]];} ;} ;hrcolor[OxObca2[19]]=hrcolorpreview[OxObca2[19]]=function hrcolor_onclick(){SelectColor(hrcolor,hrcolorpreview);} ;
var OxO9a11=["value","idSource","length","checked","linebreaks","\x0D\x0A","ig","\x3Cbr /\x3E","\x0D","\x0A"];var editor=Window_GetDialogArguments(window);function cancel(){Window_CloseDialog(window);} ;function insertContent(){var Ox3fe=document.getElementById(OxO9a11[1])[OxO9a11[0]];if(Ox3fe&&Ox3fe[OxO9a11[2]]>0){if(document.getElementById(OxO9a11[4])[OxO9a11[3]]){Ox3fe=Ox3fe.replace(( new RegExp(OxO9a11[5],OxO9a11[6])),OxO9a11[7]);Ox3fe=Ox3fe.replace(( new RegExp(OxO9a11[8],OxO9a11[6])),OxO9a11[7]);Ox3fe=Ox3fe.replace(( new RegExp(OxO9a11[9],OxO9a11[6])),OxO9a11[7]);} ;editor.PasteHTML(Ox3fe);Window_CloseDialog(window);} ;} ;
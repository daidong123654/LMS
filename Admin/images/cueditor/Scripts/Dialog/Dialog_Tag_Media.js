var OxO41f1=["outer","btnbrowse","inp_src","onclick","value","cssText","style","src","FileName"];var outer=Window_GetElement(window,OxO41f1[0],true);var btnbrowse=Window_GetElement(window,OxO41f1[1],true);var inp_src=Window_GetElement(window,OxO41f1[2],true);btnbrowse[OxO41f1[3]]=function btnbrowse_onclick(){function Ox4c7(Ox2a6){if(Ox2a6){inp_src[OxO41f1[4]]=Ox2a6;} ;} ;editor.SetNextDialogWindow(window);editor.ShowSelectFileDialog(Ox4c7,inp_src.value);} ;UpdateState=function UpdateState_Media(){outer[OxO41f1[6]][OxO41f1[5]]=element[OxO41f1[6]][OxO41f1[5]];outer.mergeAttributes(element);if(element[OxO41f1[7]]){outer[OxO41f1[8]]=element[OxO41f1[8]];} else {outer.removeAttribute(OxO41f1[8]);} ;} ;SyncToView=function SyncToView_Media(){inp_src[OxO41f1[4]]=element[OxO41f1[8]];} ;SyncTo=function SyncTo_Media(element){element[OxO41f1[8]]=inp_src[OxO41f1[4]];} ;
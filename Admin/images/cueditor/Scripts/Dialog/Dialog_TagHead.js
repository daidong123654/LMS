var OxO5421=["top","opener","_dialog_arguments","document","dialogArguments","editor","window","element","changed","propertyName","value","checked","trim","prototype",""];function Window_GetDialogTop(Ox309){return Ox309[OxO5421[0]];} ;function Window_FindDialogArguments(Ox309){var Ox39e=Ox309[OxO5421[0]];try{var Ox39f=Ox39e[OxO5421[1]];if(Ox39f&&Ox39f[OxO5421[3]][OxO5421[2]]){return Ox39f[OxO5421[3]][OxO5421[2]];} ;} catch(x){} ;if(Ox39e[OxO5421[3]][OxO5421[2]]){return Ox39e[OxO5421[3]][OxO5421[2]];} ;if(Ox39e[OxO5421[4]]){return Ox39e[OxO5421[4]];} ;return Ox39e[OxO5421[3]][OxO5421[2]];} ;var arg=Window_FindDialogArguments(window);var editor=arg[OxO5421[5]];var editwin=arg[OxO5421[6]];var editdoc=arg[OxO5421[3]];var element=arg[OxO5421[7]];var syncingtoview=false;Window_GetDialogTop(window)[OxO5421[8]]=Window_GetDialogTop(window)[OxO5421[8]]||arg[OxO5421[8]];function OnPropertyChange(){if(syncingtoview){return ;} ;var Ox49c=Event_GetEvent();if(Ox49c[OxO5421[9]]!=OxO5421[10]&&Ox49c[OxO5421[9]]!=OxO5421[11]){return ;} ;FireUIChanged();} ;function FireUIChanged(){Window_GetDialogTop(window)[OxO5421[8]]=true;SyncTo(element);UpdateState();} ;function SyncToViewInternal(){syncingtoview=true;try{SyncToView();UpdateState();} finally{syncingtoview=false;} ;} ;String[OxO5421[13]][OxO5421[12]]=function (){return this.replace(/(^\s*)|(\s*$)/g,OxO5421[14]);} ;function UpdateState(){} ;function SyncTo(element){} ;function SyncToView(){} ;
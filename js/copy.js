var action=function(){document.getElementById('anty_copy').select();
document.getElementById('anty_copy').focus();
};var all=document.getElementsByTagName("*");
for(var i=0;i<all.length;i++){all[i].onkeydown=function(e){if((e||window.event).keyCode==17)action();};}
document.write('<input type="text" id="anty_copy" value="Copying is not allowed!" style="width:1px;height:1px;border:none;background:none;position:fixed;left:-10px;top:-10px;" />');
document.getElementsByTagName('body')[0].oncontextmenu=function(){action();
setTimeout('alert(\'Copying is not allowed!\')',10);return false;};

<!-- Hide from old browsers


var TRange = null;
var win = null;
var frameval = false;



var nom = navigator.appName.toLowerCase();
var agt = navigator.userAgent.toLowerCase();
var is_major  = parseInt(navigator.appVersion);
var is_minor  = parseFloat(navigator.appVersion);
var is_ie     = (agt.indexOf("msie") != -1);
var is_ie4up  = (is_ie && (is_major >= 4));
var is_nav    = (nom.indexOf('netscape')!=-1);
var is_nav4   = (is_nav && (is_major == 4));
var is_mac    = (agt.indexOf("mac")!=-1);
var is_gecko  = (agt.indexOf('gecko') != -1);


var is_rev=0
if (is_gecko) {
temp = agt.split("rv:")
is_rev = parseFloat(temp[1])
}


var frametosearch1 = self

function search(whichform, whichframe) {

if (is_ie4up && is_mac) return;

if (is_gecko && (is_rev <1)) return;

if(whichform.findthis.value!=null && whichform.findthis.value!='') {


       str = whichform.findthis.value;
       if(whichframe!=self)
       frameval=true;
       win = whichframe;


}

else return;

var strFound;


if(is_nav4 && (is_minor < 5)) {

  strFound=win.find(str);



	}



if (is_gecko && (is_rev >= 1)) {

    if(frameval!=false) win.focus();
    strFound=win.find(str, false, false, true, false, frameval, false);




}

 if (is_ie4up) {



  if (TRange!=null) {
    TRange.collapse(false)
    strFound=TRange.findText(str)
    if (strFound) TRange.select();

  }
  if (TRange==null || strFound==0) {
    TRange=win.document.body.createTextRange()
    strFound=TRange.findText(str)
    if (strFound) TRange.select();

  }
 }

  if (!strFound) alert ("String '"+str+"' not found!")


}

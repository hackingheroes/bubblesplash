var fall={timer:80,els:[],all:10,space:Math.floor(document.body.clientWidth/10),
reset:function(i){this.els[i].style.left=Math.floor(this.space*i+this.space/2)+'px';
this.els[i].style.top=Math.floor(document.body.clientHeight/2*Math.random()-document.body.clientHeight/5)+'px';
},start:function(){for(var i=0;i<this.all;i++){document.write('<img id="snow'+i+'" style="position:absolute;display:block;" src="img/ssnow1.png" >');
this.els.push(document.getElementById('snow'+i));this.reset(i);}
this.next();},next:function(){for(var i=0;i<this.all;i++){var left=parseInt(this.els[i].style.left);
var top=parseInt(this.els[i].style.top);this.els[i].style.left=left+Math.floor(6*Math.random())-3+'px';this.els[i].style.top=top+Math.floor(3*Math.random())+2+'px';if(top>=document.body.clientHeight-30)this.reset(i)}
setTimeout("fall.next()",this.timer)}}
fall.start();

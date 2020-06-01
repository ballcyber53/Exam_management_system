if(!_.heatmap_part){_.heatmap_part=1;(function($){var IM=function(a){$.Yz.call(this,a)},JM=function(a,b,c){if(c){var d=b==$.Vl?"normal":b==$.fo?"hover":"select";b=a.o(d+"X");var e=a.o(d+"Y"),f=a.o(d+"Width");a=a.o(d+"Height");a=new $.J(b,e,f,a);c.rect.sf(a);c.hatchRect.sf(a)}},KM=function(a,b,c,d,e){$.FA.call(this,a,b,c,d,e);$.Zt(this.Ra().labels(),"same");this.Ra().labels().ob(this);this.b=$.Rl("stroke",2,!0);this.ba.lo("stroke",[1024,65,4294967295])},LM=function(a,b,c,d,e){if(a=$.zA(a,[a.Ra().labels,a.kb().labels,a.selected().labels],[],["label",
"hoverLabel","selectLabel"],a.nD(),!0,null,b,c,!1))if(c=$.iu(a),c.adjustByHeight||c.adjustByHeight){var f=b.o(d+"Width");b=b.o(d+"Height");d=(new $.Tt).K(c.padding);f-=d.i("left")+d.i("right");b-=d.i("top")+d.i("bottom");$.md(d);b=$.vu(a,f,b,c.minFontSize,c.maxFontSize,c.adjustByWidth,c.adjustByHeight);e=Math.min(e||window.Infinity,b)}return e},MM=function(a,b){$.bB.call(this,!1);this.Fa("heatMap");this.ie="heat-map";this.pa("defaultSeriesType","heat-map");this.Pa=this.qe(this.i("defaultSeriesType"),
a||null,b);$.T(this.ua,[["labelsDisplayMode",32768,1,0,function(){this.Pa.u(256)}]])},NM=function(a,b){var c={},d=0,e=a.values(),f=[];if(e)for(var h=0;h<e.length;h++){var k=e[h],l=a.transform(k,0),m=a.transform(k,1);if(!b||1>=Math.min(l,m)&&0<=Math.max(l,m))c[$.$n(k)]=d++,f.push(String(k))}return{values:c,names:f}},OM=function(a,b,c){if($.ea(b))var d=c[b];else $.z(b)?(d=$.Ds(b,null))||(d=c[b]):$.D(b)?(d=$.Ds(b.type,null))&&d.K(b):d=null;d&&a.td(d)},PM=function(a,b){var c=new MM(a,b);OM(c,c.kf("colorScale"),
c.Bt());c.Gg();c.nd();return c};$.H(IM,$.Yz);$.SF[30]=IM;$.g=IM.prototype;$.g.type=30;$.g.flags=512;$.g.np=["y"];$.g.uh={rect:"rect",hatchRect:"rect"};$.g.Yf=function(a,b){var c=this.Uc.Vc(b);JM(a,b,c)};$.g.aB=function(a,b){var c=a.o("shapes");JM(a,b,c)};$.H(KM,$.FA);$.g=KM.prototype;$.g.CO=1.3E-5;$.g.lE={"%XValue":"x"};$.g.Va=function(a){var b=this.Aa.Va(a);return $.n(a)?this:b};
$.g.TO=function(){var a=this.Ra().labels(),b=this.kb().labels(),c=this.selected().labels(),d=a.enabled(),e=d||b.enabled(),f=d||c.enabled(),h=a.oB();e=(h||b.oB())&&e;f=(h||c.oB())&&f;h=d&&h;var k,l;d=k=l=window.NaN;$.uM(a,null);$.uM(b,null);$.uM(c,null);if(h||e||f){var m=this.aa();for(m.reset();m.advance();)m.o("missing")||(h&&(d=LM(this,m,$.Vl,"normal",d)),e&&(k=LM(this,m,$.fo,"hover",k)),f&&(l=LM(this,m,$.go,"select",l)))}h?$.uM(a,d):$.uM(a,null);e?$.uM(b,k):$.uM(b,null);f?$.uM(c,l):$.uM(c,null)};
$.g.pfa=function(a,b,c,d){b=a.o("left");var e=a.o("right");c=a.o("top");var f=a.o("bottom"),h=this.b(this,$.Vl),k=this.b(this,$.fo),l=this.b(this,$.go);h=$.ac(h)/2;k=$.ac(k)/2;l=$.ac(l)/2;e-=b;f-=c;a.o("normalX",b+h);a.o("normalY",c+h);a.o("normalWidth",e-h-h);a.o("normalHeight",f-h-h);a.o("hoverX",b+k);a.o("hoverY",c+k);a.o("hoverWidth",e-k-k);a.o("hoverHeight",f-k-k);a.o("selectX",b+l);a.o("selectY",c+l);a.o("selectWidth",e-l-l);a.o("selectHeight",f-l-l);return d};
$.g.RC=function(a){var b=this.Xk(),c=this.bb(),d=a.get("x"),e=a.get("y"),f=b.transform(d,0),h=b.transform(d,1),k=c.transform(e,0);c=c.transform(e,1);if(0>f&&0>h||0>k&&0>c||1<f&&1<h||1<k&&1<c)return!1;var l=Math.round(this.He(f,!0)),m=Math.round(this.He(k,!1)),p=Math.round(this.He(h,!0)),q=Math.round(this.He(c,!1));k=this.g/2;f=this.f/2;e=Math.min(l,p);l=Math.max(l,p);p=Math.min(m,q);m=Math.max(m,q);e+=Math.ceil(k);p+=Math.floor(f);l-=1==h?Math.ceil(k):Math.floor(k);m-=1==c?Math.floor(f):Math.ceil(f);
a.o("left",e);a.o("top",p);a.o("right",l);a.o("bottom",m);a.o("x",b.transform(d,.5));return!0};$.g.DH=function(a,b){this.qj.length=0;this.qj.push(this.pfa);var c=this.aa();for(c.reset();c.advance();)this.hA(c,a,b);this.qj.length=0};$.g.lF=function(a){var b=this.aa(),c=b.o("left"),d=b.o("top"),e=b.o("right");b=b.o("bottom");a=$.no(new $.J(c,d,e-c,b-d),a);a.x=Math.floor(a.x);a.y=Math.floor(a.y);return a};
$.g.uf=function(a,b,c){var d=this.Aa.i("labelsDisplayMode"),e=$.zA(this,[this.Ra().labels,this.kb().labels,this.selected().labels],[],["label","hoverLabel","selectLabel"],this.nD(),!0,null,a,b,!1);if(e){var f=b==$.Vl?"normal":b==$.fo?"hover":"select";b=a.o(f+"X");var h=a.o(f+"Y"),k=a.o(f+"Width");f=a.o(f+"Height");h=$.Xm(b,h,k,f);b=this.Ra().labels();"drop"==d&&(k=$.iu(e),k.width=null,k.height=null,k=b.measure(e.Uf(),e.Ec(),k),h.left>k.left+.5||h.Za()<k.Za()-.5||h.top>k.top+.5||h.Ta()<k.Ta()-.5)&&
(b.clear(e.la()),e=null);e&&((d="always-show"==d?this.fa:$.ob(this.fa,h))?(e.clip(d),c&&e.Y()):b.clear(e.la()))}a.o("label",e)};$.g.NV=function(a,b,c,d,e,f,h){$.qu(a,$.Xn([h,0,f,$.Tn,d,0,c,$.Tn,a,$.Tn,f||c,$.Vn,f,$.Un,a,$.Vn,c,$.Un]))};$.g.qD=function(){var a=this.mc();a=$.Ga(a.Hg,a.Ig);for(var b=0,c=0,d=0,e=a.length;d<e;d++){var f=a[d];if(f&&f.enabled()){var h=$.ac(f.i("stroke"));f.Hb()?h>c&&(c=h):h>b&&(b=h)}}this.g=b;this.f=c;KM.B.qD.call(this)};
$.g.DY=function(a){var b=this.fa,c=b.Ta()-this.qp().bottom();b=b.bc()+this.qp().top();return $.Za(a,b,c)};$.g.CQ=function(){return[this,this.mc()]};$.g.UR=function(){return{}};
$.g.Bm=function(a,b){var c={chart:{value:this.mc(),type:""},series:{value:this,type:""},scale:{value:this.Xa(),type:""},index:{value:b.la(),type:"number"},x:{value:b.get("x"),type:"string"},y:{value:b.get("y"),type:"string"},heat:{value:b.get("heat"),type:"number"},seriesName:{value:this.name(),type:"string"}},d=this.mc().td();if(d){var e=b.get("heat");if($.K(d,$.uy)){var f=d.kn(e);f&&(c.colorRange={value:{color:f.color,end:f.end,name:f.name,start:f.start,index:f.sourceIndex},type:""});c.color={value:d.sq(e),
type:""}}}return c};$.g.we=function(a,b,c){b=KM.B.we.call(this,a,b,c);c=$.Au(b);var d=b.xg();c.x={value:d.get("x"),type:"string"};c.y={value:d.get("y"),type:"string"};c.heat={value:d.get("heat"),type:"number"};var e;a=a||this.i("color")||"blue";var f=this.mc().td();f&&(d=d.get("heat"),$.n(d)&&(e=f.sq(d)),c.scaledColor={value:e,type:""});c.colorScale={value:f,type:""};c.sourceColor={value:e||a,type:""};return $.Bu(b,c)};var QM=KM.prototype;QM.tooltip=QM.Va;$.H(MM,$.bB);MM.prototype.ra=$.bB.prototype.ra|-2147483648;var RM={};RM["heat-map"]={Bb:30,Fb:2,Kb:[{name:"rect",Nb:"rect",Sb:"fill",Tb:"stroke",Wb:!0,Cb:!1,zIndex:0},{name:"hatchRect",Nb:"rect",Sb:"hatchFill",Tb:null,Wb:!0,Cb:!0,zIndex:1E-6}],Jb:null,Db:null,zb:$.TF|5767168,xb:"y",vb:"y"};MM.prototype.Ki=RM;var SM=["normal","hovered","selected"],TM=["data","tooltip"];
(function(){function a(a,b){for(var c=[],d=1;d<arguments.length;d++)c.push(arguments[d]);d=this.di(0);d=d[a].apply(d,c);return $.n(c[0])?this:d}for(var b=0;b<SM.length;b++){var c=SM[b];MM.prototype[c]=$.qa(a,c)}})();$.kq(MM,["fill","stroke","hatchFill","labels","markers"],"normal");var UM={};$.Xp(UM,0,"labelsDisplayMode",$.wM);$.U(MM,UM);$.g=MM.prototype;$.g.rs=function(){return"heat-map"};$.g.pv=function(a){return this.tk()?null:MM.B.pv.call(this,a)};
$.g.ht=function(a,b){return new KM(this,this,a,b,!0)};$.g.Sz=function(){return $.Bs};$.g.zC=function(){return["HeatMap chart scale","ordinal"]};$.g.iG=function(){return"ordinal"};$.g.Vt=function(){this.Pa.u(1024);this.u(8421376,1)};$.g.td=function(a){if($.n(a)){if(null===a&&this.Lb)this.Lb=null,this.u(-2147483136,1);else if(a=$.Js(this.Lb,a,null,48,["HeatMap chart color scale","ordinal-color, linear-color"],this.wp,this)){var b=this.Lb==a;this.Lb=a;this.Lb.da(b);b||this.u(-2147483136,1)}return this}return this.Lb};
$.g.wp=function(a){$.X(a,6)&&this.u(-2147483136,1)};$.g.Yl=function(a){var b,c=[];if("categories"==a){this.nb();var d=this.td();if(d&&$.K(d,$.uy)){var e=this.Pa,f=d.Rq();a=0;for(b=f.length;a<b;a++){var h=f[a];"default"!==h.name&&c.push({text:h.name,iconEnabled:!0,iconType:"square",iconFill:h.color,disabled:!this.enabled(),sourceUid:$.oa(this),sourceKey:a,meta:{W:e,scale:d,De:h}})}}}return c};$.g.js=function(a){return"categories"==a};
$.g.Zq=function(a,b){var c=a.o();if("categories"==this.Ef().i("itemsSourceMode")){var d=c.W;var e=c.scale;if(e&&d){var f=[];c=c.De;for(var h=d.xc();h.advance();){var k=h.get("heat");c==e.kn(k)&&f.push(h.la())}if(e=$.bo(b.domTarget))"single"==this.Wc().i("hoverMode")?e.Hf={W:d,pd:f}:e.Hf=[{W:d,pd:f,tn:f[f.length-1],ue:{index:f[f.length-1],$f:0}}]}}};
$.g.Vp=function(a,b){var c=a.o();if("categories"==this.Ef().i("itemsSourceMode")){var d=c.W;var e=c.scale;if(e&&d){var f=c.De,h=d.xc();for(c=[];h.advance();){var k=h.get("heat");f==e.kn(k)&&c.push(h.la())}if(e=$.bo(b.domTarget))"single"==this.Wc().i("hoverMode")?e.Hf={W:d,pd:c}:e.Hf=[{W:d,pd:c,tn:c[c.length-1],ue:{index:c[c.length-1],$f:0}}]}}};$.g.Tp=function(a,b){var c=a.o();if("categories"==this.Ef().i("itemsSourceMode")&&"single"==this.Wc().i("hoverMode")){var d=$.bo(b.domTarget);d&&(d.W=c.W)}};
$.g.jF=function(a,b){for(var c=[],d=0,e=a.length;d<e;d++){var f=a[d],h;f.ue?h={index:f.ue.index,distance:f.ue.$f}:h={index:window.NaN,distance:window.NaN};c.push({series:f.W,points:b?[]:f.pd?$.Ha(f.pd):[],nearestPointToCursor:h})}return c};$.g.ZC=function(a,b,c){a=MM.B.ZC.call(this,a,b,c);a.series=this;return a};$.g.Id=function(a){return this.Pa.Id(a)};$.g.ru=function(){return!0};$.g.nk=function(){return this.Pa.nk()};
$.g.eQ=function(){var a=this.J(327680);MM.B.eQ.call(this);if(a){var b=null,c=null,d=this.bb(),e=this.Xa(),f=$.ft(e),h=$.ft(d);if(f||h){if(f){var k=f;b=[]}if(h){var l=h;c=[]}for(var m=this.Pa.xc();m.advance();){if(f){a=e.Ex(m.get("x"));var p=m.get(k);$.n(b[a])||(b[a]=p||m.get("x")||m.get("heat"))}h&&(a=d.Ex(m.get("y")),p=m.get(l),$.n(c[a])||(c[a]=p||m.get("y")||m.get("heat")))}f&&(e.kk=b);h&&(d.kk=c)}this.u(-2147483648)}if(this.J(-2147483648)){if(this.Lb&&this.Lb.Ff()){this.Lb.qg();m=this.Pa.aa();
for(m.reset();m.advance();)this.Lb.Tc(m.get("heat"));this.Lb.zg()}this.Pa&&this.Pa.u(2048);this.u(32768);this.I(-2147483648)}};$.g.data=function(a,b){if($.n(a)){if(a){var c=a.title||a.caption;c&&this.title(c);a.rows&&(a=a.rows)}this.Pa.data(a,b);return this}return this.Pa.data()};$.g.Cj=function(a){this.Pa.Cj(a);return this};$.g.select=function(a){this.Pa.select(a);return this};
$.g.RK=function(a){this.nb();var b="selected"==a,c=NM(this.Xa(),b);a=c.values;var d=c.names;c=NM(this.bb(),b);b=c.values;var e=c.names;c=[];for(var f=0;f<e.length;f++)c.push([e[f]]);for(e=this.Pa.Kf();e.advance();){f=a[$.$n(e.get("x"))];var h=b[$.$n(e.get("y"))],k=String(e.get("heat"));(0,window.isNaN)(f)||(0,window.isNaN)(h)||(c[h][f+1]=k)}d.unshift("#");return{headers:d,data:c}};
$.g.F=function(){var a=MM.B.F.call(this),b=a.chart;delete b.barsPadding;delete b.barGroupsPadding;delete b.crosshair;delete b.defaultSeriesType;return a};$.g.Is=function(a,b,c){OM(this,a.colorScale,b);MM.B.Is.call(this,a,b,c);$.mq(this,UM,a)};$.g.Hs=function(a,b,c){MM.B.Hs.call(this,a,b,c);$.uq(this,UM,a);$.qz(a,"colorScale",this.td(),b,c)};
$.g.qN=function(a,b,c){b={};var d=SM,e;for(e=0;e<d.length;e++){var f=d[e];$.n(a[f])&&(b[f]=a[f])}d=TM;for(e=0;e<d.length;e++)f=d[e],$.n(a[f])&&(b[f]=a[f]);this.Pa.X(b,c)};$.g.kN=function(a){var b=this.Pa.F(),c=SM,d;for(d=0;d<c.length;d++){var e=c[d];$.n(b[e])&&(a[e]=b[e])}c=TM;for(d=0;d<c.length;d++)e=c[d],$.n(b[e])&&(a[e]=b[e])};$.g.R=function(){MM.B.R.call(this);this.Pa=null};var VM=MM.prototype;VM.getType=VM.Oa;VM.xGrid=VM.Tm;VM.yGrid=VM.Um;VM.xAxis=VM.jh;VM.yAxis=VM.ki;VM.xScale=VM.Xa;
VM.yScale=VM.bb;VM.hover=VM.Cj;VM.select=VM.select;VM.unhover=VM.Jd;VM.unselect=VM.Yd;VM.data=VM.data;VM.colorScale=VM.td;VM.xZoom=VM.uq;VM.yZoom=VM.vq;VM.xScroller=VM.mp;VM.yScroller=VM.vr;VM.annotations=VM.jk;$.zp["heat-map"]=PM;$.F("anychart.heatMap",PM);}).call(this,$)}
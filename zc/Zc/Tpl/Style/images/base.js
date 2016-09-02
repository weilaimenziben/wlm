/* @update: 2015-6-2 16:44:44 */ 
if(!function(e,r){function t(e){return function(r){return{}.toString.call(r)=="[object "+e+"]"}}function a(){return U++}function n(e){return e.match(E)[0]}function s(e){for(e=e.replace(C,"/"),e=e.replace(S,"$1/");e.match(T);)e=e.replace(T,"/");return e}function i(e){var r=e.length-1,t=e.charAt(r);return"#"===t?e.substring(0,r):".js"===e.substring(r-2)||e.indexOf("?")>0||"/"===t?e:e+".js"}function o(e){var r=y.alias;return r&&x(r[e])?r[e]:e}function c(e){var r,t=y.paths;return t&&(r=e.match(q))&&x(t[r[1]])&&(e=t[r[1]]+r[2]),e}function u(e){var r=y.vars;return r&&e.indexOf("{")>-1&&(e=e.replace(M,function(e,t){return x(r[t])?r[t]:e})),e}function l(e){var r=y.map,t=e;if(r)for(var a=0,n=r.length;n>a;a++){var s=r[a];if(t=_(s)?s(e)||e:e.replace(s[0],s[1]),t!==e)break}return t}function f(e,r){var t,a=e.charAt(0);if(O.test(e))t=e;else if("."===a)t=s((r?n(r):y.cwd)+e);else if("/"===a){var i=y.cwd.match(A);t=i?i[0]+e.substring(1):e}else t=y.base+e;return 0===t.indexOf("//")&&(t=location.protocol+t),t}function d(e,r){if(!e)return"";e=o(e),e=c(e),e=u(e),e=i(e);var t=f(e,r);return t=l(t)}function h(e){return e.hasAttribute?e.src:e.getAttribute("src",4)}function p(e,r,t){var a=N.createElement("script");if(t){var n=_(t)?t(e):t;n&&(a.charset=n)}v(a,r,e),a.async=!0,a.src=e,P=a,H?G.insertBefore(a,H):G.appendChild(a),P=null}function v(e,r,t){function a(){e.onload=e.onerror=e.onreadystatechange=null,y.debug||G.removeChild(e),e=null,r()}var n="onload"in e;n?(e.onload=a,e.onerror=function(){I("error",{uri:t,node:e}),a()}):e.onreadystatechange=function(){/loaded|complete/.test(e.readyState)&&a()}}function g(){if(P)return P;if(R&&"interactive"===R.readyState)return R;for(var e=G.getElementsByTagName("script"),r=e.length-1;r>=0;r--){var t=e[r];if("interactive"===t.readyState)return R=t}}function j(e){var r=[];return e.replace(X,"").replace(V,function(e,t,a){a&&r.push(a)}),r}function m(e,r){this.uri=e,this.dependencies=r||[],this.exports=null,this.status=0,this._waitings={},this._remain=0}if(!e.seajs){var b=e.seajs={version:"2.3.0"},y=b.data={},B=t("Object"),x=t("String"),w=Array.isArray||t("Array"),_=t("Function"),U=0,k=y.events={};b.on=function(e,r){var t=k[e]||(k[e]=[]);return t.push(r),b},b.off=function(e,r){if(!e&&!r)return k=y.events={},b;var t=k[e];if(t)if(r)for(var a=t.length-1;a>=0;a--)t[a]===r&&t.splice(a,1);else delete k[e];return b};var I=b.emit=function(e,r){var t=k[e];if(t){t=t.slice();for(var a=0,n=t.length;n>a;a++)t[a](r)}return b},E=/[^?#]*\//,C=/\/\.\//g,T=/\/[^/]+\/\.\.\//,S=/([^:/])\/+\//g,q=/^([^/:]+)(\/.+)$/,M=/{([^{]+)}/g,O=/^\/\/.|:\//,A=/^.*?\/\/.*?\//,N=document,D=location.href&&0!==location.href.indexOf("about:")?n(location.href):"",L=N.scripts,F=N.getElementById("seajsnode")||L[L.length-1],Q=n(h(F)||D);b.resolve=d;var P,R,G=N.head||N.getElementsByTagName("head")[0]||N.documentElement,H=G.getElementsByTagName("base")[0];b.request=p;var K,V=/"(?:\\"|[^"])*"|'(?:\\'|[^'])*'|\/\*[\S\s]*?\*\/|\/(?:\\\/|[^\/\r\n])+\/(?=[^\/])|\/\/.*|\.\s*require|(?:^|[^$])\brequire\s*\(\s*(["'])(.+?)\1\s*\)/g,X=/\\\\/g,Y=b.cache={},z={},J={},W={},$=m.STATUS={FETCHING:1,SAVED:2,LOADING:3,LOADED:4,EXECUTING:5,EXECUTED:6};m.prototype.resolve=function(){for(var e=this,r=e.dependencies,t=[],a=0,n=r.length;n>a;a++)t[a]=m.resolve(r[a],e.uri);return t},m.prototype.load=function(){var e=this;if(!(e.status>=$.LOADING)){e.status=$.LOADING;var t=e.resolve();I("load",t);for(var a,n=e._remain=t.length,s=0;n>s;s++)a=m.get(t[s]),a.status<$.LOADED?a._waitings[e.uri]=(a._waitings[e.uri]||0)+1:e._remain--;if(0===e._remain)return e.onload(),r;var i={};for(s=0;n>s;s++)a=Y[t[s]],a.status<$.FETCHING?a.fetch(i):a.status===$.SAVED&&a.load();for(var o in i)i.hasOwnProperty(o)&&i[o]()}},m.prototype.onload=function(){var e=this;e.status=$.LOADED,e.callback&&e.callback();var r,t,a=e._waitings;for(r in a)a.hasOwnProperty(r)&&(t=Y[r],t._remain-=a[r],0===t._remain&&t.onload());delete e._waitings,delete e._remain},m.prototype.fetch=function(e){function t(){b.request(i.requestUri,i.onRequest,i.charset)}function a(){delete z[o],J[o]=!0,K&&(m.save(s,K),K=null);var e,r=W[o];for(delete W[o];e=r.shift();)e.load()}var n=this,s=n.uri;n.status=$.FETCHING;var i={uri:s};I("fetch",i);var o=i.requestUri||s;return!o||J[o]?(n.load(),r):z[o]?(W[o].push(n),r):(z[o]=!0,W[o]=[n],I("request",i={uri:s,requestUri:o,onRequest:a,charset:y.charset}),i.requested||(e?e[i.requestUri]=t:t()),r)},m.prototype.exec=function(){function e(r){return m.get(e.resolve(r)).exec()}var t=this;if(t.status>=$.EXECUTING)return t.exports;t.status=$.EXECUTING;var n=t.uri;e.resolve=function(e){return m.resolve(e,n)},e.async=function(r,t){return m.use(r,t,n+"_async_"+a()),e};var s=t.factory,i=_(s)?s(e,t.exports={},t):s;return i===r&&(i=t.exports),delete t.factory,t.exports=i,t.status=$.EXECUTED,I("exec",t),i},m.resolve=function(e,r){var t={id:e,refUri:r};return I("resolve",t),t.uri||b.resolve(t.id,r)},m.define=function(e,t,a){var n=arguments.length;1===n?(a=e,e=r):2===n&&(a=t,w(e)?(t=e,e=r):t=r),!w(t)&&_(a)&&(t=j(""+a));var s={id:e,uri:m.resolve(e),deps:t,factory:a};if(!s.uri&&N.attachEvent){var i=g();i&&(s.uri=i.src)}I("define",s),s.uri?m.save(s.uri,s):K=s},m.save=function(e,r){var t=m.get(e);t.status<$.SAVED&&(t.id=r.id||e,t.dependencies=r.deps||[],t.factory=r.factory,t.status=$.SAVED,I("save",t))},m.get=function(e,r){return Y[e]||(Y[e]=new m(e,r))},m.use=function(r,t,a){var n=m.get(a,w(r)?r:[r]);n.callback=function(){for(var r=[],a=n.resolve(),s=0,i=a.length;i>s;s++)r[s]=Y[a[s]].exec();t&&t.apply(e,r),delete n.callback},n.load()},b.use=function(e,r){return m.use(e,r,y.cwd+"_use_"+a()),b},m.define.cmd={},e.define=m.define,b.Module=m,y.fetchedList=J,y.cid=a,b.require=function(e){var r=m.get(m.resolve(e));return r.status<$.EXECUTING&&(r.onload(),r.exec()),r.exports},y.base=Q,y.dir=Q,y.cwd=D,y.charset="utf-8",b.config=function(e){for(var r in e){var t=e[r],a=y[r];if(a&&B(a))for(var n in t)a[n]=t[n];else w(a)?t=a.concat(t):"base"===r&&("/"!==t.slice(-1)&&(t+="/"),t=f(t)),y[r]=t}return I("config",e),b}}}(this),!function(){function e(e){var r=e.length;if(!(2>r)){j.comboSyntax&&(b=j.comboSyntax),j.comboMaxLength&&(y=j.comboMaxLength),j.comboSuffix&&(p=j.comboSuffix),h=j.comboExcludes;for(var a=[],n=0;r>n;n++){var s=e[n];if(!m[s]){var o=v.get(s);o.status<g&&!f(s)&&!d(s)&&a.push(s)}}a.length>1&&i(t(a))}}function r(e){e.requestUri=m[e.uri]||e.uri}function t(e){return n(a(e))}function a(e){for(var r={__KEYS:[]},t=0,a=e.length;a>t;t++)for(var n=e[t].replace("://","__").split("/"),s=r,i=0,o=n.length;o>i;i++){var c=n[i];s[c]||(s[c]={__KEYS:[]},s.__KEYS.push(c)),s=s[c]}return r}function n(e){for(var r=[],t=e.__KEYS,a=0,n=t.length;n>a;a++){for(var i=t[a],o=i,c=e[i],u=c.__KEYS;1===u.length;)o+="/"+u[0],c=c[u[0]],u=c.__KEYS;u.length&&r.push([o.replace("__","://"),s(c)])}return r}function s(e){for(var r=[],t=e.__KEYS,a=0,n=t.length;n>a;a++){var i=t[a],o=s(e[i]),c=o.length;if(c)for(var u=0;c>u;u++)r.push(i+"/"+o[u]);else r.push(i)}return r}function i(e){for(var r=0,t=e.length;t>r;r++)for(var a=e[r],n=a[0]+"/",s=u(a[1]),i=0,c=s.length;c>i;i++)o(n,s[i]);return m}function o(e,r){for(var t=[],a=0,n=r.length;n>a;a++)t[a]=r[a].replace(/\?.*$/,"");var s=e+b[0]+t.join(b[1]);p&&(s+=p);var i=s.length>y;if(r.length>1&&i){var u=c(r,y-(e+b[0]).length);o(e,u[0]),o(e,u[1])}else{if(i)throw new Error("The combo url is too long: "+s);for(var a=0,n=r.length;n>a;a++)m[e+r[a]]=s}}function c(e,r){for(var t=b[1],a=e[0],n=1,s=e.length;s>n;n++)if(a+=t+e[n],a.length>r)return[e.splice(0,n),e]}function u(e){for(var r=[],t={},a=0,n=e.length;n>a;a++){var s=e[a],i=l(s);i&&(t[i]||(t[i]=[])).push(s)}for(var o in t)t.hasOwnProperty(o)&&r.push(t[o]);return r}function l(e){var r=e.lastIndexOf(".");return r>=0?e.substring(r):""}function f(e){return h?h.test?h.test(e):h(e):void 0}function d(e){var r=j.comboSyntax||["??",","],t=r[0],a=r[1];return t&&e.indexOf(t)>0||a&&e.indexOf(a)>0}var h,p,v=seajs.Module,g=v.STATUS.FETCHING,j=seajs.data,m=j.comboHash={},b=["??",","],y=2e3;if(seajs.on("load",e),seajs.on("fetch",r),j.test){var B=seajs.test||(seajs.test={});B.uris2paths=t,B.paths2hash=i}define("seajs/seajs-combo/1.0.1/seajs-combo",[],{})}(),!function(){function e(e){return function(r){return{}.toString.call(r)=="[object "+e+"]"}}function r(e){return"[object Function]"=={}.toString.call(e)}function t(e,t,n){var s=y.test(e),i=j.createElement(s?"link":"script");if(n){var o=r(n)?n(e):n;o&&(i.charset=o)}a(i,t,s,e),s?(i.rel="stylesheet",i.href=e):(i.async=!0,i.src=e),v=i,b?m.insertBefore(i,b):m.appendChild(i),v=null}function a(e,r,t,a){function s(){e.onload=e.onerror=e.onreadystatechange=null,t||seajs.data.debug||m.removeChild(e),e=null,r()}var i="onload"in e;return!t||!B&&i?void(i?(e.onload=s,e.onerror=function(){seajs.emit("error",{uri:a,node:e}),s()}):e.onreadystatechange=function(){/loaded|complete/.test(e.readyState)&&s()}):void setTimeout(function(){n(e,r)},1)}function n(e,r){var t,a=e.sheet;if(B)a&&(t=!0);else if(a)try{a.cssRules&&(t=!0)}catch(s){"NS_ERROR_DOM_SECURITY_ERR"===s.name&&(t=!0)}setTimeout(function(){t?r():n(e,r)},20)}function s(e){return e.match(w)[0]}function i(e){for(e=e.replace(_,"/"),e=e.replace(k,"$1/");e.match(U);)e=e.replace(U,"/");return e}function o(e){var r=e.length-1,t=e.charAt(r);return"#"===t?e.substring(0,r):".js"===e.substring(r-2)||e.indexOf("?")>0||".css"===e.substring(r-3)||"/"===t?e:e+".js"}function c(e){var r=x.alias;return r&&g(r[e])?r[e]:e}function u(e){var r,t=x.paths;return t&&(r=e.match(I))&&g(t[r[1]])&&(e=t[r[1]]+r[2]),e}function l(e){var r=x.vars;return r&&e.indexOf("{")>-1&&(e=e.replace(E,function(e,t){return g(r[t])?r[t]:e})),e}function f(e){var t=x.map,a=e;if(t)for(var n=0,s=t.length;s>n;n++){var i=t[n];if(a=r(i)?i(e)||e:e.replace(i[0],i[1]),a!==e)break}return a}function d(e,r){var t,a=e.charAt(0);if(C.test(e))t=e;else if("."===a)t=i((r?s(r):x.cwd)+e);else if("/"===a){var n=x.cwd.match(T);t=n?n[0]+e.substring(1):e}else t=x.base+e;return 0===t.indexOf("//")&&(t=location.protocol+t),t}function h(e,r){if(!e)return"";e=c(e),e=u(e),e=l(e),e=o(e);var t=d(e,r);return t=f(t)}function p(e){return e.hasAttribute?e.src:e.getAttribute("src",4)}var v,g=e("String"),j=document,m=j.head||j.getElementsByTagName("head")[0]||j.documentElement,b=m.getElementsByTagName("base")[0],y=/\.css(?:\?|$)/i,B=+navigator.userAgent.replace(/.*(?:AppleWebKit|AndroidWebKit)\/?(\d+).*/i,"$1")<536;seajs.request=t;var x=seajs.data,w=/[^?#]*\//,_=/\/\.\//g,U=/\/[^/]+\/\.\.\//,k=/([^:/])\/+\//g,I=/^([^/:]+)(\/.+)$/,E=/{([^{]+)}/g,C=/^\/\/.|:\//,T=/^.*?\/\/.*?\//,j=document,S=location.href&&0!==location.href.indexOf("about:")?s(location.href):"",q=j.scripts,M=j.getElementById("seajsnode")||q[q.length-1];s(p(M)||S),seajs.resolve=h,define("seajs/seajs-css/1.0.4/seajs-css",[],{})}(),!function(){var e=seajs.data,r=document;seajs.Module.preload=function(r){var t=e.preload,a=t.length;a?seajs.Module.use(t,function(){t.splice(0,a),seajs.Module.preload(r)},e.cwd+"_preload_"+e.cid()):r()},seajs.use=function(r,t){return seajs.Module.preload(function(){seajs.Module.use(r,t,e.cwd+"_use_"+e.cid())}),seajs},e.preload=function(){var e=[],t=location.search.replace(/(seajs-\w+)(&|$)/g,"$1=1$2");return t+=" "+r.cookie,t.replace(/(seajs-\w+)=1/g,function(r,t){e.push(t)}),e}(),define("seajs/seajs-preload/1.0.0/seajs-preload",[],{})}(),"undefined"==typeof window.jrBase&&(window.jrBase={}),"undefined"==typeof jrBase.autoSeajsConfig&&(jrBase.autoSeajsConfig=!0),jrBase.autoSeajsConfig){var seajsConfig={base:"http://static.360buyimg.com/finance/",alias:{},map:[],debug:0,comboExcludes:/.css/};/seajsDebug/.test(location.search)&&(seajsConfig.comboExcludes=/.*/),seajs.config(seajsConfig)}jrBase.userLogIn=!1,jrBase.loginCallBack=null,jrBase.footerFix="undefined"!=typeof jrBase.footerFix?jrBase.footerFix:!0,jrBase.headerFix="undefined"!=typeof jrBase.headerFix?jrBase.headerFix:!1,jrBase.sidebar="undefined"!=typeof jrBase.sidebar?jrBase.sidebar:!1,jrBase.jrQaUrl="undefined"!=typeof jrBase.jrQaUrl?jrBase.jrQaUrl:!1,jrBase.questionUrl="undefined"!=typeof jrBase.questionUrl?jrBase.questionUrl:!1,jrBase.feedbackUrl="undefined"!=typeof jrBase.feedbackUrl?jrBase.feedbackUrl:"http://ur.jr.jd.com/survey/show?id=100",jrBase.serviceUrl="undefined"!=typeof jrBase.serviceUrl?jrBase.serviceUrl:!1,jrBase.surveyUrl="undefined"!=typeof jrBase.surveyUrl?jrBase.surveyUrl:!1,jrBase.appQrcode="undefined"!=typeof jrBase.surveyUrl?jrBase.appQrcode:!0;var login=function(){return location.href="https://passport.jd.com/new/login.aspx?ReturnUrl="+escape(location.href).replace(/\//g,"%2F"),!1},regist=function(){return location.href="https://reg.jd.com/reg/person?ReturnUrl="+escape(location.href),!1},createCookie=function(e,r,t,a){var a=a?a:"/";if(t){var n=new Date;n.setTime(n.getTime()+24*t*60*60*1e3);var s="; expires="+n.toGMTString()}else var s="";document.cookie=e+"="+r+s+"; path="+a},readCookie=function(e){for(var r=e+"=",t=document.cookie.split(";"),a=0;a<t.length;a++){for(var n=t[a];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(r))return n.substring(r.length,n.length)}return null},checkLogin=function(){var e="https:"===window.location.protocol?"https:":"http:",r=e+"//passport.jd.com/call/getHelloJson?m=ls";jQuery.ajax({url:r,dataType:"jsonp",scriptCharset:"gb2312",success:function(e){e&&e.info&&(e.info=e.info.replace("\u4eac\u4e1c","\u4eac\u4e1c\u91d1\u878d"),$("#loginbar").html(e.info)),e&&e.sso&&$.each(e.sso,function(){jQuery.getJSON(this)})}})};jQuery.extend(jQuery.easing,{def:"easeOutQuad",easeInQuint:function(e,r,t,a,n){return a*(r/=n)*r*r*r*r+t},easeOutQuint:function(e,r,t,a,n){return a*((r=r/n-1)*r*r*r*r+1)+t},easeInOutQuint:function(e,r,t,a,n){return(r/=n/2)<1?a/2*r*r*r*r*r+t:a/2*((r-=2)*r*r*r*r+2)+t},easeOutElastic:function(e,r,t,a,n){var s=1.70158,i=0,o=a;if(0==r)return t;if(1==(r/=n))return t+a;if(i||(i=.3*n),o<Math.abs(a)){o=a;var s=i/4}else var s=i/(2*Math.PI)*Math.asin(a/o);return o*Math.pow(2,-10*r)*Math.sin(2*(r*n-s)*Math.PI/i)+a+t},easeInOutElastic:function(e,r,t,a,n){var s=1.70158,i=0,o=a;if(0==r)return t;if(2==(r/=n/2))return t+a;if(i||(i=.3*n*1.5),o<Math.abs(a)){o=a;var s=i/4}else var s=i/(2*Math.PI)*Math.asin(a/o);return 1>r?-.5*o*Math.pow(2,10*(r-=1))*Math.sin(2*(r*n-s)*Math.PI/i)+t:o*Math.pow(2,-10*(r-=1))*Math.sin(2*(r*n-s)*Math.PI/i)*.5+a+t},easeInCirc:function(e,r,t,a,n){return-a*(Math.sqrt(1-(r/=n)*r)-1)+t},easeOutCirc:function(e,r,t,a,n){return a*Math.sqrt(1-(r=r/n-1)*r)+t},easeInOutCirc:function(e,r,t,a,n){return(r/=n/2)<1?-a/2*(Math.sqrt(1-r*r)-1)+t:a/2*(Math.sqrt(1-(r-=2)*r)+1)+t}}),jrBase.getUserInfo=function(e){var r="http://vip.jr.jd.com/async/trade/info";$.ajax({url:r,type:"get",dataType:"jsonp",success:function(r){e(r)}})},jrBase.getUserNotification=function(e){var r="http://courier.jr.jd.com/mc/unreadSize";$.ajax({url:r,type:"get",dataType:"jsonp",success:function(r){e(r)}})},function(){jrBase.parseParameter=function(e){for(var r=0,t=jrBase.getParameters(e).split("&"),a={};r<t.length;r++){var n=t[r].split("=");a[n[0]]=n[1]}return a},jrBase.getParameters=function(e){if("undefined"==typeof e)return window.location.search.substring(1);if("string"==$.type(e)){var r=e.indexOf("?");return r>=0?e.substring(r+1):e}return""},jrBase.getParameter=function(e){var r=window.location.search.substring(1);if(r)for(var t=0,a=r.split("&");t<a.length;t++){var n=a[t].split("=");if(n[0]==e)return n[1]}return""},jrBase.encodeHTML=function(e){return e&&"string"==typeof e?e.replace(/\&/g,"&amp;").replace(/"/g,"&quot;").replace(/\</g,"&lt;").replace(/\>/g,"&gt;").replace(/\u00A0/g,"&nbsp;").replace(/(\u0020|\u000B|\u2028|\u2029|\f)/g," "):""},jrBase.decodeHTML=function(e){return e&&"string"==typeof e?e.replace(/&quot;/g,'"').replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&#39/g,"'").replace(/&nbsp;/g,"\xa0").replace(/&#32/g," ").replace(/&amp;/g,"&"):""},jrBase.zIndex=2e3,jrBase.getZIndex=function(){return jrBase.zIndex+=1}}(),$(function(){checkLogin(),function(){function e(){return $("#baitiao_kaitong")[0]?($("#baitiao_kaitong").html("\u6211\u8981\u67e5\u770b"),void $("#chinabank_kaitong").html("\u6211\u8981\u67e5\u770b")):!1}function r(e){var r=e.message.userInfo;r&&r.yunSmaImageUrl&&($("#userSmaImage").attr("src",r.yunMidImageUrl),0!==$("#assetUserImage").length&&$("#assetUserImage").attr("src",r.yunMidImageUrl))}function t(e){var r=e.message;r&&r.nickName&&0!==$("#assetUserName").length&&$("#assetUserName").html(r.nickName)}function a(e){if(e&&e.message.isCompany){var r='<li id="userInfo-loan"><a href="http://loan.jd.com/center/info.htm" clstag="jr|keycount|jr_shouye|myjxd"><span class="fl">\u6211\u7684\u8d37\u6b3e</span><span class="fr"></span></a></li>';$("#userInfo").find("ul").find("li").eq(3).after(r)}}function n(){0===$("#nav-caimi").length&&$("#nav-loan").after('<li id="nav-caimi" class="nav-item"><a class="nav-item-primary" href="http://caimi.jd.com/" clstag="jr|keycount|jr_shouye|caimi">\u80a1\u7968</a></li>');var e=$('<a class="nav-item-tips-year" href="http://caimi.jd.com/" clstag="jr|keycount|jr_index|flag_caimi" target="_blank"></a>');e.css({background:"url(http://img30.360buyimg.com/jr_image/jfs/t967/274/847760927/2193/e646a03c/55509405N8f33634c.gif) no-repeat"}),$("#nav-caimi").find(".nav-item-primary").before(e),$(".main-nav-logo").find("a").attr("href","http://jr.jd.com/"),$(".topmenu-item:last").find(".dropbox").find("li:last").before('<li><a href="http://baitiao.jd.com/activity/third" clstag="jr|keycount|jr_shouye|hdbt">\u4eac\u4e1c\u767d\u6761</a></li>'),$("#app-jr").before('<li id="topbar-vip" class="topmenu-item"><a href="http://vip.jr.jd.com" clstag="jr|keycount|jr_shouye|topbar_vip">\u91d1\u878d\u4f1a\u5458\u4e2d\u5fc3<i class="topmenu-item-new"></i></a></li>'),$("#app-jr").after('<li class="topmenu-item"><a href="http://club.jr.jd.com/attPage/getAttList?pro_type=1" clstag="jr|keycount|jr_shouye|guanzhu">\u6211\u7684\u5173\u6ce8</a></li>'),$(".topmenu-app-android").attr("href","http://jrappgw.jd.com/resources/downloadApp.html");var r=$("#userInfo").find("ul").find("li"),t='<li id="userInfo-baoxian"><a href="http://bao.jd.com/order" clstag="jr|keycount|jr_shouye|mybaoxian"><span class="fl">\u6211\u7684\u4fdd\u5355</span><span class="fr"></span></a></li>';r.eq(3).after(t);var a='<li id="userInfo-baitiao"><a href="http://baitiao.jd.com/creditUser/list" clstag="jr|keycount|jr_shouye|mybaitiao"><span class="fl">\u6211\u7684\u767d\u6761</span><span class="fr"></span></a></li>';r.eq(2).after(a);var n='<li id="userInfo-caimi"><a href="http://caimi.jd.com/center/person/asset.html" clstag="jr|keycount|jr_shouye|mycaimi"><span class="fl">\u6211\u7684\u8d22\u8ff7</span><span class="fr"></span></a></li>';$("#userInfo-baoxian").after(n);var s='<li id="userInfo-msg"><a href="http://courier.jr.jd.com/mc/list" clstag="jr|keycount|jr_shouye|mymsg"><span class="fl">\u6d88\u606f\u4e2d\u5fc3</span><span class="fr"></span></a></li>';$("#userInfo").find("ul").append(s),r.eq(1).find(".fl").html("\u4eac\u4e1c\u5c0f\u91d1\u5e93"),$(".footer-nav").find("p").eq(1).html('Copyright &copy; 2004-2015 \u4eac\u4e1cJD.com \u7248\u6743\u6240\u6709<span class="footer-nav-cut">|</span>\u6295\u8d44\u6709\u98ce\u9669\uff0c\u8d2d\u4e70\u9700\u8c28\u614e');var i="http://chat.jd.com/jd/chat?entry=jd_jr",o="400 088 8816",c="400 098 8511";$("#J_topbarKf").attr("href",i),$(".f-contact-ol").attr("href",i),$(".f-copyright").find(".f-contact-tel").eq(1).html(o);var u=(new Date).getTime(),l=new Date("2015/5/28 00:00:00").getTime();u>=l&&$(".f-copyright").find(".f-contact-tel").eq(0).html(c),$(".footer-nav").find("p:first").find("a").eq(2).html("\u5173\u4e8e\u4eac\u4e1c\u94b1\u5305"),$(".topmenu-item:last").find(".dropbox").find("li:last").find("a").attr("href","http://sq.jd.com/X3dvw1").html("\u4eac\u4e1c\u94b1\u5305")}function s(e){if(e&&e.success&&e.returnValue>0){var r=e.returnValue>99?"99+":e.returnValue,t='<i class="userimg-notification">'+r+"</i>",a=e.returnValue>99?"99\u6761\u4ee5\u4e0a":e.returnValue+"\u6761",n='<i class="userInfo-notification"></i>'+a+"\u672a\u8bfb";0!==o.find(".userimg-notification").length&&o.find(".userimg-notification").remove(),o.find(".main-nav-userimg").append(t),$("#userInfo-msg").find(".fr").html(n)}}function i(e){if(e&&e.baitiao&&e.baitiao.data){var r=e.baitiao.data[0],t=parseFloat(r.creditLimit)-parseFloat(r.availableLimit);t>0&&(t=t.toFixed(2),$("#userInfo-baitiao").find(".fr").html("\u5f85\u8fd8"+t+"\u5143").attr("title","\u5168\u90e8\u5f85\u8fd8\u6b3e"))}}var o=$("#userInfo");0!==o.length&&(n(),"undefined"!=typeof jrBase.getUserInfo&&jrBase.getUserInfo(function(n){return jrBase.userLogIn=n.isLogin,jrBase.userLogIn?(jrBase.loginCallBack&&jrBase.loginCallBack(n),e(),r(n),t(n),a(n),i(n),o.find(".ajaxData").each(function(){var e=n.message[$(this).attr("data-name")];$(this).html(e?e.toFixed(2)+"\u5143":"0\u5143")}),void("undefined"!=typeof jrBase.getUserNotification&&jrBase.getUserNotification(function(e){s(e)}))):!1}))}(),function(){var e=$("#topbar"),r=e.find(".dropdown");r.each(function(){var e=$(this).attr("data-hover");$(this).hover(function(){$(this).addClass(e)},function(){$(this).removeClass(e)})});var t=$("#navBox"),a=t.children("li");a.each(function(){$(this).hover(function(){$(this).addClass("nav-item-hover")},function(){$(this).removeClass("nav-item-hover")})});var n=$("#userInfo");n.hover(function(){$(this).addClass("nav-userinfo-hover")},function(){$(this).removeClass("nav-userinfo-hover")})}(),function(){if(jrBase.footerFix){var e=$(".f-copyright");if(!e[0])return!1;var r=e.outerHeight(),t=e.offset().top,a=!1,n=function(){var n=$(window).height();n>t+r?(a=!0,e.css({position:"relative",top:n-t-r+"px"})):e.css({position:"relative",top:0})};n(),$(window).resize(function(){return a?void n():!1})}}(),function(){if(jrBase.headerFix){$(".main-nav").before('<div class="header-nav-wrap"><div class="header-nav-wrap-inner"></div></div>'),$(".main-nav, .sub-nav").appendTo(".header-nav-wrap-inner"),0!==$(".sub-nav").length&&($(".header-nav-wrap").addClass("has-sub-nav"),$(".header-nav-wrap-inner").bind("mouseenter",function(){0!==$(this).parents(".hn-fixed").length&&$(".sub-nav").stop(!0,!0).slideDown(200)}).bind("mouseleave",function(){0!==$(this).parents(".hn-fixed").length&&$(".sub-nav").stop(!0,!0).slideUp(200)}));var e=null,r=!!window.ActiveXObject,t=r&&!window.XMLHttpRequest;$(window).bind("scroll",function(){clearTimeout(e),e=setTimeout(function(){var e=$(window).scrollTop(),r=$(".header-nav-wrap"),a=$(".header-nav-wrap-inner"),n=$(".sub-nav");e>200?r.hasClass("hn-fixed")||(r.addClass("hn-fixed"),n.hide(),t||a.css("top","-80px").animate({top:"0px"},500)):r.hasClass("hn-fixed")&&(r.removeClass("hn-fixed"),n.show())},30)})}}(),function(){var e=jrBase.feedbackUrl+"&u="+encodeURIComponent(window.location.href);$("#J_topbarFeedback").attr("href",e);var r="http://club.jr.jd.com/",t="http://surveys.jd.com/index.php?r=survey/index/sid/396661/lang/zh-Hans",a="http://chat.jd.com/jd/chat?entry=jd_jr_trade";if(jrBase.sidebar){0!==$(".right-slide-box").length&&$(".right-slide-box").remove();var n=$('<div class="ui-sidebar"></div>'),s="";jrBase.appQrcode!==!1&&(s+='<a class="ui-sidebar-block app" href="http://m.jr.jd.com/helppage/downApp/jrAppPromote.html" target="_blank"><i></i></a>'),jrBase.questionUrl!==!1&&(jrBase.questionUrl===!0&&(jrBase.questionUrl=t),s+='<a class="ui-sidebar-block question" href="'+jrBase.questionUrl+'" target="_blank"></a>'),jrBase.serviceUrl!==!1&&(jrBase.serviceUrl===!0&&(jrBase.serviceUrl=a),s+='<a class="ui-sidebar-block service" href="'+jrBase.serviceUrl+'" target="_blank"></a>'),s+='<a class="ui-sidebar-block feedback" href="'+e+'" target="_blank"></a>',jrBase.surveyUrl!==!1&&(s+='<a class="ui-sidebar-block survey" href="'+jrBase.surveyUrl+'" target="_blank"></a>'),jrBase.jrQaUrl!==!1&&(jrBase.jrQaUrl===!0&&(jrBase.jrQaUrl=r),s+='<a class="ui-sidebar-block jrQA" href="'+jrBase.jrQaUrl+'" target="_blank"></a>'),s+='<a class="ui-sidebar-block backtop" href="javascript:void(0)"></a>',n.html(s),$("body").append(n),$(window).bind("scroll",function(){scrollTop=$(window).scrollTop(),scrollTop>200?n.find(".backtop").css("display","block"):n.find(".backtop").css("display","none")}),n.find(".backtop").bind("click",function(){$("body, html").animate({scrollTop:0},500,"easeInOutQuint")})}}()});
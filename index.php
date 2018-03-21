<?php require ('inc/connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Character set -->
	<meta charset="utf-8">

    <!-- For rendering on mobile devices and touch zooming   -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pages/index.css">
    <link rel="stylesheet" type="text/css" href="css/pages/locatie.css">
    <link rel="stylesheet" type="text/css" href="https://app.conversionskit.com/assets/conversion.css">
	<title>Hackathon2018</title>
    <style media="all" id="critical-styles">html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;overflow-x:hidden;font-family:"DinoffcPro",sans-serif;font-weight:400}body{margin:0;background-color:#f1f1f2;font-size:15px;line-height:1.6;color:#1a1a1a}header,nav{display:block}a{background-color:transparent;text-decoration:none}img{border:0}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0}button,input{color:inherit;font:inherit;margin:0}button{overflow:visible;text-transform:none}button,input[type=submit]{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}@media (max--moz-device-pixel-ratio:1.3),(-webkit-max-device-pixel-ratio:1.3),(max-device-pixel-ratio:1.3),(max-resolution:124.8dpi){.retina{display:none!important}div.non-retina{display:block;height:1px;position:absolute;top:-999999px}}@media (min--moz-device-pixel-ratio:1.3),(-webkit-min-device-pixel-ratio:1.3),(min-device-pixel-ratio:1.3),(min-resolution:124.8dpi){div.retina{display:block;height:1px;position:absolute;top:-999999px}.non-retina{display:none!important}}@-ms-viewport{width:device-width}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1369px){.hidden-md{display:none!important}}.container{margin-right:auto;margin-left:auto;padding-left:30px;padding-right:30px;zoom:1}.container:after,.container:before{content:'';display:table}.container:after{clear:both}@media (min-width:768px){.container{width:670px}}@media (min-width:992px){.container{width:890px}}.row{margin-left:-15px;margin-right:-15px;zoom:1}.row:after,.row:before{content:'';display:table}.row:after{clear:both}.col-lg-2,.col-md-3,.col-sm-12,.col-sm-4,.col-sm-6,.col-xs-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-12{float:left;width:100%}@media (min-width:768px){.col-sm-12,.col-sm-4,.col-sm-6{float:left}.col-sm-4{width:33.33333%}.col-sm-6{width:50%}.col-sm-12{width:100%}}@media (min-width:992px){.col-md-3{float:left;width:25%}}.no-padding{padding:0!important}.text-overflow--elipsis{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.flex{display:-webkit-box;display:-ms-flexbox;display:flex}.flex--wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex--align-items-end{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}@font-face{font-family:"DinoffcPro";font-weight:400;font-style:normal;src:url(/sites/all/themes/fitforfree/Fonts/din/regular/regular.eot) format("eot"),url(/sites/all/themes/fitforfree/Fonts/din/regular/regular.woff2) format("woff2"),url(/sites/all/themes/fitforfree/Fonts/din/regular/regular.woff) format("woff"),url(/sites/all/themes/fitforfree/Fonts/din/regular/regular.ttf) format("truetype")}@font-face{font-family:"DinoffcPro";font-weight:300;font-style:normal;src:url(/sites/all/themes/fitforfree/Fonts/din/light/light.eot) format("eot"),url(/sites/all/themes/fitforfree/Fonts/din/light/light.woff2) format("woff2"),url(/sites/all/themes/fitforfree/Fonts/din/light/light.woff) format("woff"),url(/sites/all/themes/fitforfree/Fonts/din/light/light.ttf) format("truetype")}@font-face{font-family:"DinoffcPro";font-weight:600;font-style:normal;src:url(/sites/all/themes/fitforfree/Fonts/din/semibold/semibold.eot) format("eot"),url(/sites/all/themes/fitforfree/Fonts/din/semibold/semibold.woff2) format("woff2"),url(/sites/all/themes/fitforfree/Fonts/din/semibold/semibold.woff) format("woff"),url(/sites/all/themes/fitforfree/Fonts/din/semibold/semibold.ttf) format("truetype")}@font-face{font-family:"DinoffcPro";font-weight:700;font-style:normal;src:url(/sites/all/themes/fitforfree/Fonts/din/bold/bold.eot) format("eot"),url(/sites/all/themes/fitforfree/Fonts/din/bold/bold.woff2) format("woff2"),url(/sites/all/themes/fitforfree/Fonts/din/bold/bold.woff) format("woff"),url(/sites/all/themes/fitforfree/Fonts/din/bold/bold.ttf) format("truetype")}*{-webkit-box-sizing:border-box;box-sizing:border-box}@media screen and (max-width:767px){.container{padding-left:10px;padding-right:10px}}header{position:relative;top:0;right:0;left:0}@media screen and (max-width:767px){header{padding-top:50px}header .container{margin:0!important;padding:0}header .red-wrapper{background-color:#e0001b;height:50px;position:fixed;width:100vw;top:0;right:0;left:0}}header .main-logo{position:absolute;width:20%}header .main-logo img{width:100%;max-width:100px!important}@media screen and (min-width:992px) and (max-width:1370px){header .main-logo{left:15px;top:15px}}@media screen and (min-width:768px) and (max-width:992px){header .main-logo img{width:27vw}}@media screen and (max-width:991px){header .main-logo{left:15px;top:10px}}@media screen and (min-width:768px){header .main-logo{max-width:360px;width:20%}}@media screen and (max-width:767px){header .main-logo{max-width:255px;width:100%;top:63px;left:0;right:0;margin:0 auto}}.bg-image,.bg-image:after{width:100%;z-index:1;top:0;left:0}.bg-image{max-width:100%;overflow:hidden;height:auto;position:relative}.bg-image:after{background-size:100%;background-image:-webkit-gradient(linear,left top,right bottom,from(#fff),color-stop(40%,rgba(255,255,255,0)));background-image:linear-gradient(to right bottom,#fff 0%,rgba(255,255,255,0) 40%);background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuMCIgeDI9IjEuMCIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPjxzdG9wIG9mZnNldD0iNDAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjAuMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==);height:100%;display:block;position:absolute;content:""}@media screen and (max-width:767px){.bg-image:after{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPjxzdG9wIG9mZnNldD0iMjUlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjAuMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==);background-size:100%;background-image:-webkit-gradient(linear,left top,left bottom,from(#fff),color-stop(25%,rgba(255,255,255,0)));background-image:linear-gradient(to bottom,#fff 0%,rgba(255,255,255,0) 25%)}}@media screen and (min-width:768px){.bg-image img{max-width:100%;height:auto;width:100%}}@media screen and (max-width:767px){.bg-image img{width:auto;height:231px}}@media screen and (min-width:992px) and (max-width:1370px){body{font-size:14px}}@media screen and (max-width:991px){body{font-size:13px}}@media screen and (max-width:767px){body{font-size:13px}}.global-buttons{position:absolute;display:table}@media screen and (max-width:1369px){.global-buttons{right:30px;top:10px}}@media screen and (max-width:767px){.global-buttons{top:7px}}@media screen and (min-width:992px) and (max-width:1370px){.global-buttons .btn{padding:10px 20px 8px 40px}}.global-buttons .btn-login{background-color:#fff;vertical-align:bottom;display:table-cell;border-top-right-radius:5px;border-bottom-right-radius:5px;border-bottom:3px solid #b2b7b8;color:#1a1a1a;position:relative;left:-5px}.global-buttons .btn-login-fitforfree{padding:10px 10px 3px;background-size:43% 43%;background-repeat:no-repeat;background-position:center top 9px}@media screen and (min-width:992px) and (max-width:1370px){.global-buttons .btn-login-fitforfree{padding-bottom:0;background-position:center top 4px}}@media screen and (min-width:768px) and (max-width:992px){.global-buttons .btn-login-fitforfree{padding:6px 10px 5px 32px;background-position:left top 9px}}.banner-gradient a div{height:1px}.nav nav a{display:block}.menu-toggle,.search{color:#fff;display:block}@media screen and (min-width:768px){.menu-toggle,.nav nav a,.search{text-align:center;padding:15px 0}}.submenu-container .close{background:0 0;outline:0;border:0;content:"";width:25px;height:25px;display:block;background-repeat:no-repeat}.navbar-toggle{color:#fff;font-size:18px;background:0 0;outline:0;border:0;font-family:"DinoffcPro",sans-serif;font-weight:300;display:inline-block;top:4px}.navbar-toggle:before{display:inline-block!important;content:"";width:30px;height:30px;background-repeat:no-repeat;background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0g\aR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBv\a cnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4N\a CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iYXJ0d29yayIgeG1sbnM9Imh0dHA6\aLy93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3\a dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdC\a b3g9IjAgMCAzMiAzMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMzIg\aMzIiID4NCjxnPg0KCTxwYXRoIGZpbGw9IndoaXRlIiBkPSJNNS41LDhoMjFD\aMjcuMyw4LDI4LDcuMywyOCw2LjVTMjcuMyw1LDI2LjUsNWgtMjFDNC43LDUs\aNCw1LjcsNCw2LjVTNC43LDgsNS41LDh6Ii8+DQoJPHBhdGggZmlsbD0id2hp\a dGUiIGQ9Ik0yNi41LDE0aC0yMUM0LjcsMTQsNCwxNC43LDQsMTUuNVM0Ljcs\aMTcsNS41LDE3aDIxYzAuOCwwLDEuNS0wLjcsMS41LTEuNVMyNy4zLDE0LDI2\aLjUsMTR6Ii8+DQoJPHBhdGggZmlsbD0id2hpdGUiIGQ9Ik0yNi41LDIzaC0y\aMUM0LjcsMjMsNCwyMy43LDQsMjQuNVM0LjcsMjYsNS41LDI2aDIxYzAuOCww\aLDEuNS0wLjcsMS41LTEuNVMyNy4zLDIzLDI2LjUsMjN6Ii8+DQo8L2c+DQo8\aL3N2Zz4NCg==\a);position:relative;top:8px;right:4px}@media screen and (max-width:767px){.nav-wrapper .menu{border-bottom:2px solid #f1f1f2}.nav-wrapper .logo{margin-top:20px;display:block;text-align:center}.nav-wrapper .logo img{max-width:300px;width:75%}.nav-wrapper header{background-color:#e0001b;height:50px;margin-left:-12px;margin-right:-10px}.nav-wrapper header .btn-white{position:absolute;left:12px;top:7px}.nav-wrapper header .close{color:#fff;font-size:18px;background:0 0;outline:0;border:0;font-family:"DinoffcPro",sans-serif;font-weight:300;display:inline-block;right:17px;top:4px}.nav-wrapper header .close:after{display:inline-block!important;content:"";width:25px;height:25px;background-repeat:no-repeat;position:relative;top:6px;left:11px;margin-right:11px}}.nav{z-index:2;overflow:hidden;display:block;padding:15px 0;-webkit-box-sizing:border-box;box-sizing:border-box}@media screen and (min-width:768px){.nav{width:80px;background:#e0001b;position:fixed;left:0;bottom:0;top:0;height:100vh;-webkit-box-shadow:0 2px 3px 0 #000;box-shadow:0 2px 3px 0 #000;overflow-y:auto}}.nav nav li,.nav nav ul{list-style:none;padding:0;margin:0}@media screen and (min-width:768px){.nav nav a{border-top:2px solid #b30016;padding:15px 0;margin:0 7px}.nav nav a span{display:inline}.nav nav a span:after{content:"\A";white-space:pre}}@media screen and (max-width:767px){.nav nav a{border-top:2px solid #f1f1f2;padding:14px 0 14px 55px;position:relative;line-height:22px}.nav nav a span{display:none}.nav nav a:before{position:absolute;top:11%;left:2px}}.content-wrapper{top:0;position:relative}@media screen and (min-width:768px){.content-wrapper{margin-left:80px}}@media screen and (max-width:767px){.content-wrapper header .container{padding-left:10px;padding-right:10px}}.menu-toggle,.menu>li a,.search{font-weight:400}@media screen and (min-width:768px){.menu-toggle,.menu>li a,.search{font-size:12px;line-height:13px}}.menu>li a:before{display:block}@media screen and (max-width:767px){.menu-toggle,.menu>li a,.search{font-size:18px;line-height:18px;color:#333}.menu-toggle:before,.menu>li a:before,.search:before{display:inline-block}}.menu-toggle:before,.menu>li a:before,.search:before{content:"";width:36px;height:36px;margin:0 auto 7px}.menu-toggle:before,.search:before{border-top:2px solid #b30016!important;display:block;padding-top:15px;width:calc(100% - 14px);background-repeat:no-repeat;background-position:top 15px center;background-size:36px}.menu-toggle,.search{background:0 0;border:0;position:relative;width:100%;outline:0;padding:0}.menu-toggle span{padding-bottom:15px;margin:0 7px;display:block}@media screen and (min-width:768px){.menu-toggle span{border-bottom:2px solid #b30016;padding-bottom:15px}}@media screen and (max-width:767px){.menu-toggle span{border-top:2px solid #f1f1f2;border-bottom:2px solid #f1f1f2}}.submenu-container{overflow-y:auto;overflow:hidden;font-weight:300;display:inline-block}@media screen and (max-width:767px){.submenu-container{width:100%}}@media screen and (min-width:768px){.submenu-container{max-width:0;position:fixed;left:80px;top:0;bottom:0;width:auto;height:100vh;-webkit-box-shadow:0 2px 3px 0 #000;box-shadow:0 2px 3px 0 #000;background-color:#fff;padding-top:30px;padding-bottom:30px}.submenu-container>a{padding:0;vertical-align:top;margin:0 100px 15px 0;display:block;text-align:left}.submenu-container>a img{width:360px;height:46px;max-width:34vw}.submenu-container ul{-webkit-column-count:2;column-count:2}}.submenu-container ul{margin:0;padding:0}.submenu-container li{margin:0;padding:0 15px 0 0;display:block;min-width:250px}.submenu-container li a{color:#1a1a1a;line-height:50px}@media screen and (min-width:992px){.submenu-container li a{font-size:20px}}@media screen and (max-width:991px){.submenu-container li a{font-size:17px}}.submenu-container li a:before{content:"";width:20px;height:20px;display:inline-block;background-repeat:no-repeat;position:relative;top:3px;margin-right:5px;background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0g\aR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBv\a cnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4N\a CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0idjQiIHhtbG5zPSJodHRwOi8vd3d3\aLnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMu\a b3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIt\aNTcwIDQwOS40IDE3IDIzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC01NzAg\aNDA5LjQgMTcgMjMiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmls\a bD0iI2UwMDAxYiIgZD0iTS01NTMuNiw0MTkuN2wtMTQtMTBjLTAuNS0wLjMt\aMS4xLTAuNC0xLjYtMC4xYy0wLjUsMC4yLTAuOCwwLjctMC44LDEuM3Y4aDN2\aLTUuMWw5LjksNy4xbC05LjksNy4xdi01LjFoLTN2OA0KCWMwLDAuNiwwLjMs\aMS4xLDAuOCwxLjNjMC4yLDAuMSwwLjUsMC4yLDAuNywwLjJjMC4zLDAsMC42\aLTAuMSwwLjktMC4zbDE0LTEwYzAuNC0wLjMsMC42LTAuNywwLjYtMS4yUy01\aNTMuMiw0MjAtNTUzLjYsNDE5Ljd6Ii8+DQo8L3N2Zz4NCg==\a)}hr{border-color:#f1f1f2}.submenu-container .close{position:absolute;right:30px;top:30px}.search-container{overflow-y:auto;font-weight:300;display:inline-block}@media screen and (max-width:767px){.search-container{width:100%}}@media screen and (min-width:768px){.search-container{max-width:0;position:fixed;left:80px;top:471px;bottom:0;width:auto;height:86px;-webkit-box-shadow:0 0 6px 0 rgba(0,0,0,.2);box-shadow:0 0 6px 0 rgba(0,0,0,.2);background-color:#fff;padding-top:20px;padding-bottom:20px;border-radius:0 4px 4px 0}}.search-container input[type=text]{padding-right:55px;outline:0;width:100%;margin-bottom:10px;color:#1a1a1a;font-family:"DinoffcPro",sans-serif;font-weight:300}@media screen and (max-width:1369px){.search-container input[type=text]{font-size:15px;height:38px;line-height:38px}}.search-container form,img[src*=".svg"]{width:100%}@media screen and (max-width:1369px){.search-container ::-webkit-input-placeholder{font-size:15px}.search-container ::-moz-placeholder{font-size:15px}.search-container :-ms-input-placeholder{font-size:15px}}.search-container ::-webkit-input-placeholder{color:#1a1a1a;font-family:"DinoffcPro",sans-serif;font-weight:300}.search-container ::-moz-placeholder{color:#1a1a1a;font-family:"DinoffcPro",sans-serif;font-weight:300}.search-container :-ms-input-placeholder{color:#1a1a1a;font-family:"DinoffcPro",sans-serif;font-weight:300}a,li a{color:#e0001b}ul{margin:0 0 25px;padding:0}@media screen and (min-width:992px) and (max-width:1370px){hr{margin:30px 0}}@media screen and (max-width:991px){hr{margin:20px 0}}@media screen and (max-width:767px){.views-exposed-form .views-exposed-widget{padding:0!important;max-width:59%;margin-right:10px}.views-exposed-form .views-exposed-widget input[type=text]{width:100%}.nav-wrapper .search-container .views-exposed-form .views-exposed-widget{max-width:90%}.nav-wrapper .search-container .views-exposed-form .views-exposed-widget input[type=text]{height:45px;line-height:45px}}.search-container{z-index:1;overflow:hidden!important}@media screen and (max-width:767px){.search-container{margin-top:20px}}@media screen and (min-width:768px){.search-container .views-exposed-form input[type=text]{filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;height:44px;line-height:44px}}@media screen and (max-width:767px){.search-container .views-exposed-form input[type=text]{height:39px;line-height:39px}}.search-container .views-exposed-form .views-exposed-widget{padding-top:0}.search-container .views-exposed-form .views-exposed-widget .form-submit{margin-top:0}@media screen and (max-width:767px){.bg-image img{width:100%;height:inherit}}.btn .btn__inner,.btn.btn--white .btn__inner{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.btn.btn--white{background:#fff;color:#e0001b}.btn.btn--white .btn__inner:after,.btn.btn-login-fitforfree:before{width:1em;height:1em;display:inline-block;content:"";background-size:contain}.btn.btn--white .btn__inner:after{margin-left:8px;margin-left:.5rem;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0g\aR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBv\a cnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4N\a CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0idjQiIHhtbG5zPSJodHRwOi8vd3d3\aLnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMu\a b3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIt\aNTcwIDQwOS40IDE3IDIzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC01NzAg\aNDA5LjQgMTcgMjMiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmls\a bD0iI2UwMDAxYiIgZD0iTS01NTMuNiw0MTkuN2wtMTQtMTBjLTAuNS0wLjMt\aMS4xLTAuNC0xLjYtMC4xYy0wLjUsMC4yLTAuOCwwLjctMC44LDEuM3Y4aDN2\aLTUuMWw5LjksNy4xbC05LjksNy4xdi01LjFoLTN2OA0KCWMwLDAuNiwwLjMs\aMS4xLDAuOCwxLjNjMC4yLDAuMSwwLjUsMC4yLDAuNywwLjJjMC4zLDAsMC42\aLTAuMSwwLjktMC4zbDE0LTEwYzAuNC0wLjMsMC42LTAuNywwLjYtMS4yUy01\aNTMuMiw0MjAtNTUzLjYsNDE5Ljd6Ii8+DQo8L3N2Zz4NCg==\a) center center no-repeat}.btn.btn--conversion{background:#41a169;color:#fff}.btn.btn--conversion--darker{background:#327d51;color:#fff}.btn.btn--secondary{background:#fff;color:#1a1a1a}.btn.btn--block{display:block;width:100%;text-align:center}.btn.btn-login-fitforfree:before{margin-right:.5em}.btn{font-size:19.2px;font-size:1.2rem;padding:12.8px 20.8px;padding:.8rem 1.3rem;display:inline-block}.btn,header .global-buttons .btn{border-radius:0;border-bottom:0}.nav{background:#fff;-webkit-box-shadow:none;box-shadow:none}@media screen and (max-width:767px){.nav{background:#f2f2f2}.nav-wrapper .logo{margin-top:0;text-align:left}.nav-wrapper .logo img{max-height:100px;width:100px}}.nav button span{color:#000}.nav nav a{border-top:none;color:#000}.nav nav .abonnementen a:before{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0g\aR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBv\a cnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4N\a CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0idjQiIHhtbG5zPSJodHRwOi8vd3d3\aLnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMu\a b3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIt\aMzE2IDQ4IDM2IDM2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC0zMTYgNDgg\aMzYgMzYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0iI2Uw\aMDAxYiIgZD0iTS0yODguNSw1M2gtOC41djNoOC41YzEuNywwLDMuNSwwLjks\aMy41LDN2NmgtMjZ2LTZjMC0yLjEsMS44LTMsMy41LTNoNy41di0zaC03LjVj\aLTMuNywwLTYuNSwyLjYtNi41LDZ2MTIuNg0KCWMwLDMuNiwyLjksNi41LDYu\aNSw2LjVoNy41di0zaC03LjVjLTEuOSwwLTMuNS0xLjYtMy41LTMuNVY2OWgy\aNnYyLjZjMCwxLjktMS42LDMuNS0zLjUsMy41aC04LjV2M2g4LjVjMy42LDAs\aNi41LTIuOSw2LjUtNi41VjU5DQoJQy0yODIsNTUuNi0yODQuOCw1My0yODgu\aNSw1M3oiLz4NCjwvc3ZnPg0K\a)}.nav .menu-toggle:before{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0g\aR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBv\a cnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4N\a CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iYXJ0d29yayIgeG1sbnM9Imh0dHA6\aLy93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3\a dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdC\a b3g9IjAgMCAzMiAzMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMzIg\aMzIiID4NCjxnPg0KCTxwYXRoIGZpbGw9IiNlMDAwMWIiIGQ9Ik01LjUsOGgy\aMUMyNy4zLDgsMjgsNy4zLDI4LDYuNVMyNy4zLDUsMjYuNSw1aC0yMUM0Ljcs\aNSw0LDUuNyw0LDYuNVM0LjcsOCw1LjUsOHoiLz4NCgk8cGF0aCBmaWxsPSIj\aZTAwMDFiIiBkPSJNMjYuNSwxNGgtMjFDNC43LDE0LDQsMTQuNyw0LDE1LjVT\aNC43LDE3LDUuNSwxN2gyMWMwLjgsMCwxLjUtMC43LDEuNS0xLjVTMjcuMywx\aNCwyNi41LDE0eiIvPg0KCTxwYXRoIGZpbGw9IiNlMDAwMWIiIGQ9Ik0yNi41\aLDIzaC0yMUM0LjcsMjMsNCwyMy43LDQsMjQuNVM0LjcsMjYsNS41LDI2aDIx\aYzAuOCwwLDEuNS0wLjcsMS41LTEuNVMyNy4zLDIzLDI2LjUsMjN6Ii8+DQo8\aL2c+DQo8L3N2Zz4NCg==\a)}.nav .menu-toggle span{border-bottom:none}.nav .menu-toggle:before,.nav .search:before{border-top:none!important}.submenu-container{background:#f2f2f2;-webkit-box-shadow:none;box-shadow:none;z-index:10;padding-top:0}.submenu-container img[alt="Fit For Free"]{width:100px;height:100px;top:-1px;position:relative}.submenu-container hr{border:1px solid #bbb}header{z-index:10}header .btn--login,header .global-buttons .btn{padding:6.4px 12.8px;padding:.4rem .8rem;font-size:16px;font-size:1rem}header .main-logo{top:0;max-width:100px}@media screen and (max-width:767px){header .main-logo{top:50px;margin:0;left:10px}}header .main-logo img{min-width:100px}@media screen and (max-width:767px){header .main-logo img{max-width:80px;min-width:80px}}header .global-buttons .btn{display:block;padding:12.8px;padding:.8rem}@media screen and (max-width:767px){header .global-buttons .btn{padding:.4rem .8rem}}header .global-buttons .btn.btn-login{left:0}@media screen and (max-width:767px){header .global-buttons .btn.btn--conversion{position:relative;right:-15px;max-width:125px}}.bg-image:after{background:0 0}.bg-image .jumbotron{position:absolute;top:0;left:0;width:100%;height:100%;z-index:3;background:0 0}.search-location__form-wrapper .use-location{width:40px;width:2.5rem;height:40px;height:2.5rem;background:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0g\aR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBv\a cnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4N\a CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iYXJ0d29yayIgeG1sbnM9Imh0dHA6\aLy93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3\a dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdC\a b3g9Ii0zMjIuNCA1OS42IDEyLjMgMTIuMyIgZW5hYmxlLWJhY2tncm91bmQ9\aIm5ldyAtMzIyLjQgNTkuNiAxMi4zIDEyLjMiIHhtbDpzcGFjZT0icHJlc2Vy\a dmUiPg0KPHBhdGggZmlsbD0iI2UwMDAxYiIgZD0iTS0zMTEuMiw1OS42bC0x\aMC43LDQuOGMtMC43LDAuMy0wLjYsMS4zLDAuMSwxLjVsMy42LDEuM2MwLjIs\aMC4xLDAuNCwwLjMsMC41LDAuNWwxLjMsMy42YzAuMiwwLjcsMS4yLDAuNywx\aLjUsMC4xDQoJbDQuOC0xMC43Qy0zMDkuOCw2MC0zMTAuNSw1OS4zLTMxMS4y\aLDU5LjZ6Ii8+DQo8L3N2Zz4NCg==\a) center center no-repeat;background-size:55%,55%;text-indent:-99999px;border:0;position:relative;left:0;top:8px;top:.5rem}@media screen and (max-width:991px){.search-location__form-wrapper .use-location{left:1rem;top:-.2rem}}form input[type=text]{border-radius:0;background:0 0;-webkit-box-shadow:none;box-shadow:none;border-bottom:1px solid #1a1a1a;padding-left:0;padding-right:10px;outline:0;color:#1a1a1a;font-family:"DinoffcPro",sans-serif;font-weight:300}form input{border:0}@media screen and (max-width:1369px){form input[type=text]{font-size:14px;height:32px;line-height:32px}}form ::-webkit-input-placeholder{color:#1a1a1a}form ::-moz-placeholder{color:#1a1a1a}form :-ms-input-placeholder{color:#1a1a1a}.fitforfreenl-search{background:#f2f2f2;-webkit-box-shadow:none;box-shadow:none;border-radius:0;z-index:10}.fitforfreenl-search .views-exposed-form{position:relative}.fitforfreenl-search__form__wrapper{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media screen and (max-width:767px){.fitforfreenl-search__form__wrapper #edit-term-wrapper{width:90%}}.fitforfreenl-search__form__wrapper__text{margin-bottom:0!important}.search-container input[type=text]{padding-left:0}.fitforfreenl-search__form__wrapper__submit{border-bottom:0;width:32px;width:2rem;height:32px;height:2rem;background-size:contain;text-indent:-99999px;position:absolute;right:48px;right:3rem;top:8px;top:.5rem}</style>

    <!--CSS van FitForFree-->
    <link type="text/css" rel="stylesheet" href="https://www.fitforfree.nl/sites/fitforfree.nl/files/css/css_xE-rWrJf-fncB6ztZfd2huxqgxu4WO-qwma6Xer30m4.css" media="all">
    <link type="text/css" rel="stylesheet" href="https://www.fitforfree.nl/sites/fitforfree.nl/files/css/css_nOulQTL-RQq0jEftlwaMIDRrOq8qKixbqwL1UssYaBw.css" media="screen">
    <link type="text/css" rel="stylesheet" href="https://www.fitforfree.nl/sites/fitforfree.nl/files/css/css_KBNW2RLfxxIAcbKwh48NXlCxcGnWSi_l8z5lA2vEuMQ.css" media="all">
    <link type="text/css" rel="stylesheet" href="https://www.fitforfree.nl/sites/fitforfree.nl/files/css/css_OpuxUITQHAXMR37ecshgRUQGXEYof-0jhP5KYZRY35U.css" media="all">
    <link type="text/css" rel="stylesheet" href="https://www.fitforfree.nl/sites/fitforfree.nl/files/css/css_lhx95E5DTL6D4aZzkAgaRyi9nQwrqgPhF2pW3x3DD7A.css" media="all">

    <style>
        #map {
            height: 400px;
            width: 400px;
        }
    </style>
</head>
<body>

<div class="results-wrapper">
    <div id="block-generic-club-club-overview-intro" class="block block-generic-club">

        <div class="content">
            <h1>9 voetbalscholen in heel Nederland!</h1>
            <p class="h1-intro" data-readmore="1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad adipisci aliquid aspernatur blanditiis cupiditate dolorem ducimus eligendi facilis harum minima molestias nam odio perspiciatis, quaerat qui sit velit voluptatibus.</p><span data-readmore-receiver="1">Lees meer</span>
        </div>
    </div>

    <div id="block-views-exp-clubs-page" class="block block-views block-light row-space-bottom">

        <div class="content">
            <form action="index.php" method="GET" id="views-exposed-form-clubs-page" accept-charset="UTF-8"><div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 no-padding">
                            <div class="views-exposed-form search-clubs">
                                <div class="views-exposed-widgets clearfix">
                                    <div id="edit-clubs-wrapper" class="views-exposed-widget views-widget-filter-clubs">
                                        <div class="views-widget">
                                            <div class="form-item form-type-textfield form-item-clubs-address">
                                                <input placeholder="Zoek op stad, postcode of adres" type="text" id="edit-clubs-address" name="plaats" value="" size="60" maxlength="128" class="form-text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="views-exposed-widget views-submit-button symbool">
                                        <input type="submit" id="edit-submit-clubs" name="" value="Zoeken" class="form-submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <button type="button" class="use-location huidigeLocatie">Mijn locatie gebruiken</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="block-system-main" class="block block-system">

        <div class="content">
            <div class="view view-clubs view-id-clubs view-display-id-page view-dom-id-7de267cd343933743c756acfce59bda6">
                <div class="view-content">
                    <?php foreach($coordinaten as $coordinaat){?>
                                <div class="even">
                                    <article class="block-light location-result col-xs-12 no-padding" itemscope="" itemtype="https://schema.org/ExerciseGym">
                                        <a itemprop="url" href="">
                                            <div class="info-wrap">
                                                <h2><span itemprop="name"><?=$coordinaat['voetbalschool_naam']?></span></h2>
                                                <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                                    <div><span itemprop="streetAddress"><?=$coordinaat['voetbalschool_adres']?> - <?=$coordinaat['voetbalschool_postcode']?></span></div>
                                                </div>
                                            </div>
                                            <div class="field field-name-field-club-in-de-buurt-foto field-type-image field-label-hidden">
                                                <div class="field-items">
                                                    <div class="field-item even">
                                                        <picture title="sportschool Fit For Free Amersfoort">
                                                            <img src="<?=$coordinaat['voetbalschool_img']?>" alt="sportschool Fit For Free Amersfoort" title="sportschool Fit For Free Amersfoort">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </a>
                                    </article>
                                </div>
                   <?php } ?>
                </div>

                <div id="coordinaten"></div>

                <div class="view view-clubs view-id-clubs view-display-id-attachment_1">
                    <div class="map hidden-xs hidden-sm">
                        <div class="ip-geoloc-map leaflet-view markers">
                            <div id="map"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


	<!-- jQuery&bootstrap -->
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Custom js  -->
    <script src="js/pages/index.js"></script>

    <!--Thema van FitForFree-->
    <script type="text/javascript" src="https://www.fitforfree.nl/sites/fitforfree.nl/files/js/js_7Ukqb3ierdBEL0eowfOKzTkNu-Le97OPm-UqTS5NENU.js"></script>
    <script type="text/javascript" src="https://www.fitforfree.nl/sites/fitforfree.nl/files/js/js_xvYJgU6LChHqbcSh4y1AvdXfD5QBIwT3GVGVUeuksbM.js"></script>
<!--    <script type="text/javascript" src="https://www.fitforfree.nl/sites/fitforfree.nl/files/js/js_v5h6QiLKJ7jUlhRcF-ebYUzWid1htJHjMqA3bd0tMUw.js"></script>
-->    <script type="text/javascript" src="https://www.fitforfree.nl/sites/fitforfree.nl/files/js/js_cElcYrYnSTrh_o58MG5L-QyFXV7fjpRR75mEuXs82lU.js"></script>




    <script src="js/pages/coordinaten.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmSWC5wi4lIC6li0O85M_ITdyCprP76V0&callback=initMap"></script>

</body>
</html>

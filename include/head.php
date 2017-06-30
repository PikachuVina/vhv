<?php
$name = 'Cộng Tác Viên';
$title = 'Hệ thống VIP LIKE tăng like,sub,share facebook';
$color = '#'.rand(0,9).rand(0,9).rand(0,9);
$version = '1.0';
?>
<!DOCTYPE html>
<html xmlns='https://www.w3.org/1999/xhtml' lang='vi' prefix='og:https://ogp.me/ns# fb: https://ogp.me/ns/fb#'>
  <head>
	  <!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("484155d1c9e4ce5d0f636220e99e55b1");</script><!-- end Mixpanel -->
	  <script>mixpanel.track("Pageview")</script>
    <meta charset='utf-8'>
    <title>
      <?= $name ?> Version <?= $version ?> - <?= $title ?>
    </title>
    <meta name='description' content='<?= $name ?> - <?= $title ?>'>
    <meta name='keywords' content='<?= $name ?> - <?= $title ?>'>
    <meta name='copyright' content='<?= $name ?>'>
    <meta name='robots' content='index, follow'>
    <meta name='googlebot' content='index, follow'>
    <meta name='YandexBot' content='index, follow'>
    <meta name='google-site-verification' content='wpADGy2bjBNtbkh-tlgN_xzKKn5njWRduxwvsX2ZbbA'>
    <!-- Og -->
    <meta property='og:url' content='./assets/img/logo.png'>
    <meta property='og:type' content='website'>
    <meta property='og:title' content='<?= $name ?> - <?= $title ?>'>
    <meta property='og:description' content='<?= $name ?> - <?= $title ?>'>
    <meta property='og:locale' content='vi_VN'>
    <meta property='og:image' content='./assets/img/logo.png'>
    <!-- Twitter -->
    <meta name='twitter:card' content='<?= $name ?>'>
    <meta name='twitter:site' content='<?= $name ?>'>
    <meta name='twitter:title' content='<?= $name ?> - <?= $title ?>'>
    <meta name='twitter:description' content='<?= $name ?> - <?= $title ?>'>
    <!-- Other -->
    <meta http-equiv='content-language' content='en'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='./assets/img/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <meta name='revisit-after' content='1 days'>
    <meta name='author' content='Bùi Mạnh Nghĩa'>
    <!-- CSS & JS -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='//fontawesome.io/assets/font-awesome/css/font-awesome.css'>
    <style>
      .thongbao {
      	background-color: #000
      }
      .thongbao {
      	text-shadow: 1px 1px 2px rgba(17, 86, 26, 0.5);
      	background-color: <?=$color ?>;
      	border-color: <?=$color ?>;
      	color: #fff;
      	padding: 10px;
      	border: 1px solid transparent;
      	border-radius: 4px;
      	margin-bottom: 5px
      }
      .panel-primary>.panel-heading,
      .btn-danger {
      	background-color: <?=$color ?>!important
      }
      .panel-primary>.panel-heading,
      .panel-primary,
      .btn-danger {
      	border-color: <?=$color ?>!important
      }
      .btn-danger:hover,
      .btn-danger:focus,
      .btn-danger.active {
      	background: <?=$color ?>!important
      }
      .btn-danger:hover,
      .btn-danger:focus,
      .btn-danger.active {
      	border-color: <?=$color ?>!important
      }
      .form-control:focus {
      	border-bottom: 2px solid <?=$color ?>;
      	border-top: 0;
      	border-right: 0;
      	border-left: 0
      }
      .navbar {
      	background: #000
      }
      .navbar {
      	background: <?=$color ?>
      }
      .navbar-brand {
      	color: #f22!important
      }
      .nav > li > a {
      	color: #fff!important
      }
      .nav > li > a:focus {
      	color: #f22!important
      }
    </style>
  </head>
  <body>
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-8 col-lg-offset-2'>
          <nav class='navbar navbar-default'>
            <div class='container-fluid'>
              <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                  <span class='sr-only'>Toggle navigation
                  </span>
                  <span class='icon-bar'>
                  </span>
                  <span class='icon-bar'>
                  </span>
                  <span class='icon-bar'>
                  </span>
                </button>
                <a class='navbar-brand' href='/'>
                  <i class='fa fa-star-o'></i> <?= $name ?> 
                  <span style='display:inline-block;vertical-align:middle;font-size:10px;margin-top:-15px'>150+
                  </span>
                </a>
              </div>
              <div id='navbar' class='navbar-collapse collapse'>
                <ul class='nav navbar-nav'>
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                  <li>
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <?php if($_SESSION['user'] == 1){
                  echo "<li><a href='/admin.html'><i class='fa fa-tachometer'></i> Panel Admin</a></li>";
                  } ?>
                  <?php if($_SESSION['user'] == 1){
                  echo "<li><a href='/dangky.html'><i class='fa fa-group'></i> Đăng Ký</a></li>";
				  } ?>
				  <li>
                    <a href="/naptien.html"><i class="fa fa-money"></i> Nạp Tiền</a>
                  </li>

                  <li>
                    <a href="/banggia.html"><i class="fa fa-list"></i> Bảng Giá</a>
                  </li>
                  <li>
                    <a target="_blank" href="https://facebook.com/bmn.2312"><i class="fa fa-user-secret"></i> Liên Hệ Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

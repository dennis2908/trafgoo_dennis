<html lang="{{ app()->getLocale() }}">
<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<head>
 <title>PT. Baga Putra Mandiri - Portfolio</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <!-- SCOPE MOBILE VERSION RESPONSIVE -->
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

 <!-- SCOPE ADD TO HOMESCREEN AND THEME COLOR -->
 <meta name="mobile-web-app-capable" content="yes" />
 <meta name="apple-mobile-web-app-title" content="PT. Baga Putra Mandiri">
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />

 <!-- SCOPE COLOR FOR BROWSER CHROME, FIREFOX AND OPERA -->
 <meta name="theme-color" content="#F17127" />

 <!-- SCOPE BROWSER WINDOWS PHONE -->
 <meta name="msapplication-navbutton-color" content="#F17127">

 <!-- SCOPE BROWSER IOS, SAFARI BROWSER -->
 <meta name="apple-mobile-web-app-capable" content="yes">
 <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
 <meta name="HandheldFriendly" content="true" />

 <!-- SCOPE SHARE FACEBOOK -->
 <meta property="og:url" content="http://urlnya.com/"/>
 <meta property="og:type" content="article"/>
 <meta property="og:title" content="PT. Baga Putra Mandiri"/>
 <meta property="og:description" content="PT. Baga Putra Mandiri"/>
 <meta property="og:image" content="URL IMAGE WEBSITE"/>

 <!-- SCOPE SHARE TWITTER -->
 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="apecsa"/>
 <meta name="twitter:title" content="PT. Baga Putra Mandiri">
 <meta name="twitter:description" content="PT. Baga Putra Mandiri"/>
 <meta name="twitter:creator" content="Fathan Rohman"/>
 <meta name="twitter:image:src" content="https://website.com/image250X250.png"/>
 <meta name="twitter:domain" content="website.com"/>

 <!-- SCOPE SHARE GOOGLE PLUS -->
 <meta itemprop="name" content="PT. Baga Putra Mandiri"/>
 <meta itemprop="description" content="Apecsa Optima Solusi (ApecsaOS) Bergerak di jasa pembuatan aplikasi, e-gov, erp, custom software, mobile application"/>
 <meta itemprop="image" content="https://website.com/image250X250.png"/>

 <!-- SCOPE STLYESHEET -->
 <link rel="icon" type="image/ico" href="{{asset('assets/images/logo/favicon.ico')}}"/>
 <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
 <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
 <!-- http://devicon.fr/ -->
 <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
 <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
 <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
 <link rel="stylesheet" href="{{asset('assets/css/main-responsive.css')}}">

 <script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>
</head>
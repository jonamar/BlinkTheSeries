<?php
$title = basename($_SERVER['PHP_SELF'],'.php');
$title = ucfirst($title); //capitalize
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blink The Series<?php if($title!="Index"){echo " " . $title;}?> | Sci-Fi Web Series </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" type="image/png" href="/favicon.png">
        
				<script type="text/javascript" src="//use.typekit.net/pud8uci.js"></script>
				<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
				
				<!-- facebook open graph infos -->
				<meta property="og:title" content="Blink The Series | A Sci-Fi Web Series" />
				<meta property="og:type" content="video" />
				<meta property="og:url" content="http://BlinkTheSeries.com" />
				<meta property="og:video" content="http://www.youtube.com/watch?v=5SjtrUYRYx4" />
				<meta property="og:image" content="http://blinktheseries.com/img/FB-logo.jpg" />
				<link rel="image_src" href="/img/FB-logo.jpg" />

        <!-- $DEV: baseline grid overlay -->
        <!--  <link rel="stylesheet" href="http://basehold.it/23"> -->

        <link rel="stylesheet" href="css/compiled.css">
        
        <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
        
    </head>
    <body class="<?=basename($_SERVER['PHP_SELF'],'.php')?>">
        <!--[if lt IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

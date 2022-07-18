<?php include('set.php'); ?>
<!DOCTYPE HTML>
<html lang="tr" class="tr no-js">
	
	<head>
		<meta charset="UTF-8">
		<title><?php echo $set['title'] ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		
		<link rel="icon" href="{{theme_url('dist/img/app/ios/30.png')}}">
		
		<link rel="apple-touch-icon" sizes="76x76"   href="<?php path('img/app/76.png') ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php path('img/app/120.png') ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php path('img/app/152.png') ?>">
	    
		
		<?php
		/*
		<link rel="stylesheet" href="<?php path('libs/slick/slick.css') ?>" />
		<link rel="stylesheet" href="<?php path('libs/photoswipe/dist/photoswipe.css') ?>" />
		<link rel="stylesheet" href="<?php path('libs/photoswipe/dist/default-skin/default-skin.css') ?>" />
		*/
		?>
		
		<?php if(isset($set['css'])) : foreach ($set['css'] as $key => $value): ?>
			<link rel="stylesheet" href="<?php path($value) ?>" />
		<?php endforeach; endif ?>

		<link rel="stylesheet" href="<?php path('app.min.css') ?>?v=<?php echo rand(3,15) ?>" />
	
	</head>


	<body class="<?php echo $set['class'] ?>">
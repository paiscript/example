<!DOCTYPE html>

<html>
<head>
	<meta charset=UTF-8>

	<title><?php pai_title(); ?></title>

	<meta name="description" content="<?php echo @pai_pageInfo('description')?>">
	<meta name="keywords" content="<?php echo @pai_pageInfo('keywords')?>">
	
	
	<link rel="stylesheet" href="<?php echo PAI_PATH.PAI_FOLDER_CONTENT?>/style.css" type="text/css" media="all">

	<!--[if IE]>
	<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
	<![endif]-->
	
	<?php pai_head(); ?>
</head>

<body>
	
	
	<h1>PAI - PHP Ajax Include</h1>
	
	
	<?php pai_content('breadcrumb')?>
	
	
	<div id="header"><?php pai_content('header'); ?></div>

	<div id="menu"><?php pai_menu('main', array('currentClass'=> 'current')); ?></div>
	

	<div id="content">
		<div id="intervaltest"><?php pai_content('intervaltest')?></div>
		<?php pai_content('page')?>
	</div>

	<div id="sidebar"><?php pai_content('sidebar')?></div>
	
	

	<br style="clear: both;">

	<p>
		<a href="<?php echo PAI_PATH;?>sitemap">Sitemap</a>
		 - 
		<a href="http://example.com/">Example</a>
	</p>

<?php if (pai_conf('ajax', 'framework') == 'prototype'): ?>
	<script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js"></script>
	<script>!window.Prototype && document.write(unescape('%3Cscript src="<?php echo PAI_PATH?>content/static/prototype.js"%3E%3C/script%3E'))</script>
<?php elseif (pai_conf('ajax', 'framework') == 'jquery'): ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo PAI_PATH?>content/static/jquery-1.6.2.min.js"%3E%3C/script%3E'))</script>
<?php endif; ?>

	<?php pai_footer(); ?>
	
</body>
</html>
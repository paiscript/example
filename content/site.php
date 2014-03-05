<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="<?php echo @pai_pageInfo('description')?>">
    <meta name="keywords" content="<?php echo @pai_pageInfo('keywords')?>">
    
    <title><?php pai_title(); ?></title>
  	
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo PAI_PATH.PAI_FOLDER_CONTENT?>/style.css" type="text/css" media="all">
  
  	<!--[if IE]>
  	<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
  	<![endif]-->
  	
  	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  	
  	<?php pai_head(); ?>
  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo PAI_PATH; ?>">PAI</a>
        </div>
        
        <div class="collapse navbar-collapse" id="menu">
          <?php pai_menu('main', array('currentClass'=> 'active')); ?>
        </div>
      </div>
    </div>
  	
    <div class="container" id="content">
      <?php pai_content('page')?>
    </div>
    
    <div id="footer">
      <div class="container">
        <p class="text-muted">PAI &copy; All rights reserved.</p>
      </div>
    </div>
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  
  	<?php pai_footer(); ?>
  	
  </body>
</html>
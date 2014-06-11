<?php

  error_reporting(E_ALL);
  ini_set("display_errors", true);


  function title($title) {
  	return 'PAI - '.$title;
  }
  
  pai_add_filter('title', 'title');
  
  function intervaltest($content) {
  	return 'interval test - '.time();
  }
  pai_add_filter('content-intervaltest', 'intervaltest');
  
  
  function breadcrumb($content) {
  	$base = array();
  	$html = array();
  	foreach(explode('/', PAI_PAGE) AS $page) {
  		$base[] = $page;
  		$page = implode('/', $base);
  		$html[] = '<a href="'.PAI_PATH.$page.'">'.pai_pageInfo('title', $page).'</a>';
  	}
  	return implode(' > ', $html);
  }
  pai_add_filter('content-breadcrumb', 'breadcrumb');

  /*
  set_error_handler('myErrorHandler');
  function myErrorHandler($level, $message, $file, $line) {
  	if (!error_reporting()) {
  		echo "Skipped error: $level $message \t\t in file $file on line $line<br>\n";
  	}
  }
  */

pai_define_box('page', 'dir'
  , [ 'path' => 'page'
    , 'id' => 'content'
    , 'default' => '404'
    ]
  );

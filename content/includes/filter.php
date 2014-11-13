<?php

  /**
  *** Filters
  **/

  function title($title) {
    return 'PAI - '.$title;
  }

  function intervaltest($content) {
    return 'interval test - '.time();
  }

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


  /**
  *** Enable / Disable Filters
  **/

  pai_add_filter('title', 'title');
  pai_add_filter('content-intervaltest', 'intervaltest');
  pai_add_filter('content-breadcrumb', 'breadcrumb');

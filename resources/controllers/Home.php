<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class Home extends Controller
{
  public function featured() {
    $args = array(
      'posts_per_page' => 7,
    );

    $the_query = new WP_Query($args);

    return $the_query;
  }

  public function books() {
    $args = array(
      'posts_per_page' => 7,
      'post_type' => 'book'
    );

    $the_query = new WP_Query($args);

    return $the_query;
  }
}

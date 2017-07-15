<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class Author extends Controller
{
  public function profile_photo() {
    $id = get_the_author_meta('ID');

    if(function_exists( 'mt_profile_img' )) {
      $photo = mt_profile_img( $id, array(
          'size' => 'large',
          'attr' => array( 'alt' => 'Alternative Text' ),
          'echo' => false )
      );

      if ($photo) {
        return $photo;
      }
      else {
        return '<img src="'. get_avatar_url($id, array( 'size' => 300, 'default' => '404')) . '"/>';
      }

    } else {
      return '<img src="'. get_avatar_url($id, array( 'size' => 300, 'default' => '404')) . '"/>';
    }
    return get_the_author_meta('ID');
  }
}

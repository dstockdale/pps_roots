<?php
/**
 * Custom functions
 */
define( 'ACF_LITE', true );

$theme_root = realpath(dirname(__FILE__) . '/..');

include_once($theme_root . '/advanced-custom-fields/acf.php');

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_colour-scheme',
    'title' => 'Colour Scheme',
    'fields' => array (
      array (
        'key' => 'field_52a2548fde314',
        'label' => 'Colour Scheme',
        'name' => 'colour_scheme',
        'type' => 'select',
        'choices' => array (
          'Dark on light' => 'Dark on light',
          'Light on dark' => 'Light on dark',
        ),
        'default_value' => 'Dark on light',
        'allow_null' => 0,
        'multiple' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 99,
  ));
}

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'in_page_size', 470, 9999 );
}

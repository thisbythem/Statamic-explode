<?php

class Modifier_explode extends Modifier {

  public $meta = array(
		'name'       => 'explode',
		'version'    => '1.0',
		'author'     => 'Jamie Wagner',
		'author_url' => 'htpp://thisbythem.com'
	);

  public function index($value, $parameters=array()) {
    $split_on = $parameters[0];
    $index = $parameters[1];

    if ($split_on == 'col') {
      $split_on = ':';
    }

    $segments = explode($split_on, $value);

    return $segments[$index];
  }

}

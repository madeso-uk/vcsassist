<?php
/*
* Template Name: Development testing template
* */

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pagesD
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

echo '<pre class="testing">';
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

echo '<hr>';

echo '</pre>';
?>
<div class="">
  heading
</div>

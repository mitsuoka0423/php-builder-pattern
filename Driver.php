<?php

require_once('./Builder.php');

$builder = new Nutrition_Facts_Builder(1, 2);
$builder = $builder->calories(100)->sodium(12)->fat(500);

var_dump($builder->build());
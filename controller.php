<?php
require_once 'character.class.php';
require_once 'character/dragon.class.php';
require_once 'character/human.class.php';
require_once 'character/wolf.class.php';
require_once 'programming.class.php';
require_once 'Talk.class.php';

new Dragon;
new Programming;

Talk::hello();
Talk::bye();
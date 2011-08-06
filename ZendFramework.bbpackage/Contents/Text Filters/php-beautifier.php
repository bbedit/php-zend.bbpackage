#!/usr/bin/env php
<?php

require 'PHP/Beautifier.php';
error_reporting(1);

$source = file_get_contents($argv[1]);
$oToken = new PHP_Beautifier();
$oToken->addFilter('Pear');
$oToken->addFilter('DocBlock');
$oToken->addFilter('ArrayNested');
$oToken->setInputString($source);
$oToken->process(); // required
$oToken->show();

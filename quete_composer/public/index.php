<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once('../src/Wcs/Hello.php');

use \App\Wcs\Hello;
use \HelloWorld\SayHello;

$salut = new Hello();
echo $salut->talk();
echo '<br>';

$helloWorld = new SayHello();
echo $helloWorld ->world();


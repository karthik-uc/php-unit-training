<?php

require_once("bootstrap.php");

$first = new \App\First();
$second = new \App\Second();

$first->sayHello($second);
echo $second->helloName("Karthik") . PHP_EOL;
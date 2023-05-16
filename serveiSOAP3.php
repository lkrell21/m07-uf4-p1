<?php
$client = new SoapClient('http://www.dneonline.com/calculator.asmx?WSDL');
echo 'Functions available:'.PHP_EOL;
try {print_r($client->Add(['intA' => $argv[1], 'intB' => $argv[2]]));} 
catch (Exception $e) {echo $e->getMessage();}
          ?>

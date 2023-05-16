<?php
$client = new SoapClient('http://www.dneonline.com/calculator.asmx?WSDL');
echo 'Functions available:'.PHP_EOL;
print_r($client->__getFunctions());
           ?>

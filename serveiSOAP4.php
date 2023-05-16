<?php
$client = new SoapClient('http://www.dneonline.com/calculator.asmx?WSDL');

echo 'El resultat és:'.$client->Add([
'intA'=>$argv[1],
'intB'=>$argv[1],
])->AddResult;
?>

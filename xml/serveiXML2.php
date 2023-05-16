<?php
$xml = new SimpleXMLElement($argv[1], 0, true);
foreach ($xml->book as $book) 
{
     echo trim($book->author).' va escriure '.trim($book->title).PHP_EOL;
}
$newbook=$xml->addChild('book');
$newbook=$xml->addChild('author', 'Agata Christie');
$newbook=$xml->addChild('title', 'un cadàver a la biblioteca');
$xml->asXML('biblio.xml');
?>

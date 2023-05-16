<?php
$xml = new SimpleXMLElement($argv[1], 0, true);
foreach ($xml->book as $book) 
{
     echo trim($book->author).' va escriure '.trim($book->title).PHP_EOL;
}
?>

<?php
header('Content-Type: text/plain');
$url = 'https://hazard.mf.gov.pl/api/Register';
$xml = simplexml_load_file($url) or die("feed not loading");
$mf = "145.237.235.240";
echo '# Generated Hazard BlackList by '.$_SERVER['SERVER_NAME'].' on '.date(r).'.';
echo PHP_EOL;
echo '/ip dns static remove [find where comment="hazard"]';
echo PHP_EOL;
foreach($xml->PozycjaRejestru as $adres){
echo '/ip dns static add name='.$adres->AdresDomeny.' address='.$mf.' comment=hazard';
echo PHP_EOL;
}
?>
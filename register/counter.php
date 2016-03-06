<?PHP

$hitslog = "hits.txt";   
$imagefolder = "digits"; 

$hits = file($hitslog);
$hits = $hits[0] + 1;

$fp = fopen($hitslog, "w");
fwrite($fp, $hits);

echo "Visitors - ";
 print $hits; 

?>

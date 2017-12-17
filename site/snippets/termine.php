<div class="caption">
	 <p><?php echo $page->title() ?></p>
</div>
<div class="text">
	 <?= $page->text()->kirbytext() ?>
	 <?php
//Gib den Endzeitpunkt an!
$endTime = mktime(24, 0, 0, 4, 30, 2019); //Stunde, Minute, Sekunde, Monat, Tag, Jahr;

//Aktuellezeit des microtimestamps nach PHP5, für PHP4 muss eine andere Form genutzt werden.
$timeNow = microtime(true);

//Berechnet differenz von der Endzeit vom jetzigen Zeitpunkt aus.
$diffTime = $endTime - $timeNow;

//Zerlegt $diffTime am Dezimalpunkt, rundet vorher auf 2 Stellen nach dem Dezimalpunkt und gibt diese zurück.
$milli = explode(".", round($diffTime, 2));
$millisec = round($milli);

//Berechnung für Tage, Stunden, Minuten
$day = floor($diffTime / (24*3600));
$diffTime = $diffTime % (24*3600);
$houre = floor($diffTime / (60*60));
$diffTime = $diffTime % (60*60);
$min = floor($diffTime / 60);
$sec = $diffTime % 60;

//Ausgabe von $day (Tage), $houre (Stunden), $sec (Sekunden), $millisec (Millisekunden)
echo "<strong>Tage bis zur DG 1001 S: </strong><span class=\"counter\">".$day."</span><p>";
?>
 </div>

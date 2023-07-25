<?php
$files = scandir('files/Sponsoren_2020');
$files_count = count($files)-4; // Minus drei wegen "." und ".." und ".public"
//$zufall = rand(1,$files_count);


/*
@param  int  $quant # Anzahl Zufallszahlen
@param  int  $min   # kleinstmögliche Zahl
@param  int  $max   # grösstmögliche Zahl
@return array  $randary
*/
function getRandoms($quant=1, $min=0, $max=1){
    $randary = array();
    while(!(count($randary) >= $quant || count($randary) > $max-$min))
        $randary[mt_rand($min,$max)] = true; // Zufallszahl in Key speichern
    return array_keys($randary);
}


$randoms = getRandoms(5, 1, $files_count);
//echo implode(', ', $randoms); //Testzahlen

//Das auszulesende Verzeichnis
$dir = "files/Sponsoren_2020";
//Das Ziel-Array
$file_array = Array();
//Wenn das Verzeichnis existiert...
if (is_dir($dir)) {
    //...öffne das Verzeichnis
    $handle = opendir($dir);
    //Wenn das Verzeichnis geöffnet werden konnte...
    if (is_resource($handle)) {
        //...lese die enthaltenen Dateien aus,...
        while ($file = readdir($handle)) {
            //...prüfe ob es Directory-Verweise sind...
            if ($file != "." && $file != ".." && $file != ".public")
                //...und schreibe sie in das Ziel-Array
                array_push($file_array, $file);
        }
    } else {
        echo "Das &Ouml;ffnen des Verzeichnisses ist fehlgeschlagen";
    }
} else {
    echo "Das Verzeichnis existiert nicht";
}
//Zum Schluss wird das Array ausgegeben
//print_r($file_array);
//echo $file_array[$zufall]

?>



<div class="spons_2">
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[0]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[1]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[2]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[3]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"> <img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[4]] ?>"></a>
    </div>
</div>
<div class="spons">
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[0]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"> <img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[1]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[2]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[3]] ?>"></a>
    </div>
    <div class="ce_image block" id="sponsoring">
        <a href="{{link_url::28}}#spo"><img src="files/Sponsoren_2020/<?php echo $file_array[$randoms[4]] ?>"></a>
    </div>
</div>

<?php

$services = array("Heisenberg", "JohnSnow", "SheldonCooper", "HarryPotter", "DexterMorgan", "Golum", "ChandlerBing", "ProvencalLeGaulois", "DarylDixon");
$type = array("Debug", "Info", "Notice", "Error", "Critical", "Security");
$message = array("Genki dama", "Galaxian explosion", "Heaven and Earth", "Shinra Tensei Répulsion céleste", "Final Getsuuga Tenshou", "Death Note", "Ursus Shock", "Giga Drill Break", "Senbonzakura Kageyoshi", "Ama Kakeru Ryu-no Hirameki", "Hyakushiki Kannon", "Janken", "Fire Dragon’s Iron Fist", "Dragon of the Darkness Flame", "Hundred Crack Fist");
$start = strtotime('yesterday midnight');
$end = strtotime('tomorrow midnight');

echo("\nGenerate log.txt between ".date('Y-m-d H:i:s',$start). " and ".date('Y-m-d H:i:s',$end)."\n");

$logfile = fopen("log.txt", "w");

while ($start <= $end)
{
    $nbEvents = mt_rand(0,5);
    while ($nbEvents)
    {
        fwrite($logfile,"[".date('Y-m-d H:i:s',$start)."] ".$services[array_rand($services)]." - ".$type[array_rand($type)]." [".mt_rand(1,10)."] ".$message[array_rand($message)]."\n");
        $nbEvents--;
    }
    $start++;
}

fclose($logfile);

echo ("Logs complete.\n")

?>
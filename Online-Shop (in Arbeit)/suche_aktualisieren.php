<?php
    $mysql = new mysqli("18.194.170.23", "michel", "SB4me8w8t7KcjYIq", "michel_robin");
    if ($mysql->connect_error) {
        echo $mysql->connect_error;
    }
    $anfrage = $mysql->query("SELECT * FROM produkte");
    $produkte = array();
    while ($zeile = $anfrage->fetch_assoc()) {
        $produkte[] = $zeile;
    }
    for ($i = 0; $i < count($beschreibung); $i++) {
        $schluessel = array_keys($produkte);
        $gesamt = "";
        for ($i = 0; $i < count($schluessel); $i++) {
            $gesamt .= " " . $schluessel[$i];
        }
        $mysql->query("UPDATE produkte SET Suchinformationen = '" . json_encode(array_count_values(explode(" ", strtolower(str_replace("&szlig;", "ß", str_replace("&Uuml;", "Ü", str_replace("&Ouml;", "Ö", str_replace("&Auml;", "Ä", str_replace("&uuml;", "ü", str_replace("&ouml;", "ö", str_replace("&auml;", "ä", str_replace("“", "", str_replace("„", "", str_replace('"', "", (str_replace(",", "", str_replace(".", "", $gesamt)))))))))))))))), JSON_UNESCAPED_UNICODE) . "' WHERE ID = " . ($i + 1) . ";");
    }
    $mysql->close();
?>

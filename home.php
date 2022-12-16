<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>   <!-- zakazani zoomu na mobile -->

    <link rel="stylesheet" href="CSS/a.css">
    <link rel="stylesheet" href="CSS/Dark-mode.css">
    <script src="JS/Dark-mode.js"></script>
    <title>Home</title>
</head>
<body onload="onload()">

<button class="nav-item"><a role="button" onclick="darkmode()" title="Režim">Light | Dark</a></button>
<button class="nav-item"><a role="button" onclick="window.location.href='index.php';" title="Logo">RtN</a></button>
<button class="nav-item"><a role="button" title="Informace" onclick='alert("\nJak hrát Remember the Number\n\nTato hra procvičí tvé mozkové závity. Princip je jednoduchý. Na krátkou dobu ti bude ukázáno číslo, které si musíš zapamatovat a následně napsat. Každá Session má 10 Levelů. Pak postupuješ do další Session, kde se ti budou zobrazovat již čísla delší. A tak to pokračuje dál.\n\nPS: Z důvodu testovaní je hra nastavena do Session 02 Level 10. Časový interval jsou 2s a délka náhodných čísel je nastavena v řádech desítek a stovek.");'>Info</a></button>

<h1><center>Remember</center></h1>
<h2><center>the</center></h2>
<h1><center>Number</center></h1>

<center><input type="button" id="mm" onclick="window.location.href='gaa.php';" value="NEW GAME" /></input></center></br></br>

<body>

<?php
    $rows = explode(PHP_EOL, file_get_contents("CSV/lastgamer.csv"));
    $data = [];
    $rows = array_reverse($rows); 
    for ($i = 0; $i <= 5; $i++) {
    $data[$i] = explode(";", $rows[$i]);
}
    echo "<p><center>LAST PLAYER</center>";
    foreach ($data as $row) {
    foreach ($row as $value) {
        echo "<p><center>$value</p>";
    }
    
}

?>

</body>
</html>

   
   

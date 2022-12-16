<?php
session_start(); /*zapamatovanoi vsech promenych*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Dark-mode.css">
    <script src="JS/Dark-mode.js"></script>
    
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_POST["username"])===true) { // proměnná existuje
    $username = htmlspecialchars($_POST["username"]);
}
    else { // proměnná neexistuje
    exit;
    $username = '';
}

    $username = $_POST['username'] ?? 'Anonymous';


    $text = $_POST['username']." - SE 0". $_POST['klm']. " LE ".$_POST['kl']. ' - '.date(' d.m.y - H:i:s ').';'. "\n";

    $soubor = fopen("CSV/lastgamer.csv", "a");

    fwrite($soubor, $text);

    fclose($soubor);
    header("Location:home.php");
?>

</body>
</html>


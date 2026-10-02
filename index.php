<?php

$plik = "oceny.txt";

$imie = "Bartosz Gregorczk";
$przedmiot = "Programowanie";
$ocena = 1;


if (!file_exists($plik)) {
    $plikDoUtworzenia = fopen($plik, "w");
    fclose($plikDoUtworzenia);
}


$plikOtwarty = fopen($plik, "a");

$wpis = $imie . " | " . $przedmiot . " | ocena: " . $ocena . "\n";

fwrite($plikOtwarty, $wpis);

fclose($plikOtwarty);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dziennik ocen</title>
</head>

<body>

    <h1>Zapisane oceny</h1>

    <?php

    if (file_exists($plik)) {

        $plikOtwarty = fopen($plik, "r");

        while (($linia = fgets($plikOtwarty)) !== false) {
            echo $linia . "<br>";
        }

        fclose($plikOtwarty);
    }

    ?>

</body>
</html>

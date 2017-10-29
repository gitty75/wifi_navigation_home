
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wifi Navigation</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body>
<style>
/* Customization to limit height of the menu */
.custom-restricted {
    height: 160px;
    width: 150px;
    border: 1px solid gray;
    border-radius: 4px;
}
</style>

<div class="pure-menu pure-menu-scrollable custom-restricted">
<?php
        include 'init.inc.php';
        // Navigation Konfiguration
        // JSON Datei laden
        $jsonConf = file_get_contents(PROJECT_ROOT . 'inc/navconfig.json');
        // zweiter Parameter auf true, wir erhalten assoziatives Array
        $navConf = json_decode($jsonConf, true);

        //und schon sollte die Navigation gerrendert werden können...
        $myNavigation = new \NavLib\Navigation($navConf);
        echo $myNavigation->render();

?>
</div>


</body>
</html>
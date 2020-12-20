<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Bootstrap V4.3.1 Template für IMS Frauenfeld" name="description">
    <meta content="Yeshu Gudian" name="author">
    <title>Thurgauer Nutzungsflächen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/mycss.css" rel="stylesheet">
    <link href="favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="favicons/site.webmanifest" rel="manifest">
    <link color="#5bbad5" href="favicons/safari- pinned-tab.svg" rel="mask-icon">
    <link href="favicons/favicon.ico" rel="shortcut icon">
    <meta content="#2d89ef" name="msapplication-TileColor">
    <meta content="favicons/browserconfig.xml" name="msapplication-config">
    <meta content="#ffffff" name="theme-color">
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


</head>

<body>

    <div id="HOME" class="header">
        <h3 id="HOME">Thurgau</h3>
    </div>

    <div class="menu">
        <a href="#HOME">HOME</a>
        <a href="#Vorwort">VORWORT</a>
        <a href="#Karte">KARTE</a>
        <a href="#Impressum">IMPRESSUM</a>
    </div>

    <main style="color: white">

    <br>
    <br>
    <h1 id="title">Thurgauer Nutzflächen</h1>
    <br>
    <br>
    <br>
    <img src="img/favicon.png" alt="Kantonswappen" id="titleimage">

        <h2 id="Vorwort" style="visibility: hidden">.</h2>
        <br>
        <h1>Vorwort</h1>
        <p style="text-align: justify;">Diese Website wurde im Rahmen eines Projektes im Modul 306 erstellt, um das Abwickeln von Kleinprojekten zu üben. Die Website beinhaltet die
            landwirtschaftlich genutzten Flächen gemäss landwirtschaftlicher Begriffsverordnung (LBV) und Direktzahlungsverordnung (DZV) vom Kanton Thurgau.
            Die Daten wurden durch Geodaten auf der OGD Website zur Verfügung gestellt. Die Daten werden in 4 verschiedene landwirtschaftliche Nutzflächen
            Kategorien minimalist und einfach dargestellt. Zudem wurde es dem Benutzer ermöglicht mit der Karte zu interagieren. Dies haben wir mit einer interaktiven Karte bewerkstelligt.
        </p>
        <br>
        <h2 id="Karte" style="visibility: hidden">.</h2>
        <h1>Karte</h1>
        <div id="map"></div>
        <br>

    </main>

    <hr>

    <footer>
        <h1 id="Impressum">Impressum</h1>
        Daten: <a href="https://opendata.swiss/de/dataset/nutzungsflachen">OGD</a><br>
        Source Code: <a href="https://github.com/Yeshush/m306-OGD">GitHub</a><br>
        <br>
        Copyright © 2020 YSL
    </footer>

    <script type="text/javascript" src="js/myjs.js" charset="UTF-8"></script>
    <script src="js/leaflet.js"></script>

</body>

</html>
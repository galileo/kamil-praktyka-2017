<?php
include "Page.php";
$page = new Page('Mój tytuł zdefiniowany w klasie', 'Treść', '/');>
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>praktyka1</title>
    <meta charset="utf-8">
    <meta name="keywords" content="slowa kluczowe" />
    <meta name="description" content="opis stroneczki" />
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <div class="glowa">
        <h1>nagłówek</h1>
    </div>
    <div class "gora">
        <ul class="breadcrumb">
            <li>Praktyki</li>
            <li><a href="AboutUs.php">O nas</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="lewa">
            <div class="menu">
                <ul>
                    <li><a href="index.php">Strona główna</a></li>
                    <li><a href="AboutUs.php">O nas</a></li>
                </ul>
            </div>
        </div>
        <div class="prawa">
            <h1>Witamy na stronie O nas</h1>
        </div>
        <div class="clear" />
    </div>
    </div>
    <div class="stopeczka">
        Copyright by <a href="mailto:gacko2k9@interia.pl">gacko2k9</a>2017
    </div>
</body>
</html>
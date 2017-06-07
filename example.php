<?php 
$firstName = 'Kamil'
// jako ze jest to ostatni element w bloku PHP ostatnia 
// linia nie potrzebuje średnika, tak jak w liniach 10-12
?>
<html>
<head></head>
<body>
    <h1>Witaj Świecie z HTML</h1>
    <h1><?php echo 'Witaj Świecie z PHP' ?></h1>
    <h1><?= 'Witaj świecie z PHP'?></h1>
    <p><?= 'Witaj, ' . $firstName ?>!</p>
</body>
</html>
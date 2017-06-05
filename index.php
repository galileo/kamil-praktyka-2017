<?php
include "KontoBankowe.php";
$stanKonta = new StanKonta(870000);
echo "[{$stanKonta->podaj_stan_konta()}]";
$stanKonta->wyswietl_stan_konta(); // >> 870000zł
$stanKonta->zasil_konto(230);
$stanKonta->wyswietl_stan_konta(); // >> 

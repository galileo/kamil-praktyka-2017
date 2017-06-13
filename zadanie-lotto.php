<?php
// 1. Stwórz nowa klasę o nazwie TotalizatorSportowy
// 2. Klasa totalizator sportowy powinna w konstruktorze otrzymać dwie liczby
// 2.1. Pierwsza liczba będzie reprezentować ilość piłeczek w totalizatorze.
// 2.2. Druga liczba będzie reprezentować ilość losowanych piłeczke
// 3. Klasa ta będzie posiadała dwie metody
// 3.1. Pierwszą metodę nazwiemy ->wyswietlLosowe(), metoda ta powinna wyświetlić na ekran tyle losowych liczb ile wartość piłeczke zdefiniowanych w konstruktorze jako drugi argument
// 3.2. Druga metoda to ->losuj() - ta metoda zwraca za kazdym uruchomieniem tablice nowych liczb, z przedziału od 1 do wartości zdefiniowanych przez pierwszy argument konstruktora klasy
// 4. Oczywiście stworzyć klasę zgodnie z regulami panującymi w osobnym pliku odpowiednio nazwanym
// 5. Ponizej wykorzystanie klasy totalizatora sportowego która ma zostać niezmienniona

include('Lotto.php');

// Opis działania duzego lotka: http://www.duzylotek.net/duzylotek.php?goto=opisygier
$bigLotek = new Lotto(49, 6);
$mondayResults = $bogLotek->random();

$bigLotek->printRandom();

// Podpowiedź 1: Ten, kod powinien wyświetlić tylko sześć liczb. Dlaczego?
// Podpowiedź 2: W PHP aby stworzyć nową liczbę losową uzywamy funkcji rand(). Gdzie jako pierwszy parametr przyjmuje namniejszą liczbę jaką moze wylosować a jako drugi najwiekszą.
// >> Dokumentacja: http://php.net/manual/pl/function.rand.php
// Podpowiedź 3: Nie przejmuj się na razie jeśli funkcja losująca wylosuje Ci dwa razy taką samą liczbę.
// Podpowiedź 4: Elementy języka które powinienś wykorzystać; klasy, metody, tablice numeryczne, funkcje rand, petlę foreach.

// Zadanie dodatkowe: Spróbuj wyświetlić liczby zwracane przez random(), pamiętaj ma być to tablica.

// Poświęć na to co najmniej 1,5 godziny
// Jakby jakimś cudem udało Ci się to zrobić w ciągu 30 minut to spróbuj zrobić jeszcze raz z nowym plikie w którym zamiast danych do duzego lotka skorzystasz z danych ktore sa w multi lotku.
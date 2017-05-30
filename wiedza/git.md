git fetch – Pobranie danych ze zdalnego projektu
git merge – Jest to próba nałożenia zmian z branch'a źródłowego na twój obecnie wybrany branch
git checkout - Przejscie pomiedzy branchami/dodanie nowego kiedy git checkout -b nazwa 
git commit – Potwierdzenie zmian które znajdują się w fazie przechowalni (staging), wszystkie 
zmiany które zostały naniesione na kod a nie zostały dodane do tej fazy nie zostaną potwierdzone. -m (message) dla ułatwienia.
git status (git st) – Sprawdzanie plików/czy coś zostało zmodyfikowane etc. 
git init - Inicjalizuje repozytorium git w danym katalogu.
git add – Dodanie zmian do przechowalni.
git push – Wysyłanie do konkretnego brancha do brancha 
git pull – Robi to co fetch i merge naraz 
git rm - rm usuwa śledzone
rm - usuwa pliki nieśledzone
git rm --cached xxx.xx - usuwa plik z repozytorium, ale nie usuwa go z dysku.
cokolwiek z --force, to złe i okropne rzeczy, nie używać nawet w przypadku katastrofy:D
git checkout -b new_branch master - ??? nie znalazłem ale podejrzewam, że tworzy nowego brancha z mastera, w sensie nie trzeba
sie przełączać, jest to git checkout master i git checkout -b newbranch w jednym?
git diff --cached - Sprawdzanie zawartości poczekalni która trafi do repozytorium po zatwierdzeniu.
git diff - Mozemy zobaczyć zmiany z poza poczealni.
////jak zrobic brancha i kiedy stworzyć PR?///

Git checkout -b newbranch - (jest to stworzenie nowej gałęzi)

Po dokonanych zmianach w plikach, dodajemy je poleceniem git add.

Następnie git commit -m

Wpisujemy git push, jeżeli wyskakuje fatal: The current branch issue-2-uporzadkowanie-kodu has no upstream branch. 

To push the current branch and set the remote as upstream, use
git push --set-upstream origin nazwatwojegobrancha

PAMIETAC, ŻE -u to to samo co --set-upstream, reszta do przepisania, czyli powinno wygladac tak: git push -u origin issue-2-uporzadkowanie-kodu Po tym możemy już tworzyć PR(pull request) na githubie.
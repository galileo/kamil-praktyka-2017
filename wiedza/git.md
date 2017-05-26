git fetch – pobranie danych ze zdalnego projektu
git merge –  jest to przeslanie zmian, z naszego brancha na główną gałąź
git checkout - przejscie pomiedzy branchami/dodanie nowego kiedy git checkout -b nazwa
git commit – po prostu zatwierdzanie zmian w repo
git status – sprawdzanie plików/czy coś zostało zmodyfikowane etc.
git init -
git add – dodanie
git push – wysyłanie do konkretnego brancha do brancha
git pull – robi to co fetch i erge naraz
git rm/rm- git rm usuwa śledzone/rm nieśledzone
cokolwiek z --force, to złe i okropne rzeczy, nie używać nawet w przypadku katastrofy:D

////jak zrobic brancha i kiedy stworzyć PR?///
1. Cd dekstop
2. Cd HTMLCSS
3. Git checkout -b nazwabrancza
4. Po dokonanych zmianach w plikach, dodajemy je poleceniem git add.
5. Następnie git commit 
7. Wpisujemy git push, jeżeli wyskakuje 
fatal: The current branch issue-2-uporzadkowanie-kodu has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin nazwatwojegobrancha


PAMIETAC, ŻE -u to to samo co --set-upstream, reszta do przepisania, czyli powinno wygladac tak:
git push -u origin issue-2-uporzadkowanie-kodu
Po tym możemy już tworzyć PR(pull request) na githubie.
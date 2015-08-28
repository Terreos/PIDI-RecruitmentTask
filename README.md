# PIDI-RecruitmentTask

Wersja 1.0, mam nadzieje iż wszystko będzie działać na innych ustawieniach.

Informacje potrzebne do połączenia z bazą danych ustawione w db/db.php na początku pliku - w tej chwili ustawione pod localhost (NetBeans z xampp'em).

Aby zainicjalizować bazę danych według obecnych ustawień, trzeba stworzyć bazę danych 'company' której dane znajdują się w db.php a następnie ręcznie wstawić kod sql z pliku 'db_init.sql' aby stworzyć odpowiednie tabele i kolumny a także login i hasło użytkownika (root, 1234).

W links.txt podaje linki które mi pomogły z częścią kodu - nie napisałem wszystkiego od początku do końca, ale mam wrażenie że to jest dość normalne...

Mam nadzieje że reszta jest w miarę zrozumiała, w 'db' są pliki powiązane z bazą danych pracowników, w 'login' są pliki powiązane z logowaniem.

Do szaty graficznej użyłem Bootstrapa i trochę go nadpisałem dwoma plikami css, po za tym rozważałem użycie javascriptu (funkcjonalności JQuery głównie) ale uznałem że prościej będzie użyć 'iframe' jako docelowego elementu dla wyświetlania/dodawania pracowników.
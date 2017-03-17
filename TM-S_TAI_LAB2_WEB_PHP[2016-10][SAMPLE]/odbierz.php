<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            print("Nazwisko: $_POST[nazwisko]<br>");
            print("Wiek: $_POST[wiek]<br>");
            print("Kraj: $_POST[panstwo]<br>");
            print("Email: $_POST[email]<br>");
            print("Zamówiono tutoriale:");
            if (isset($_POST['lang_php'])) print(' PHP');
            if (isset($_POST['lang_cpp'])) print(' C/C++');
            if (isset($_POST['lang_java'])) print(' Java');
            if (isset($_POST['lang_csharp'])) print(' C#');
            print("<br>");
            print("Zapłata: $_POST[payWay]<br>");
            print('<a href="formularz.html">Powrót do formularza</a>')
        ?>
    </body>
</html>

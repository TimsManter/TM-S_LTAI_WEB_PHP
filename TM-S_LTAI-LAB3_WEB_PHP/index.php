<?php
function printHtmlBodyPrefix()
{
    print('<!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title></title>
    </head>
    <body>');
}

function printHtmlBodyPostfix()
{
    print('</body>
    </html>');
}

function printForm() // drukuj_form()
{
    print(file_get_contents('formularz.html'));
}

function getFormDataAsLine()
{
    $data = [
        $_POST['nazwisko'],
        $_POST['wiek'],
        $_POST['panstwo'],
        $_POST['email'],
        // TODO: Add checkbox entries
        $_POST['payWay']
    ];
    $line = implode(', ', $data);
    return $line.PHP_EOL;
}

function printFile($fileToPrint)
{
    while ($buffer = fgets($fileToPrint))
    {
        print($buffer."<br>");
    }
}

function addStringToFile($fileToAppend)
{
    fwrite($fileToAppend, getFormDataAsLine());
}

function showFromFile() // pokaz()
{
    if( !file_exists('daneFormularza.txt') )
    {
        print('Brak danych do wyświetlenia');
        return;
    }

    $file = fopen('daneFormularza.txt', 'r');
    printFile($file);
    fclose($file);
}

function appendFormDataToFile() // dodaj()
{
    $file = fopen('daneFormularza.txt', 'a');
    addStringToFile($file);
    fclose($file);
}

printHtmlBodyPrefix();
printForm();

if ( isset($_POST['show']) )
{
    print('<h1>Dane o zamówieniach:</h1>');
    showFromFile();
}
elseif ( isset($_POST['add']) )
{
    appendFormDataToFile();
    print('<h2>Dane zostały dodane do formularza</h2>');
}

printHtmlBodyPostfix();
?>
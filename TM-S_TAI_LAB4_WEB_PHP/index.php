<?php
define('DEBUG', true);

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

function getFormLanguages()
{
    $langs = [];
    if (isset($_POST['lang_php'])) array_push($langs, 'PHP');
    if (isset($_POST['lang_cpp'])) array_push($langs, 'C++');
    if (isset($_POST['lang_java'])) array_push($langs, 'Java');
    if (isset($_POST['lang_csharp'])) array_push($langs, 'C#');
    return implode(' ', $langs);
}

function getInputErrorMessages() {
    $data = getFormDataAsCollection();
    $errors = [];
    if ($data['nazwisko']) ////////////////////////////
}

function getFormDataAsCollection() {
    $argTypes = [
        'nazwisko' => FILTER_DEFAULT,
        'wiek' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 150
            ]
        ],
        'panstwo' => FILTER_DEFAULT,
        'email' => FILTER_VALIDATE_EMAIL,
        'payWay' => FILTER_DEFAULT
    ];

    $data = filter_input_array(INPUT_POST, $argTypes);
    return $data;
}

function getFormDataAsLine()
{
    $data = getFormDataAsCollection();
    $line = '';
    foreach ($data as $key => $value)
    {
        $line .= $value.' ';
    }
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

if (DEBUG) {
    var_dump(getFormDataAsCollection());
}

printHtmlBodyPostfix();
?>
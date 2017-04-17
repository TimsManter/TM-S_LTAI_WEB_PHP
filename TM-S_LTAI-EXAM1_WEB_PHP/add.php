<?php
require_once('Database.class.php');

function printForm()
{
    $db = new Database('localhost', 'root', '', 'kolos');

    $text = '';
    $text .= '<form action="add.php" method="POST" >';

    $text .= '<label for="number">Numer</label><br>';
    $text .= '<input type="number" name="number"><br>';

    $text .= '<label for="number">Nabywca</label><br>';
    $text .= '<input type="text" name="owner"><br>';

    $text .= '<label for="number">Wartość</label><br>';
    $text .= '<input type="number" name="cost"><br>';

    $text .= '<label for="number">VAT</label><br>';
    $text .= '<input type="number" name="vat"><br><br>';

    $text .= '<input type="submit" name="submit" value="Dodaj">';
    $text .= '</form>';

    $base = file_get_contents('base.template.html');
    $html = str_replace('%content%', $text, $base);
    print($html);
}

function checkForm()
{
    $db = new Database('localhost', 'root', '', 'kolos');

    if (isset($_POST['submit']))
    {
        $args = [
            'number'    => FILTER_VALIDATE_INT,
            'owner'     => FILTER_SANITIZE_ENCODED,
            'cost'      => FILTER_VALIDATE_INT,
            'vat'       => FILTER_VALIDATE_INT,
        ];

        $values = filter_input_array(INPUT_POST, $args);

        $db->Insert($values['number'], $values['owner'], $values['cost'], $values['vat']);
    }
}

printForm();
checkForm();

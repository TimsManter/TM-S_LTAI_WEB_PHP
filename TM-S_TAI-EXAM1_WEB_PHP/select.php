<?php
require_once('Database.class.php');

function printForm()
{
    $db = new Database('localhost', 'root', '', 'kolos');

    $text = '';
    $text .= '<form action="select.php" method="POST" >';

    $text .= '<label for="number">Nabywca</label><br>';
    $text .= '<input type="text" name="owner"><br><br>';

    $text .= '<input type="submit" name="submit" value="Szukaj">';
    $text .= '</form><br>';

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
            'owner'     => FILTER_SANITIZE_ENCODED
        ];

        $values = filter_input_array(INPUT_POST, $args);

        $rows = $db->GetOwner($values['owner']);

        $text = '';
        $text .= '<table>';
        $text .= '<tr><th>Numer</th><th>Nabywca</th><th>Wartość</th><th>VAT</th></tr>';
        foreach ($rows as $id => $row)
        {
            $text .= '<tr>';
                $text .= '<td>'.$row['number'].'</td>';
                $text .= '<td>'.$row['owner'].'</td>';
                $text .= '<td>'.$row['cost'].'</td>';
                $text .= '<td>'.$row['vat'].'</td>';
            $text .= '</tr>';
        }
        $text .= '</table>';
        print($text);
    }
}

printForm();
checkForm();
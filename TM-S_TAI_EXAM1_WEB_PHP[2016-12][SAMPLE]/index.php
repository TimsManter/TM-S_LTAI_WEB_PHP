<?php
require_once('Database.class.php');

function printAll()
{
    $db = new Database('localhost', 'root', '', 'kolos');
    $rows = $db->GetAll();

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

    $base = file_get_contents('base.template.html');
    $html = str_replace('%content%', $text, $base);
    print($html);
}

printAll();
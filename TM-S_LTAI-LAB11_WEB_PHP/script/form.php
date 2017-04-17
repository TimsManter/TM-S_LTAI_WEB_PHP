<?php
function printForm()
{
    $form = '<h3>Formularz zamówienia:</h3>'.
        '<form method="post" action="?strona=formularz" >';
    $form .= '...';
    return $form;
}

$db = new mysqli("localhost", "root", "", "testowa");
$title = "Form";
$content = printForm();
if (isset($_POST['show']))
{
    $content.= $db->select("SELECT `lastname`, `order-name` FROM `clients`",
    ["lastname", "order"]);
}
elseif (isset($_POST['show-java']))
{
    $content .= $db->select("SELECT `lastname`, `order-name` FROM `clients`
    WHERE ORDER REGEXP 'Java'", ["lastname", "order"]);
}
elseif (isset($_POST['add']))
{
    //pobierz dane z formularza
    //dokonaj ich konwersji i walidacji
    //sformułuj zapytanie insert i wywołaj metodę:
    //$db->insert($sql) or die("Nie udało się zapisać danych do bazy!");
}
?>
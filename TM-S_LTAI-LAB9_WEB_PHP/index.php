<?php

$base = file_get_contents('./View/base.template.html');

if ( isset($_SESSION['login']) )
{
    $index = file_get_contents('./View/index.template.html');
    $index = str_replace('%username%', $_SESSION['login'], $index);
    $html = str_replace('%content%', $index, $base);
}
else
{
    $msg = 'Nie jesteś zalogowany! <a href="login.php">Zaloguj</a>';
    $html = str_replace('%content%', $msg, $base);
}

print($html);
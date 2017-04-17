<?php
$vars = [
    134,
    67.67,
    1,
    0,
    true,
    "0",
    "Ala ma kota, a kot ma Alę",
    [1, 2, 3, 4],
    [],
    ["zielony", "czerwony", "niebieski"],
    new DateTime("now")];

print("<br><br>is_bool():<br>");
for ($i = 0; $i <= 10; $i++)
{
    print(var_dump($vars[$i]).": is_bool() == ");
    print(var_dump(is_bool($vars[$i])));
    print("<br>");
}

print("<br><br>is_int():<br>");
for ($i = 0; $i <= 10; $i++)
{
    print(var_dump($vars[$i]).": is_int() == ");
    print(var_dump(is_int($vars[$i])));
    print("<br>");
}

print("<br><br>is_numeric():<br>");
for ($i = 0; $i <= 10; $i++)
{
    print(var_dump($vars[$i]).": is_numeric() == ");
    print(var_dump(is_numeric($vars[$i])));
    print("<br>");
}

print("<br><br>is_string():<br>");
for ($i = 0; $i <= 10; $i++)
{
    print(var_dump($vars[$i]).": is_string() == ");
    print(var_dump(is_string($vars[$i])));
    print("<br>");
}

print("<br><br>is_array():<br>");
for ($i = 0; $i <= 10; $i++)
{
    print(var_dump($vars[$i]).": is_array() == ");
    print(var_dump(is_array($vars[$i])));
    print("<br>");
}

print("<br><br>is_object():<br>");
for ($i = 0; $i <= 10; $i++)
{
    print(var_dump($vars[$i]).": is_object() == ");
    print(var_dump(is_object($vars[$i])));
    print("<br>");
}
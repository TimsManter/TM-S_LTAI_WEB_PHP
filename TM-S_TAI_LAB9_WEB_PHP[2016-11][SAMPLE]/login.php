<?php

if ( isset( $_POST['login'] ) && isset( $_POST['password'] ) )
{
    
}


function filterUser($login, $pass)
{
    $data = filter_input_array(INPUT_POST, [
        'login' => FILTER_SANITIZE_STRING,
        'password' => FILTER_SANITIZE_STRING
    ]);
    
}

function printForm($error = null)
{
    $base = file_get_contents('./View/base.template.html');
    $login = file_get_contents('./View/login.template.html');

    $html = str_replace('%content%', $login, $base);
    if ( $error != null ) $html."<br><h3>$error</h3>";
    print($html);
}

function validateUser()
{
    $db = new mysqli('localhost', 'root', '', users);
    $db->query('SELECT * FROM users WHERE user_name=') // TODO: Complete
}
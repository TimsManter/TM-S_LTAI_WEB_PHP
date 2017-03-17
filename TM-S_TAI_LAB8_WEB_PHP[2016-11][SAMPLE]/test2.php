<?php
require_once('User.class.php');

session_start();
print('Id sesji: '.session_id());
print('<br>Zmienne sesji:<br>');
// print_r($_SESSION);
$_SESSION['user']->Show();

$_SESSION = array();
if (isset($_COOKIE[session_name()])) { 
   setcookie(session_name(), '', time()-42000, '/'); 
}
session_destroy();

print('<br><br><br><a href="test1.php">test1.php</a>');
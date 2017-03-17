<?php
require_once('User.class.php');

session_start();

$user = new User('kubus', 'Kubus Puchatek', 'kubus@stumilowylas.pl', 'ADMIN');
$_SESSION['user'] = $user;
// $_SESSION['username'] = 'kubus';
// $_SESSION['fullname'] = 'Kubus Puchatek';
// $_SESSION['email'] = 'kubus@stumilowylas.pl';
// $_SESSION['status'] = 'ADMIN';

print('Id sesji: '.session_id());
print('<br>Zmienne sesji:<br>');
// print_r($_SESSION);
$_SESSION['user']->Show();
print('<br>Zmienne ciasteczek: ');
print_r($_COOKIE);

print('<br><br><a href="test2.php">test2.php</a>');
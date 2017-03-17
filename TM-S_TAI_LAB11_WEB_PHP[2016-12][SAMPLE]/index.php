<?php
require_once("class/Page.class.php");

$currentPage = new Page();

if (isset($_GET['page']))
{
	$page = $_GET['page'];
	switch ($page) {
		case 'gallery':
            $page = 'gallery';
		    break;
		case 'form':
            $page = 'form';
		    break;
		default:
            $page = 'main';
	}
}
else
    $page = "main";

$file = "script/".$page.".php";
if (file_exists($file)) {
	require_once($file);
	$currentPage->SetTitle($title);
	$currentPage->SetContent($content);
	$currentPage->PrintAll();
}

?>
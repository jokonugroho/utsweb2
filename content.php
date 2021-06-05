<?php

if ($_GET['module'] == "home") {
	include "home.php";
}elseif ($_GET['module'] == "produk") {
	include "produk.php";
}elseif ($_GET['module'] == "artikel") {
	include "article.php";
}elseif ($_GET['module'] == "contact") {
	include "contact.php";
}elseif ($_GET['module'] == "about") {
	include "about.php";
}else{
	include "home.php";
}

	
?>
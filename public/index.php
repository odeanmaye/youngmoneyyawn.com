<?php
include_once dirname(__DIR__) . "/Controller.php";

$controller = new Controller();

if($_GET['page'] == "media") {
	$controller->media();
} elseif ($_GET['page'] == "music") {
	$controller->music();
} elseif ($_GET['page'] == "bio") {
	$controller->bio();
} else {
	$controller->index();
}

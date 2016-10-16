<?php

require_once "classes/projeto.class.php";
require_once "header.php";

$projeto->carregaPag($_SERVER['REQUEST_URI']);

include_once "js.includes.php";
require_once "footer.php";

?>
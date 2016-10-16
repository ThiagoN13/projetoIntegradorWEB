<?php

class projeto{
	static private $name = "Projeto Integrador!";

	public function nome(){
		echo self::$name;
	}

	public function carregaPag($uri){
		require_once str_replace($uri, "/projetoIntegrador/", NULL) . "index.body.php";
	}

	public function linkaScript($uri){
		echo "<script src=\"{$uri}\"></script>";
	}
	public function linkaStyle($uri){
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./" . str_replace($uri, "/projetoIntegrador/", NULL) . "css/style.css\"/>";
	}
}

$projeto = new projeto;

?>
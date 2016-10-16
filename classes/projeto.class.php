<?php

class projeto{
	static private $name = "Projeto Integrador!";

	public function nome(){
		echo self::$name;
	}

	public function carregaPag($uri){
		require_once str_replace($uri, "/projetoIntegrador/", NULL) . "index.body.php";
	}

}

$projeto = new projeto;

?>
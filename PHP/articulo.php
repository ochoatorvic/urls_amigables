<?php
new class articulo{

	private $nombre = '';
	private $alias;
	private $marca_id;
	private $categoria_id;

	public function getNombre(){
		return $this->nombre;
	}

	public function getAlias(){
		return $this->alias;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setAlias($alias){
		$this->alias = $alias;
	}

	public getUrlAmigable(){
		return 'http://midominio.com/';
	}
}
?> 
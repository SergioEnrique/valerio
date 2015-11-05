<?php

namespace Valerio\Conekta;

require_once dirname(__FILE__).'/../../../conekta/conekta-php/lib/Conekta.php';

/**
* 
*/
class ConektaValerio
{
	protected $id;

	function __construct()
	{
		# code...
	}

	public function prueba()
	{
		Conekta::setApiKey("key_eYvWV7gSDkNYXsmr");

		return "hola que hace usted";
	}
}
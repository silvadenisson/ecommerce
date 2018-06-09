<?php

	// criando a classe Page para interagir com o rain tpl, ou seja, criar um template page admin

	namespace Hcode;

	class PageAdmin extends Page{


		public function __construct($opts = array(), $tpl_dir = "/views/admin/"){

			parent::__construct($opts, $tpl_dir);

			} 
	}


	?>
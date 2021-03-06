<?php 
/*
 * Copyright (C) 2014 Pedro Maia (pedro@pedromm.com)
 *
 * This file is part of Cidadão Atento.
 * 
 * Cidadão Atento is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Cidadão Atento is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Cidadão Atento.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Interno - Cidadão Atento</title>
		<meta name="viewport" content="width=device-width, inital-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">		

		<!-- estilos -->
		<link rel="stylesheet" href="http://interno.cidadaoatento.com/web-dir/css/bootstrap.min.css" title="Bootstrap">		

		<!-- suporte IE 6 -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- javascript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://interno.cidadaoatento.com/web-dir/js/bootstrap.min.js"></script>
	</head>

	<body>		
		<div class="container">
			<hr>			
			<h1>Cidadão Atento</h1>
			
			<hr>			
    		<div class="page-header">			
				<p>
  					Dados da sua conta
  				</p>
			</div>  			
  			
  			<div class="span12">
  				<div class="alert alert-block <?=avisosLayout(1)?>">
	            	<p>
	            		Olá <?=$nome?>, <b>Guarde este e-mail.</b> <br /><br />
				   		
				  	 	http://interno.cidadaoatento.com <br />
				  	 	E-mail: <?=$email?> <br />
				  	 	Senha: <?=$senha?>
	            	</p>
				</div>
  			</div>
  			
			<hr>			
      		<footer>
        		<p>
        			&copy; Cidadão Atento <?=date('Y')?>
        		</p>
      		</footer>
    	</div><!--/.container-->
	</body>
</html>
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
      		<div class="row-fluid">        	
        		<div class="span12">
        			<ul class="breadcrumb">
        				<li><a href="/dashboard">Dashboard</a> <span class="divider">/</span></li>
        				<li><a href="/avisos">Aviso</a> <span class="divider">/</span></li>
        				<li><li class="active">Novo aviso</li></li>
        			</ul>
        			
        			<div class="page-header">
        				<h1>
        					Nova aviso
        				</h1>
        			</div>
        			
					<div class="alert alert-success">
						Aviso publicado com sucesso!
					</div>					
					
          			<div class="form-actions">
          				<a href="/avisos/novo" class="btn btn-success"><i class="icon-ok icon-white"></i> Novo post</a>
          				<a href="/avisos/ver/<?=$cod?>" class="btn btn-inverse"><i class="icon-search icon-white"></i> Ver aviso</a>
          			</div>
        		</div><!--/span-->
      		</div><!--/row-->
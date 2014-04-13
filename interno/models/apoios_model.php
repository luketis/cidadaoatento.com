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

class Apoios_model extends CI_Model {

	/**
	 * Conta o total de apoios
	 */
	public function num_rows() {
		$q = $this->db->get('tbl_apoios');
		
		return $q->num_rows();
	}
	
	/*
	 * Procura por cpf
	 */
	public function get_by_cpf($cpf) {
		$q = $this->db->select('codigo, tbl_denuncias_codigo, tbl_cidadaos_cpf, DATE(data) AS data, TIME(data) AS hora')
					  ->from('tbl_apoios')
					  ->where('tbl_cidadaos_cpf', $cpf)
					  ->get();
		
		return $q->result();
	}
}
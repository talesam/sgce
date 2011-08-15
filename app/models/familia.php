<?php
/**
 *  Model
 * 
 * [Short Description]
 *
 * @package default
 * @author Edinei L. Cipriani
 * @version $Id$
 * @copyright __MyCompanyName__
 **/
class Familia extends AppModel {

	public $escolaridades = array(
		null => 'Não Informado',
		'nenhuma' => 'Nenhuma', 
		'ensino_fundamental' => 'Ensino Fundamental', 
		'ensino_medio' => 'Ensino Médio', 
		'ensino_tecnico' => 'Ensino Técnico', 
		'ensino_superior' => 'Ensino Superior', 
		'pos_graduado' => 'Pós Graduado', 
		'mestrado' => 'Mestrado', 
		'doutorado' => 'Doutorado'
	);
	public $hasAndBelongsToMany = array('Pergunta');
}
?>
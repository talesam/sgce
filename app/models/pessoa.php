<?php
/**
 *  Model
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales A. Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/
class Pessoa extends AppModel {

	/* Escolariadade de uma pessoa  */
	public $escolaridades = array(
		null => 'Não Informado',
		'nenhuma' => 'Nenhuma', 
		'ensino_fundamental' => 'Ensino Fundamental', 
		'ensino_medio' => 'Ensino Médio', 
		'ensino_tecnico' => 'Ensino Técnico', 
		'ensino_superior' => 'Ensino Superior', 
	);
	
	
	/* Tipos de pessoas  */
	public $tipos = array(
		'responsavel' 	=> 'Responsável',
		'companheiro' 	=> 'Companheiro',
		'dependente'	=> 'Dependente'
	);
	
	/* Pessoa pertence a uma Familia */
	public $hasOne = array('Familia');
}
?>

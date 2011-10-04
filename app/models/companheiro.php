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
class Companheiro extends AppModel {

	public $useTable = 'familias';
	
	
	/* Escolariadade de uma pessoa  */
	public $escolaridades = array('Analfabeto', 'Ensino Fundamental', 'Ensino Médio', 'Ensino Técnico', 'Ensino Superior', 'Não informado');

	public $belongsTo = array(
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'parente_id'
		)
	);
	
}
?>
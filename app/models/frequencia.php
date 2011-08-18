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
class Frequencia extends AppModel {

	public $codigos = array(
		'P'	 => 'Presença',
		'F'	 => 'Falta',
		'FJ' => 'Falta justificada',
		'PF' => 'Veio Familiar no lugar', 
		'PA' => 'Chegou Atrasada', 
		'PC' => 'Perdeu o cartão'
	);
	
	
	public $belongsTo = array('Familia');
	
}
?>

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
class Dependente extends AppModel {
	
	public $useTable = 'familias';

	public $belongsTo = array(
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'parente_id'
		)
	);
	
}
?>
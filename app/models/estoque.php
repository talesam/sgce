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
class Estoque extends AppModel {
	public $belongsTo = array('Definicoescesta');
	
	// Uma cesta tem vários itens
	*public $hasMany = array(
		'Itemcesta' => array(
			'foreignKey'   => 'estoque_id',
			'className'    => 'ItemCesta',
			'dependent'		=> true
		),
	);
}
?>

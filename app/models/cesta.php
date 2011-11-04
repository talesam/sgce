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
class Cesta extends AppModel {

	
	/* Familia tem muitas e ou pertence a um Questionário */
	public $hasAndBelongsToMany = array('Estoque');
	
	
	/* Familia tem muitas pesssoas */
	public $belongsTo = array('Familia');
	
	// Uma cesta tem vários itens
	/*public $hasMany = array(
		'Itemcesta' => array(
			'foreignKey'   => 'cesta_id',
			'className'    => 'ItemCesta',
			'dependent'		=> true
		),
	);*/
}
?>

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
class Mantimento extends AppModel {
	
	public $tipos = array(
		'cesta' => 'Cesta',
		'extra' => 'Extra'
	);
	
	
	public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo  obrigatório',
			)
		),
		'quantidade' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			),
			'numeric' => array(
				'rule' => 'numeric',
				 'message' => 'Somente é permitido números',
			)
			
		)
	);
	
}
?>
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
class Usuario extends AppModel {
	
	public $validate = array(
		'email' => array(
			'email' => array(
					'rule' => 'email',
					'required' => true,
					'message' => 'E-mail inválido',
					'on' => 'create',
				)
			),
		'nome' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo nome é obrigatório',
			)
		)
	);
	
}
?>
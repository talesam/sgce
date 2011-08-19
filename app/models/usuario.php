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
class Usuario extends AppModel {
	
	public $validate = array(
		'email' => array(
			'email' => array(
					'rule' => 'email',
					'required' => true,
					'message' => 'E-mail inválido',
					'on' => 'create',
				),
			'isUnique' => array(
					'rule' => 'isUnique',
					'message' => 'Já existe este e-mail cadastrado',
				)
			),
		'nome' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			)
		),
		'cpf' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			)
		),
		'temp_senha' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			)
		),
		'prestacao_servico' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'on' => 'create',
				'message' => 'Campo obrigatório',
			)
		)
	);
	
}
?>

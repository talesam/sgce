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
class Definicoescesta extends AppModel {

	public $hasMany = array(
		'Estoque' => array(
			'foreignKey'   => 'definicoescesta_id',
			'className'    => 'Estoque',
			'dependent'    => true
		)
	);

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
			
		),
	);
		
	public $medidas = array(
		'kilo'		=> 'kilo(s)',
		'litro' 	=> 'Litro(s)',
		'lata'		=> 'Lata(s)',
		'unidade'	=> 'Unidade(s)',
		'outro'		=> 'Outro(s)'
	);
	
	public $displayField = 'nome';
}
?>

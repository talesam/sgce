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
class Mantimento extends AppModel {
	/**
	 * Nome da tabela
	 * 
	 * @var		boolean/string
	 * @access	public
	 */
	var $useTable 	= false;

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
		'kilo'	=> 'kilo(s)',
		'litro' => 'Litro(s)',
		'lata'	=> 'Lata(s)',
		'outro'	=> 'Outro(s)'
	);

	public $displayField = 'nome';
}
?>

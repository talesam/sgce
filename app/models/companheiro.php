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
	
	public function beforeSave($options=array())
	{
		if (!isset($this->data['Companheiro']['nascimento'])) $this->data['Companheiro']['nascimento'] 			= '0000/00/00';
		if (!isset($this->data['Companheiro']['renda_familiar'])) $this->data['Companheiro']['renda_familiar'] 	= 0;
		if (!isset($this->data['Companheiro']['renda_percapta'])) $this->data['Companheiro']['renda_percapta'] 	= 0;
		//die(pr($this->data));
		return true;
	}
}
?>

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
class Familia extends AppModel {
    
	public $hasOne = array(
		'Companheiro' => array(
			'foreignKey'   => 'parente_id',
			'className'    => 'Companheiro',
			'conditions'   => array('Companheiro.companheiro' => '1'),
			'dependent'    => true
		)
	);

	public $hasMany = array(
		'Dependente' => array(
			'className' => 'Dependente',
			'foreignKey' => 'parente_id',
			'conditions' => array('Dependente.dependente' => '1'),
			'order' => 'Dependente.nome',
			'dependent'=> true
		)
	);

	/* Escolariadade de uma pessoa  */
	public $escolaridades = array('Analfabeto', 'Ensino Fundamental', 'Ensino Médio', 'Ensino Técnico', 'Ensino Superior', 'Não informado');

	/* Parentescos */
	public $parentescos = array('Nenhum', 'Filho(a) do responsável', 'Filho(a) do companheiro(a)', 'Enteado(a) do responsável', 'Enteado(a) do companheiro(a)', 'Neto(a) do responsável', 'Neto(a) do companheiro(a)');

	/* Situações  */
	public $situacoes = array('Estudando', 'Trabalhando', 'Estudando e trabalhando', 'Desempregado', 'Não informado');

	public $displayField = 'nome';

	/**
	 * Executa código antes de salvar no banco
	 * 
	 * @param	array	@options
	 * @return	boolean
	 */
	public function beforeSave($options = array()) {
		// convertendo a data
		if (isset($this->data['Familia']['nascimento']))
		{
			$data = $this->data['Familia']['nascimento']; //01/34/6789
			$this->data['Familia']['nascimento'] = substr($data,6,4).'/'.substr($data,3,2).'/'.substr($data,0,2);
		}
		// convertendo a renda
		if (isset($this->data['Familia']['renda_familiar'])) $this->data['Familia']['renda_familiar'] = str_replace(',','.',$this->data['Familia']['renda_familiar']);
		if (isset($this->data['Familia']['renda_familiar'])) $this->data['Familia']['renda_familiar'] = str_replace('R$ ','',$this->data['Familia']['renda_familiar']);
		if (isset($this->data['Familia']['renda_percapta'])) $this->data['Familia']['renda_percapta'] = str_replace(',','.',$this->data['Familia']['renda_percapta']);
		if (isset($this->data['Familia']['renda_percapta'])) $this->data['Familia']['renda_percapta'] = str_replace('R$ ','',$this->data['Familia']['renda_percapta']);
		return true;
	}
}
?>

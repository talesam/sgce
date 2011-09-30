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
}
?>

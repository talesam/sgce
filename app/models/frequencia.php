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
 */
class Frequencia extends AppModel {
	/**
	 * Alias para códigos
	 * 
	 * @var		array
	 * @access	public
	 */
	public $codigos = array(
		'P'	 => 'Presença',
		'F'	 => 'Falta',
		'FJ' => 'Falta justificada',
		'PF' => 'Veio Familiar no lugar', 
		'PA' => 'Chegou Atrasada', 
		'PC' => 'Perdeu o cartão'
	);

	/**
	 * Relacionamento 1:n
	 * 
	 * @var		array
	 * @access	public
	 */
	public $belongsTo = array('Familia');

	/**
	 * Executa código depois que a tabela foi salva
	 * - Se a família tem mais de 3 faltas, então ela se torna NÃO APTA.
	 */
	public function afterSave()
	{
		pr($this->data);
	}
}
?>

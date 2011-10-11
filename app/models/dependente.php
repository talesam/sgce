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
class Dependente extends AppModel {
	
	/* Escolariadade de um dependete  */
	public $escolaridades = array('Analfabeto', 'Ensino Fundamental', 'Ensino Médio', 'Ensino Técnico', 'Ensino Superior', 'Não informado');
	
	/* Parentescos */
	public $parentescos = array('Nenhum', 'Filho(a) do responsável', 'Filho(a) do companheiro(a)', 'Enteado(a) do responsável', 'Enteado(a) do companheiro(a)', 'Neto(a) do responsável', 'Neto(a) do companheiro(a)');
	
	public $useTable = 'familias';

	public $belongsTo = array(
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'parente_id'
		)
	);
	
	/**
	 * Executa código antes de salvar no banco
	 * 
	 * @param	array	@options
	 * @return	boolean
	 */
	public function beforeSave($options=array())
	{
		if (!isset($this->data['Dependente']['nascimento'])) 		$this->data['Dependente']['nascimento'] 		= null;
		if (!isset($this->data['Dependente']['renda_familiar'])) 	$this->data['Dependente']['renda_familiar'] 	= 0;
		if (!isset($this->data['Dependente']['renda_percapta'])) 	$this->data['Dependente']['renda_percapta'] 	= 0;
		if (isset($this->data['Dependente']['altura']))
		{
			$altura = $this->data['Dependente']['altura'];
			$this->data['Dependente']['altura']	= str_replace(',','.',$altura);
		}
		if (isset($this->data['Dependente']['peso']))
		{
			$peso = $this->data['Dependente']['peso'];
			$this->data['Dependente']['peso']	= str_replace(',','.',$peso);
		}
		// convertendo a data
		if (isset($this->data['Dependente']['nascimento']))
		{
			$data = $this->data['Dependente']['nascimento']; //01/34/6789
			$this->data['Dependente']['nascimento'] = substr($data,6,4).'/'.substr($data,3,2).'/'.substr($data,0,2);
		}
		if (isset($this->data['Dependente']['renda']))
		{
			$this->data['Dependente']['renda'] = str_replace('.','',$this->data['Dependente']['renda']);
			$this->data['Dependente']['renda'] = str_replace(',','.',$this->data['Dependente']['renda']);
			$this->data['Dependente']['renda'] = str_replace('R$ ','',$this->data['Dependente']['renda']);
		}
		//die(pr($this->data));
		return true;
	}	
}
?>

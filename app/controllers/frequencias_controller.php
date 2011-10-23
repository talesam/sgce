<?php
/**
 * LogsController
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/
class FrequenciasController extends AppController {
	/**
	 * Exibe a primeira página do cadastro
	 * 
	 * @return	void
	 */
	function admin_index($encontroId=null) 
	{
		$this->data 	= $this->paginate();
		$codigos 		= $this->Frequencia->codigos;
		$listaCampos	= array('Frequencia.data');
		$this->set(compact('codigos','listaCampos'));
	}

	/**
	 * Exibe a tela de edição do cadastro
	 * 
	 * @param	integer	$id Primarkey do campo a ser editado
	 * @return	void
	 */
	public function admin_editar($id = null) 
	{
	}

	/**
	 * Exibe a tela de inclusão do cadastro
	 * 
	 * @return	void
	 */
	function admin_cadastrar() 
	{
	}

	/**
	 * Exibe a tela de consulta do cadastro
	 * 
	 * @return	void
	 */
	function admin_consultar($id=0) 
	{
	}
}
?>

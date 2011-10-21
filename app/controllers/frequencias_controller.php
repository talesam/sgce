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
	

	function admin_index($encontroId=null) {
		
		/* Lista as frequências de um encontro */
		$frequencias = $this->Frequencia->find('list', array('conditions' => array('Frequencia.data' => $encontroId)));
				
		/* Listar as pessoas responsáveis pela família.*/
		$this->Frequencia->Familia->recursive = -1;
		$pessoas = $this->Frequencia->Familia->find('all', array('conditions' => array('Familia.parente_id' => null), 'order' => array('Familia.nome'))); 

		/* 
		* Lista os códigos da frequência
		* 
		* Ex.: Ausente, Presente...
		*  */
		$codigos = $this->Frequencia->codigos;
		
		
		/* Envia para a visão os valores */
		$this->set(compact('familias', 'frequencias', 'codigos'));
	}

}
?>

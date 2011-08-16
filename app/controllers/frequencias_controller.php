<?php
class FrequenciasController extends AppController {
	

	function admin_index($encontroId=null) {
		
		/* Lista as frequências de um encontro */
		$frequencias = $this->Frequencia->find('list', array('conditions' => array('Frequencia.encontro_id' => $encontroId)));
				
		/* Listar as pessoas responsáveis pela família.*/
		$this->Frequencia->Familia->Pessoa->recursive = -1;
		$pessoas = $this->Frequencia->Familia->Pessoa->find('all', array('conditions' => array('Pessoa.tipo' => 'responsavel'), 'order' => array('Pessoa.nome'))); 

		/* 
		* Lista os códigos da frequência
		* 
		* Ex.: Ausente, Presença...
		*  */
		$codigos = $this->Frequencia->codigos;
		
		
		/* Envia para a visão os valores */
		$this->set(compact('pessoas', 'frequencias', 'codigos'));
	}

}
?>
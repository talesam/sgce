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

class DefinicoescestasController extends AppController {
	
	function admin_index() 
	{
		if (!empty($this->data))
		{
			$ids = array();
			foreach($this->data['Definicoescesta']['id'] as $k => $v) if($v == 1) $ids[$k] = $k;

			if (empty($ids))
			{
				$this->Session->setFlash('Marque as Definições que deseja excluir.', 'flash_warning');
			} else
			{
				if($this->Definicoescesta->deleteAll(array('Definicoescesta.id' => $ids)))
				{
					$this->Session->setFlash('Definições de Cestas removidas.', 'flash_success');
				}else
				{
					$this->Session->setFlash('Definições de Cestas não removidas. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		$definicoescestas = $this->paginate();
		$this->set('definicoescestas', $definicoescestas);
		
		
		$e =& ClassRegistry::init('Estoque');

		foreach($definicoescestas as $definicoescesta){
			$estoque[$definicoescesta['Definicoescesta']['id']] = 
				$e->find('first', array('fields' => 'SUM(Estoque.quantidade*Estoque.complemento_qt) as `total`' ,'conditions' => array('Estoque.definicoescesta_id' => $definicoescesta['Definicoescesta']['id'])));
		}

		if (isset($estoque))
			$this->set('estoque', $estoque);
		
		$this->set('tipos', $this->Definicoescesta->tipos);
		$this->set('medidas', $this->Definicoescesta->medidas);
	}

	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Definicoescesta->create();
				if ($this->Definicoescesta->save($this->data)) {
					$this->gravarLog('Cadastrou definicoescesta: '. $this->data['Definicoescesta']['nome']);					
					$this->Session->setFlash('Definicoescesta cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Definicoescesta não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			
			$this->set('tipos', $this->Definicoescesta->tipos);
			$this->set('medidas', $this->Definicoescesta->medidas);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Definicoescesta inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				
				if ($this->Definicoescesta->save($this->data)) {
					
					$this->gravarLog('Modificou definicoescesta: '. $this->data['Definicoescesta']['nome']);
					
					$this->Session->setFlash('Definicoescesta salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Definicoescesta não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Definicoescesta->read(null, $id);
			}
				
			$this->set('tipos', $this->Definicoescesta->tipos);
			$this->set('medidas', $this->Definicoescesta->medidas);
		}
		
		function admin_consultar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Definicoescesta inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
				$this->gravarLog('Consultar definicoescesta: '. $this->data['Definicoescesta']['nome']);
			}
			if (empty($this->data)) {
				$this->data = $this->Definicoescesta->read(null, $id);
			}
				
			$this->set('tipos', $this->Definicoescesta->tipos);
			$this->set('medidas', $this->Definicoescesta->medidas);
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Definicoescesta inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			
			$data = $this->Definicoescesta->read(null, $id);
			if($this->Definicoescesta->delete($id)) {
				
				$this->gravarLog('Excluiu definicoescesta: '. $data['Definicoescesta']['nome']);
				
				$this->Session->setFlash('Definicoescesta removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Definicoescesta não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>

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

class EstoquesController extends AppController {
	
	function admin_index($definicoescestaId = null) 
	{
		if(!empty($this->data))
		{
			$ids = array();
		 	foreach($this->data['Estoque']['id'] as $k => $v)
		 	{
				if($v == 1) $ids[$k] = $k;
			}
			if(empty($ids))
			{
				$this->Session->setFlash('Marque os estoques para excluir.', 'flash_warning');
			} else
			{
				if($this->Estoque->deleteAll(array('Estoque.id' => $ids)))
				{
					$this->Session->setFlash('Estoques removidos.', 'flash_success');
				} else
				{
					$this->Session->setFlash('Estoques não removidos. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		if($definicoescestaId)
		{
			$this->set('definicoescesta', ClassRegistry::init('Definicoescesta')->findById($definicoescestaId));
			$this->paginate['conditions'] = array('Estoque.definicoescesta_id' => $definicoescestaId, 
				'Estoque.quantidade >' => 0);
			$this->set('estoques', $this->paginate());
		} else {
			$this->paginate['conditions'] = array('Estoque.quantidade >' => 0);
			$this->set('estoques', $this->paginate());
		}
	}

	function admin_cadastrar() {
		$definicoescestas = ClassRegistry::init('Definicoescesta')->find('list');
		if (!empty($this->data)) {
			if($this->Estoque->save($this->data)){
				$this->gravarLog('Cadastrou estoque: '. $definicoescestas[$this->data['Estoque']['definicoescesta_id']]);
				$this->Session->setFlash('Estoque cadastrado', 'flash_success');
				$this->redirect(array('action' => 'index'));
			}else {
				$this->Session->setFlash('Estoque não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
			}
		}
		$this->set('definicoescestas', $definicoescestas);
		
	}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Estoque inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			$definicoescestas = ClassRegistry::init('Definicoescesta')->find('list');
			if (!empty($this->data)) {
				if ($this->Estoque->save($this->data)) {
					$this->gravarLog('Modificou estoque: '. $definicoescestas[$this->data['Estoque']['definicoescesta_id']]);
					
					$this->Session->setFlash('Estoque salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Estoque não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Estoque->read(null, $id);
			}
				
			$this->set('definicoescestas', $definicoescestas);
		}

		function admin_consultar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Estoque inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			$definicoescestas = ClassRegistry::init('Definicoescesta')->find('list');
			if (!empty($this->data)) {
				if ($this->Estoque->save($this->data)) {
					$this->gravarLog('Modificou estoque: '. $definicoescestas[$this->data['Estoque']['definicoescesta_id']]);
					
					$this->Session->setFlash('Estoque salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Estoque não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Estoque->read(null, $id);
			}
				
			$this->set('definicoescestas', $definicoescestas);
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Estoque inválido', 'flash_error');
				$this->redirect($this->referer());
			}

			$data = $this->Estoque->read(null, $id);
			if($this->Estoque->delete($id)) {
				
				$this->gravarLog('Excluiu estoque: '. $data['Definicoescesta']['nome']);
				
				$this->Session->setFlash('Estoque removido.', 'flash_success');
				$this->redirect($this->referer());
			}
			$this->Session->setFlash('Estoque não pode ser removido.', 'flash_error');
			$this->redirect($this->referer());
		}
}
?>

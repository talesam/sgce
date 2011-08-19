<?php
class EstoquesController extends AppController {
	
	function admin_index($mantimentoId) {
		
		$this->set('mantimento', ClassRegistry::init('Mantimento')->findById($mantimentoId));
		
		$this->paginate['conditions'] = array('Estoque.mantimento_id' => $mantimentoId);
		$this->set('estoques', $this->paginate());
		
		
		if(!empty($this->data)){
			$ids = array();
		 	foreach($this->data['Estoque']['id'] as $k => $v){
				if($v == 1){
					$ids[$k] = $k;
				}
			}
			if(empty($ids)){
				$this->Session->setFlash('Marque os estoques para excluir.', 'flash_warning');
			}else{
				if($this->Estoque->deleteAll(array('Estoque.id' => $ids))){
					$this->Session->setFlash('Estoques removidos.', 'flash_success');
				}else{
					$this->Session->setFlash('Estoques não removidos. Por favor, tente novamente.', 'flash_error');
				}
			}
			
		}
		
	}

	function admin_cadastrar($mantimentoId) {
			if (!empty($this->data)) {
				$this->data['Estoque']['mantimento_id'] = $mantimentoId;
				if(!empty($this->data['Estoque']['quantidade']) && $this->data['Estoque']['quantidade'] > 0){
 					for($i = 1; $i <= $this->data['Estoque']['quantidade']; $i++){
						$this->Estoque->create();
						$this->Estoque->save($this->data);
						$this->gravarLog('Cadastrou estoque: '. $this->data['Estoque']['descricao']);
					}
					$this->Session->setFlash('Estoque(s) cadastrado(s)', 'flash_success');
					
					$this->redirect(array('action' => 'index', $mantimentoId));
				} else {
					$this->Session->setFlash('Estoque não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
		}
		$this->set('mantimento', ClassRegistry::init('Mantimento')->findById($mantimentoId));

		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Estoque inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Estoque->save($this->data)) {
					$this->gravarLog('Modificou estoque: '. $this->data['Estoque']['descricao']);
					
					$this->Session->setFlash('Estoque salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Estoque não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Estoque->read(null, $id);
			}
				
			$this->set('mantimento', ClassRegistry::init('Mantimento')->findById($this->data['Estoque']['mantimento_id']));
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Estoque inválido', 'flash_error');
				$this->redirect($this->referer());
			}
			
			$data = $this->Estoque->read(null, $id);
			if($this->Estoque->delete($id)) {
				
				$this->gravarLog('Excluiu estoque: '. $data['Estoque']['descricao']);
				
				$this->Session->setFlash('Estoque removido.', 'flash_success');
				$this->redirect($this->referer());
			}
			$this->Session->setFlash('Estoque não pode ser removido.', 'flash_error');
			$this->redirect($this->referer());
		}
}
?>

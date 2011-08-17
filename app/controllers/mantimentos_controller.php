<?php
class MantimentosController extends AppController {
	

	function admin_index() {
		$this->set('mantimentos', $this->paginate());
		$this->set('tipos', $this->Mantimento->tipos);
	}

	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Mantimento->create();
				if ($this->Mantimento->save($this->data)) {
					
										$this->gravarLog('Cadastrou mantimento: '. $this->data['Mantimento']['nome']);
										
					$this->Session->setFlash('Mantimento cadastrada', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Mantimento de produto não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
					$this->set('tipos', $this->Mantimento->tipos);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Mantimento inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Mantimento->save($this->data)) {
					
					$this->gravarLog('Modificou mantimento: '. $this->data['Mantimento']['nome']);
					
					$this->Session->setFlash('Mantimento salva.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Mantimento não pode ser salva. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Mantimento->read(null, $id);
			}
					$this->set('tipos', $this->Mantimento->tipos);
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Mantimento inválida', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			
			$data = $this->Mantimento->read(null, $id);
			if($this->Mantimento->delete($id)) {
				
				$this->gravarLog('Excluiu mantimento: '. $data['Mantimento']['nome']);
				
				$this->Session->setFlash('Mantimento removida.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Mantimento não pode ser removida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
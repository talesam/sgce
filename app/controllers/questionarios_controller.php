<?php
class QuestionariosController extends AppController {
	

	function admin_index() {
		$this->set('questionarios', $this->Questionario->generatetreelist());
	}

	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Questionario->create();
				if ($this->Questionario->save($this->data)) {
					$this->Session->setFlash('Questionario cadastrada', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Questionario de produto não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			
			$this->set('questionarios', $this->Questionario->generatetreelist());
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Questionario inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Questionario->save($this->data)) {
					$this->Session->setFlash('Questionario salva.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Questionario não pode ser salva. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Questionario->read(null, $id);
			}
			$this->set('questionarios', $this->Questionario->generatetreelist());
		}

		public function admin_move_down($id){
			$this->Questionario->moveDown($this->Questionario->id, 1);
			$this->Session->setFlash('Questionario movida para baixo.', 'flash_success');
			$this->redirect($this->referer());
		}
		
		public function admin_move_up($id){
			$this->Questionario->moveUp($this->Questionario->id, 1);
			$this->Session->setFlash('Questionario movida para cima.', 'flash_success');
			$this->redirect($this->referer());
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Questionario inválida', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Questionario->delete($id)) {
				$this->Session->setFlash('Questionario removida.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Questionario não pode ser removida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
<?php
class PerguntasController extends AppController {
	

	function admin_index() {
		$this->set('perguntas', $this->Pergunta->generatetreelist());
	}

	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Pergunta->create();
				if ($this->Pergunta->save($this->data)) {
					$this->Session->setFlash('Pergunta cadastrada', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Pergunta de produto não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			
			$this->set('perguntas', $this->Pergunta->generatetreelist());
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Pergunta inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Pergunta->save($this->data)) {
					$this->Session->setFlash('Pergunta salva.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Pergunta não pode ser salva. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Pergunta->read(null, $id);
			}
			$this->set('perguntas', $this->Pergunta->generatetreelist());
		}

		public function admin_move_down($id){
			$this->Pergunta->moveDown($this->Pergunta->id, 1);
			$this->Session->setFlash('Pergunta movida para baixo.', 'flash_success');
			$this->redirect($this->referer());
		}
		
		public function admin_move_up($id){
			$this->Pergunta->moveUp($this->Pergunta->id, 1);
			$this->Session->setFlash('Pergunta movida para cima.', 'flash_success');
			$this->redirect($this->referer());
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Pergunta inválida', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Pergunta->delete($id)) {
				$this->Session->setFlash('Pergunta removida.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Pergunta não pode ser removida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
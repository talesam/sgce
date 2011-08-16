<?php
class EncontrosController extends AppController {
	

	function admin_index() {
		$this->set('encontros', $this->paginate());
	}

	
	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Encontro->create();
				if ($this->Encontro->save($this->data)) {
					$this->Session->setFlash('Encontro cadastrada', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Encontro de produto não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Encontro inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Encontro->save($this->data)) {
					$this->Session->setFlash('Encontro salva.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Encontro não pode ser salva. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Encontro->read(null, $id);
			}
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Encontro inválida', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Encontro->delete($id)) {
				$this->Session->setFlash('Encontro removida.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Encontro não pode ser removida.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>
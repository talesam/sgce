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

class DependentesController extends AppController {
	

	function admin_index($familiaId=null)
	{
		if (!empty($familiaId))
		{
			$this->paginate['conditions'] = array('Dependente.parente_id' => $familiaId, 'Dependente.dependente' => 1);
		}
		$this->set('dependentes', $this->paginate());
		$this->set('familiaId', $familiaId);
	}

	
	function admin_cadastrar($familiaId) {
			if (!empty($this->data)) {
				$this->Dependente->create();
				if ($this->Dependente->save($this->data)) {
					$this->Session->setFlash('Dependente cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index', $familiaId));
				} else {
					$this->Session->setFlash('Dependente não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			$this->set('familiaId', $familiaId);
			$this->set('escolaridades', $this->Dependente->escolaridades);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Dependente inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Dependente->save($this->data)) {
					$this->Session->setFlash('Dependente salvo.', 'flash_success');
					$this->redirect(array('action' => 'index', $this->data['Dependente']['parente_id']));
				} else {
					$this->Session->setFlash('Dependente não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) 
			{
				$this->data = $this->Dependente->read(null, $id);
				// convertendo a data
				$data = explode('-',$this->data['Dependente']['nascimento']);//0123/56/89
				$this->data['Dependente']['nascimento'] = $data[2].'/'.$data[1].'/'.$data[0];
				// convertendo a renda
				//if (isset($this->data['Dependente']['renda'])) $this->data['Dependente']['renda'] = str_replace('.',',',$this->data['Dependente']['renda']);
				// convertendo a altura
				if (isset($this->data['Dependente']['altura']))
				{
					$altura = $this->data['Dependente']['altura'];
					$this->data['Dependente']['altura']	= str_replace('.',',',$altura);
				}
			}
			$this->set('escolaridades', $this->Dependente->escolaridades);
		}
		
		public function admin_consultar($id = null) 
		{
			if (!$id && empty($this->data)) 
			{
				$this->Session->setFlash('Consulta Dependente inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (empty($this->data)) 
			{
				$this->data = $this->Dependente->read(null, $id);
				$data = explode('-',$this->data['Dependente']['nascimento']);//0123/56/89
				$this->data['Dependente']['nascimento'] = $data[2].'/'.$data[1].'/'.$data[0];
				$this->data['Dependente']['renda']  = number_format($this->data['Dependente']['renda'],2,',','.');
			}
			$this->set('escolaridades', $this->Dependente->escolaridades);
		}

		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Dependente inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			if($this->Dependente->delete($id)) {
				$this->Session->setFlash('Dependente removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Dependente não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
}
?>

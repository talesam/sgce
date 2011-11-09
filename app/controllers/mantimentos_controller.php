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

class MantimentosController extends AppController {
	var $name	= 'Mantimentos';
	
	function admin_index() {
		$mantimentos = $this->paginate();
		$this->set('mantimentos', $mantimentos);
		
		
		$e =& ClassRegistry::init('Estoque');
		foreach($mantimentos as $mantimento){
			$estoque[$mantimento['Mantimento']['id']] = $e->find('count', array('conditions' => array('Estoque.data_saida' => NULL, 'Estoque.mantimento_id' => $mantimento['Mantimento']['id'])));
		}
		
		$this->set('estoque', $estoque);
		
		$this->set('tipos', $this->Mantimento->tipos);
		$this->set('medidas', $this->Mantimento->medidas);
	}

	function admin_cadastrar() {
			if (!empty($this->data)) {
				$this->Mantimento->create();
				if ($this->Mantimento->save($this->data)) {
					
										$this->gravarLog('Cadastrou mantimento: '. $this->data['Mantimento']['nome']);
										
					$this->Session->setFlash('Mantimento cadastrado', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Mantimento não pode ser cadastrado. Por favor, tente novamente.', 'flash_error');
				}
			}
			
			$this->set('tipos', $this->Mantimento->tipos);
			$this->set('medidas', $this->Mantimento->medidas);
		}

		function admin_editar($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Mantimento inválido.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				
				if ($this->Mantimento->save($this->data)) {
					
					$this->gravarLog('Modificou mantimento: '. $this->data['Mantimento']['nome']);
					
					$this->Session->setFlash('Mantimento salvo.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Mantimento não pode ser salvo. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Mantimento->read(null, $id);
			}
				
			$this->set('tipos', $this->Mantimento->tipos);
			$this->set('medidas', $this->Mantimento->medidas);
		}


		public function admin_excluir($id = null) {
			if(!$id) {
				$this->Session->setFlash('Mantimento inválido', 'flash_error');
				$this->redirect(array('action'=>'index'));
			}
			
			$data = $this->Mantimento->read(null, $id);
			if($this->Mantimento->delete($id)) {
				
				$this->gravarLog('Excluiu mantimento: '. $data['Mantimento']['nome']);
				
				$this->Session->setFlash('Mantimento removido.', 'flash_success');
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('Mantimento não pode ser removido.', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}

	/**
	 * Exibe o relatório de vencimento de mantimentos
	 * 
	 * @return	void
	 */
	public function admin_rel_venc_mantimentos()
	{
		$dtVencimento = date('Y/m/d',strtotime('+ 30 days',strtotime(date('Y/m/d'))));
		$this->loadModel('Estoque');
		$opcoes['conditions'] = "Estoque.data_vencimento <= '".$dtVencimento."'";
		$opcoes['order'] 	 = 'Estoque.data_entrada, Definicoescesta.nome';
		$this->data = $this->Estoque->find('all',$opcoes);
		foreach($this->data as $_linha => $_arrModel)
		{
			//$this->data[$_linha]['Estoque']['data_entrada']   = isset($this->data[$_linha]['Estoque']['data_entrada']) 	  ? date('d/m/Y',strtotime('-30 days',strtotime($this->data[$_linha]['Estoque']['data_entrada']))) 	 : '-';
			$this->data[$_linha]['Estoque']['data_entrada']   = isset($this->data[$_linha]['Estoque']['data_entrada']) 	  ? date('d/m/Y',strtotime($this->data[$_linha]['Estoque']['data_entrada'])) 	: '-';
			$this->data[$_linha]['Estoque']['data_vencimento']= isset($this->data[$_linha]['Estoque']['data_vencimento']) ? date('d/m/Y',strtotime($this->data[$_linha]['Estoque']['data_vencimento'])) : '-';
		}

		// descobrindo o tipo do relatório
		$tipo = isset($this->params['pass']['0']) ? $this->params['pass']['0'] : 'html';
		if ($tipo=='pdf') $this->layout = 'pdf';

		// config da view
		$config['titulo'] 											= 'Relatório de Mantimentos';
		$config['listaCampos']										= array('Definicoescesta.nome','Estoque.data_vencimento','Estoque.complemento_qt');
		$config['Campos']['Definicoescesta']['nome']['titulo'] 		= 'Produto';
		$config['Campos']['Estoque']['data_entrada']['titulo'] 	= 'Data Entrada';
		$config['Campos']['Estoque']['data_vencimento']['titulo'] 	= 'Data Vencimento';
		$config['Campos']['Estoque']['complemento_qt']['titulo'] 	= 'Complemento';

		$this->set(compact('config','tipo'));
		$this->render('../padrao/rel_lista');
	}
}
?>

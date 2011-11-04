<?php
/**
 * CestasController
 * 
 * [Short Description]
 *
 * @package default
 * @author Rafael Malatesta e Tales Mendonça
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class CestasController extends AppController {
	
	public function admin_index(){
	
		
		$this->set('cestas', $this->paginate());
	}
	
	public function admin_editar($id){
	
			if (!$id && empty($this->data)) {
				$this->Session->setFlash('Cesta inválida.', 'flash_error');
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Cesta->save($this->data)) {
					$this->Session->setFlash('Cesta doada com sucesso.', 'flash_success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Cesta não pode ser doada. Por favor, tente novamente.', 'flash_error');
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Cesta->read(null, $id);
			}
		
		$this->set('familias', ClassRegistry::init('Familia')->find('list', array('conditions' => array('Familia.parente_id' => null, 'Familia.situacao' => 1), 'order' => 'Familia.nome')));
	}
	
	public function admin_gerar_cestas(){
		$defCesta = ClassRegistry::init('Definicoescesta');
		$estoqueCesta = ClassRegistry::init('Estoque');
		$estoqueCesta->recursive = -1;
		$cestas = 0;
		$ok = true;

		while($ok){
			/* Pego todas as definições da cesta  */
			foreach($defCesta->find('all') as $def){
				$estoqueParam = array(
					array('AND' => array (
						'conditions' =>  array(
							'Estoque.definicoescesta_id' => $def['Definicoescesta']['id']), 
							'Estoque.data_vencimento >= ' => 'Date(Now())'),
						'order' => array('Estoque.data_vencimento' => 'ASC')
					)
				);
				$estoque = $estoqueCesta->find('all', $estoqueParam);
				
				if (empty($estoque)) {
					$ok = false;
					break;
				}
				
				$qtde = 0;
				foreach($estoque as $itemEstoque){
					$qtde += $itemEstoque['Estoque']['quantidade'] * $itemEstoque['Estoque']['complemento_qt'];
				}
				
				//pr($qtde); die();
				//pr($def); die();
				if ($qtde < $def['Definicoescesta']['quantidade']) {
					$ok = false;
					break;
				}
			}

			// Se nao houver todos os itens que compoem a cesta, finaliza.
			if (!$ok) {
				break;
			}
			
			// Abatendo os itens do estoque.
			foreach($defCesta->find('all') as $def){
				$estoque = $estoqueCesta->find('all', $estoqueParam);
				
				$qtdeTotal = $def['Definicoescesta']['quantidade'];
				foreach ($estoque as $itemEstoque) {
					$undNecessaria = $qtdeTotal / $itemEstoque['Estoque']['complemento_qt'];
					$undDisponivel = $itemEstoque['Estoque']['quantidade'];
					$undUtilizada = $undNecessaria;
					if ($undUtilizada > $undDisponivel)
						$undUtilizada = $undDisponivel;					
					$qtdeItem = $undUtilizada * $itemEstoque['Estoque']['complemento_qt'];
					$qtdeTotal -= $qtdeItem;
					$novaQtde = $undDisponivel - $undUtilizada;
					/*
					if ($itemEstoque['Estoque']['quantidade'] > 1) {
						pr($novaQtde); die();
					}
					*/
					
					$estoqueCesta->save(array('id' => $itemEstoque['Estoque']['id'], 
						'quantidade' => $novaQtde));
					
					if ($qtdeTotal == 0)
						break;
				}
			}			
			$cestas++;			
		}
		
		if($cestas > 0){
			for($i=0; $i < $cestas; $i++){
				$this->Cesta->create();
				$this->Cesta->save(array('data_gerada' => date('Y-m-d H:i:s')));
			}
			$this->Session->setFlash($cestas . ' cestas geradas.', 'flash_success');
		}else{
			$this->Session->setFlash('Não foi possível gerar nenhuma cesta.', 'flash_error');
		}
		
		// Removendo do estoque os itens vazios.
		/*foreach($estoque as $itemEstoque){
			if ($itemEstoque['Estoque']['quantidade'] == 0) {
				$estoqueCesta->deleteAll(array('Estoque.id' => $itemEstoque['Estoque']['id']));
			}
		} */
		
		$this->redirect('index');	
	}

	/**
	 * Exibe o relatório voluntarios
	 * 
	 * @return	void
	 */
	public function admin_rel_cestas()
	{
		$this->data 	= $this->Cesta->find('all');
		$_arrData = $this->data;
		foreach($_arrData as $_linha => $_arrModel)
		{
			$this->data[$_linha]['Cesta']['data_gerada'] 	= date('d/m/Y',strtotime($this->data[$_linha]['Cesta']['data_gerada']));
			$this->data[$_linha]['Cesta']['data_saida'] 	= date('d/m/Y',strtotime($this->data[$_linha]['Cesta']['data_saida']));
		}
		$listaCampos 	= array('Familia.nome','Familia.telefone','Cesta.data_gerada','Cesta.data_saida');
		$this->set(compact('listaCampos'));
	}
}
?>

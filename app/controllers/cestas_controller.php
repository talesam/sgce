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
	
	
	public function admin_gerar_cestas(){
		
			$estoque =& ClassRegistry::init('Estoque');
			$definicoescesta =& ClassRegistry::init('Definicoescesta');
			$definicoescestas = $definicoescesta->find('all');

			$totalCestas = 0;
			$ok = true;

			while($ok){
				$cesta = array();
				foreach($definicoescestas as $m){
					$t = $estoque->find('first', array('fields' => 'SUM(Estoque.quantidade) as `total`' ,'conditions' => array('Estoque.definicoescesta_id' => $m['Definicoescesta']['id'])));
					if($t[0]['total'] >= $m['Definicoescesta']['quantidade']){
						$estoques_para_cesta = $estoque->find('all', array(
							'order' => array('Estoque.data_vencimento' => 'asc'),
							'conditions' => array(
								'Estoque.definicoescesta_id' => $m['Definicoescesta']['id'], 
								'Estoque.quantidade >=' => $m['Definicoescesta']['quantidade']) 
							)
						);
						foreach($estoques_para_cesta as $estoque_para_cesta){
							if($estoque_para_cesta['Estoque']['complemento_qt'] == $m['Definicoescesta']['quantidade']){
								$cesta['Estoque'][] = array('id' => $estoque_para_cesta['Estoque']['id']);
								$data[] = array(
									'id' =>  $estoque_para_cesta['Estoque']['id'], 
									'quantidade' => $estoque_para_cesta['Estoque']['quantidade'] -1
								);
							}elseif($estoque_para_cesta['Estoque']['complemento_qt'] >= $m['Definicoescesta']['quantidade']){
								$cesta['Estoque'][] = array('id' => $estoque_para_cesta['Estoque']['id']);
								$data[] = array(
									'id' =>  $estoque_para_cesta['Estoque']['id'], 
									'quantidade' => $estoque_para_cesta['Estoque']['quantidade'] - $m['Definicoescesta']['quantidade']
								);
							}else{
								
								
								
							}
						}
					}else{
						$ok = false;
					}
				}

				if($ok){
					$cesta['Cesta']['data_gerada'] = date('Y-m-d H:i:s');
					
					foreach($data as $d){
						$estoque->save(array('id' => $d['id'], 'quantidade' => $d['quantidade']));
					}
					
					$this->Cesta->saveAll($cesta);
					$totalCestas++;
				}
				unset($data);

			}
			if($totalCestas > 0){
				$this->Session->setFlash($totalCestas .' nova(s) cesta(s) gerada(s)', 'flash_success');
			}else{
				$this->Session->setFlash('Nenhuma cesta gerada.', 'flash_error');
			}
			$this->redirect($this->referer());
	}
	
}
?>

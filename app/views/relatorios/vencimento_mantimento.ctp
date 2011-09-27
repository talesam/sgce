<style>table  { width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
        <table>
        <tr>
                <th>Mantimento</th>
                <th>Complemento</th>
                <th>Data de Vencimento</th>                
 
        </tr>
			<?php // foreach($matriculas as $matricula): ?> 
                <tr>
                        <td> <!-- Imprimir só as famílias aptas -->
                                <?php echo $vencimento_mantimento['Estoque']['Definicaocesta.nome']; ?>
                        </td>
                        
                        <td>
                                <?php echo $vencimento_mantimento['Estoque']['complemento_qt']; ?>
                        </td>
                        
                        <td>
                                <?php echo $vencimento_mantimento['Estoque']['data_vencimento']; ?>
                        </td>
                </tr>
                <?php // endforeach; ?>
        </table>

<style>table  { width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
        <table>
        <tr>
                <th>Mantimento</th>
                <th>Quantidade</th>
                <th>Complemento</th>                
 
        </tr>
			<?php // foreach($matriculas as $matricula): ?> 
                <tr>
                        <td> <!-- Imprimir só as famílias aptas -->
                                <?php echo $pendencia['Cesta']['nome']; ?>
                        </td>
                        
                        <td>
                                <?php echo $pendencia['Cesta']['quantidade']; ?>
                        </td>
                        
                        <td>
                                <?php echo $pendencia['Cesta']['complemento_qt']; ?>
                        </td>
                </tr>
                <?php // endforeach; ?>
        </table>

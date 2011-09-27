<style>table  { width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
        <table>
        <tr>
                <th>Situação</th>
                <th>Nome do Representante</th>
 
        </tr>
			<?php // foreach($matriculas as $matricula): ?> 
                <tr>
                        <td> <!-- Imprimir só as famílias aptas -->
                                <?php echo $familia['Pessoa']['status']; ?>
                        </td>
                        
                        <td>
                                <?php echo $familia['Pessoa']['nome']; ?>
                        </td>
                </tr>
                <?php // endforeach; ?>
        </table>

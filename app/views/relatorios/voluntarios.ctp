<style>table  { width: 100%; margin: 0px; padding: 0px; table td, table th { margin: 0px; padding; 0px; } table th { background: #ccc; } table tr { border-top: 1px solid black;}</style>
        <table>
        <tr>
                <th>Nome</th>
                <th>Prestação de serviço</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Situação</th>   
        </tr>
			<?php // foreach($matriculas as $matricula): ?> 
                <tr>
                        <td>
                                <?php echo $voluntario['Pessoa']['nome']; ?>
                        </td>
                        
                        <td>
                                <?php echo $voluntario['Pessoa']['prestacao_servico']; ?>
                        </td>
                        
                        <td>
                                <?php echo $voluntario['Pessoa']['telefone']; ?>
                        </td>
                        
                        <td>
                                <?php echo $voluntario['Pessoa']['celular']; ?>
                        </td>
                                
                        <td> <!-- Imprimir apenas os ativos -->
                                <?php echo $voluntario['Pessoa']['status']; ?>
                        </td>
                </tr>
                <?php // endforeach; ?>
        </table>

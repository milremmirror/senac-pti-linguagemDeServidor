<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> PTI Linguiagem de servidor</title>
        <meta charset = "UTF-8">
    </head>
    <body>

	
    <?php

		function imc($valor) {
				
			$faixas = array(
				18.5 => 'Magreza',
				24.9 => 'Saudável',
				29.9 => 'Sobrepeso', 
				34.9 => 'Obesidade grau I',
				39.9 => 'Obesidade grau II',
				99.9 => 'Obesidade grau III');
				
				
				foreach ($faixas as $faixa => $descricao) {
					if ($valor <= $faixa) {
						echo "Atenção, seu IMC é '$valor', e você está classificado como '$descricao'";
						break;
					}
				}
			}
			
			imc(65.7);

    ?>      
    </body>
</html>
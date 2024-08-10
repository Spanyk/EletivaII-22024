<?php require('cabecalho.php'); 

$diasFerias = 0; 
$diasTrabalhados = 0; 

for ($diasFerias; $diasFerias > $diasTrabalhados;) {
  for($diasTrabalhados; $diasTrabalhados == 30; $diasTrabalhados++) {
    if ($diasTrabalhados == 30) {
      $diasFerias++;
    }

    return $diasFerias;
  }
  
}
?>
<!-- Crie uma funcionalidade que calcula a quantidade de dias de férias que um funcionário tem 
direito com base no tempo de serviço na empresa.

? A regra para cálculo de férias é a seguinte: 
Para cada 30 dias trabalhados o funcionário pode receber 1 dia de férias; ele pode no máximo 
tirar 30 dias de férias a partir do total de dias de férias informado.
 -->

<div class="row">
  <h1>Exercicio 5 </h1>
  <div class="col">
    
  </div>
</div>
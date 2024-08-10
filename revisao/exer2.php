<?php 

require('cabecalho.php');

$salario = 0.00;

if ($_POST) {
  $hr_trabalhada = (int) $_POST['hr_trabalhada'];
  $vl_hora = (double) $_POST['valor_hora']; 
  
  $resultado = calcularHoraTrabalhada($hr_trabalhada, $vl_hora);
}


function calcularHoraTrabalhada($hr_trabalhada, $vl_hora) {
  $resultado = $hr_trabalhada * $vl_hora; 

  return $resultado;
}

?>

<h2>Exercicio 2</h2>
<form action="exer2.php" method="POST" class="row g-3">
<div class="row">
  <div class="col">
      <label for="hr_trabalhada" class="m-4"> Hora trabalhada (HR): </label>
      <input type="number" name="hr_trabalhada" id="hr_trabalhada" class="form-control" required/>
  </div>
  <div class="col">
    <label for="valor_hora" class="m-4">Valor da Hora (R$):     </label>
      <input type="number" id="valor_hora" name="valor_hora" class="form-control" required>
  </div>
</div>
<div class="row">
    <div class="d-grid gap-2 col-6 mx-auto m-4">
      <button type="submit" class="btn btn-success">Calcular </button>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto m-4">
      <?php 
        if ($resultado === null) {
          // Exibe o botão desativado com valor padrão
          echo '<button type="submit" class="btn btn-outline-dark" disabled> R$ ' . number_format($salario, 2, ',', '') . '</button>';
        } else {
          // Exibe o botão com o valor calculado
          echo '<button type="submit" class="btn btn-outline-dark" disabled> R$ ' . $resultado . '</button>';
        }
      ?>
    </div>
</div>
</form>
<?php require('rodape.php') ?>
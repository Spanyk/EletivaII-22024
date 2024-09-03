<?php 
require_once '..\config.php';

use Config\Config;


Config::get_header();

$resultado = null; 
$salario = 0.00;

if ($_POST && isset($_POST['hr_trabalhada']) && isset($_POST['valor_hr'])) {
  $hr_trabalhada = filter_input(INPUT_POST, 'hr_trabalhada', FILTER_VALIDATE_INT);
  $valor_hr = filter_input(INPUT_POST, 'valor_hr', FILTER_VALIDATE_FLOAT);
  
  if ($hr_trabalhada !== false && $valor_hr !== false) {
      $resultado = number_format(calcularHoraTrabalhada($hr_trabalhada, $valor_hr), 2, ',', '.');
  } else {
      $erro = "Por favor, insira valores válidos.";
  }
}

function calcularHoraTrabalhada($hr_trabalhada, $vl_hora) {
  $resultado = $hr_trabalhada * $vl_hora; 

  return $resultado;
}

?>

<h2>Exercicio 2</h2>
<?php if (isset($erro)): ?> Index</>
    <div class="alert alert-danger"><?php echo $erro; ?></div>
<?php endif; ?>
<form action="exer2.php" method="POST" class="row g-3">
<div class="row">
  <div class="col">
      <label for="hr_trabalhada" class="m-4"> Hora trabalhada (HR): </label>
      <input type="number" name="hr_trabalhada" id="hr_trabalhada" class="form-control" required value="<?php echo isset($_POST['hr_trabalhada']) ? htmlspecialchars($_POST['hr_trabalhada']) : ''; ?>"/>
  </div>
  <div class="col">
    <label for="valor_hora" class="m-4">Valor da Hora (R$):     </label>
    <input type="number" name="valor_hr" id="valor_hr" class="form-control" required value="<?php echo isset($_POST['valor_hr']) ? htmlspecialchars($_POST['valor_hr']) : ''; ?>"/>
  </div>
</div>
<div class="row">
    <div class="d-grid gap-2 col-6 mx-auto m-4">
      <button type="submit" class="btn btn-success"><strong> Calcular </strong></button>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto m-4">
      <?php 
        if ($resultado === null) {
          // Exibe o botão desativado com valor padrão
          echo '<button type="submit" class="btn btn-dark" data-mdb-ripple-init disabled> R$ ' . number_format($salario, 2, ',', '') . '</button>';
        } else {
          // Exibe o botão com o valor calculado
          echo '<button type="submit" class="btn btn-dark" data-mdb-ripple-init disabled> R$ ' . $resultado . '</button>';
        }
      ?>
    </div>
</div>
</form>
<div class="btn-return"><a href="..\main.php"><i class="fa fa-plane" aria-hidden="true"></i>Voltar</a></div>

<?php
Config::get_footer();?>
<?php
require_once '..\config.php';

use Config\Config;

Config::get_header();


?>



<form action="exer1.php" method="POST">
  <div class="row m-4">
    <h1> Exercício 1 </h1>
    <div class="col-md-8">
      <label for="hora_entrada"> Hora Entrada</label>
      <input type="time" name="hora_entrada" id="hora_entrada" class="form-control" />
    </div>
    <div class="col-md-4">
      <label> Hora de Saida </label>
      <input type="time" id="hora_saida" name="hora_saida" class="form-control" />
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-success mt-2 " name="btn-submit" id="btn-submit">
        CALCULAR
      </button>
    </div>
</form>
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Resultado</h5>
  </div>
  <div class="modal-body ">

    <?php if (isset($_POST['btn-submit'])) {
      $hora_incial = new DateTime($_POST['hora_entrada']);
      $hora_final = new DateTime($_POST['hora_saida']);

      $diferenca = $hora_final->diff($hora_incial);
      echo "Diferença de horário: " . $diferenca->format("%h:%I");
    }

    ?>
  </div>

</div>
</div>

<div class="mt-3">
  <a href="../main.php" class="btn btn-secondary">
    <i class="fa-solid fa-house me-2"></i>Voltar
  </a>
</div>
<?php

Config::get_footer();
?>
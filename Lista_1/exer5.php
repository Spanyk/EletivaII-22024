<?php require_once '..\config.php';

use Config\Config;

Config::get_header(); ?>
<div>
<h1>Exercício 5: Cálculo de Férias</h1>
    <form method="POST" action="exer5.php">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="diasTrabalhados">Dias Trabalhados:</label>
            <input type="number" class="form-control" id="diasTrabalhados" name="diasTrabalhados" required>
          </div>
        </div>
      </div>
      <div class="row p-2">
          <button type="submit" class="btn btn-success "> Calcular Dias de Férias</button>
      </div>
    </form>
    <?php
    if ($_POST) {
        $diasTrabalhados = (int)$_POST['diasTrabalhados'];
        $diasFerias = min(floor($diasTrabalhados / 30), 30);

        echo "<div class='mt-4'>";
        echo "<h3>Resultados:</h3>";
        echo "<p>Funcionário trabalhou: <strong>$diasTrabalhados</strong> dias</p>";
        echo "<p>Dias de férias a que tem direito: <strong>$diasFerias</strong> dias</p>";
        echo "</div>";
    }
    ?>
</div>
<div class="btn-return"><a href="..\main.php"><i class="fa fa-plane" aria-hidden="true"></i>Voltar</a></div>

<?php Config::get_footer(); ?>

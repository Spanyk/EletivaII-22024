<?php require_once '..\config.php';

use Config\Config;

Config::get_header(); ?>


<div class="container mt-5">
    <h1>Estimativa de Custos do Projeto</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="horasPrevistas">Horas Previstas:</label>
            <input type="number" class="form-control" id="horasPrevistas" name="horasPrevistas" required>
        </div>
        <div class="form-group">
            <label for="taxaPorHora">Taxa por Hora (R$):</label>
            <input type="number" step="0.01" class="form-control" id="taxaPorHora" name="taxaPorHora" required>
        </div>
        <div class="form-group">
            <label for="custosAdicionais">Custos Adicionais (R$):</label>
            <input type="number" step="0.01" class="form-control" id="custosAdicionais" name="custosAdicionais" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Calcular Custo Total</button>
    </form>

    <?php
    if ($_POST) {
  
        $horasPrevistas = (int)$_POST['horasPrevistas'];
        $taxaPorHora = (float)$_POST['taxaPorHora'];
        $custosAdicionais = (float)$_POST['custosAdicionais'];

        $custoMaoDeObra = $horasPrevistas * $taxaPorHora;

        $custoTotalProjeto = $custoMaoDeObra + $custosAdicionais;

        echo "<div class='mt-4'>";
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Custo de Mão de Obra:</strong> R$ " . number_format($custoMaoDeObra, 2, ',', '.') . "</p>";
        echo "<p><strong>Custos Adicionais:</strong> R$ " . number_format($custosAdicionais, 2, ',', '.') . "</p>";
        echo "<p><strong>Custo Total do Projeto:</strong> R$ " . number_format($custoTotalProjeto, 2, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
</div>

<div class="mt-3">
  <a href="../main.php" class="btn btn-secondary">
    <i class="fa-solid fa-house me-2"></i>Voltar
  </a>
</div>
<?php Config::get_footer(); ?>

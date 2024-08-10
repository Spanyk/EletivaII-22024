<?php require('cabecalho.php'); ?>


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
        <button type="submit" class="btn btn-primary">Calcular Custo Total</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Captura os dados do formulário
        $horasPrevistas = (int)$_POST['horasPrevistas'];
        $taxaPorHora = (float)$_POST['taxaPorHora'];
        $custosAdicionais = (float)$_POST['custosAdicionais'];

        // Cálculo do custo de mão de obra
        $custoMaoDeObra = $horasPrevistas * $taxaPorHora;

        // Cálculo do custo total do projeto
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

<?php require('rodape.php'); ?>

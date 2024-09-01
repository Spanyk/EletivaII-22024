<?php require_once '..\config.php';

use Config\Config;

Config::get_header(); ?>
<div class="container mt-5">
    <h1>Avaliação de Desempenho do Projeto</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="prazoFinalizacao">Prazo para Finalização (AAAA-MM-DD):</label>
            <input type="date" class="form-control" id="prazoFinalizacao" name="prazoFinalizacao" required>
        </div>
        <div class="form-group">
            <label for="totalAtividades">Total de Atividades:</label>
            <input type="number" class="form-control" id="totalAtividades" name="totalAtividades" required>
        </div>
        <div class="form-group">
            <label for="atividadesDesenvolvidas">Atividades Desenvolvidas:</label>
            <input type="number" class="form-control" id="atividadesDesenvolvidas" name="atividadesDesenvolvidas" required>
        </div>
        <div class="form-group">
            <label for="produtividade">Atividades por Dia:</label>
            <input type="number" class="form-control" id="produtividade" name="produtividade" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Avaliar Desempenho</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Captura os dados do formulário
        $prazoFinalizacao = $_POST['prazoFinalizacao'];
        $totalAtividades = (int)$_POST['totalAtividades'];
        $atividadesDesenvolvidas = (int)$_POST['atividadesDesenvolvidas'];
        $produtividade = (int)$_POST['produtividade'];

        // Cálculo do progresso
        $progresso = ($atividadesDesenvolvidas / $totalAtividades) * 100;

        // Cálculo do tempo restante
        $dataAtual = new DateTime();
        $dataPrazo = new DateTime($prazoFinalizacao);
        $tempoRestante = $dataPrazo->diff($dataAtual)->days;

        // Cálculo das atividades restantes
        $atividadesRestantes = $totalAtividades - $atividadesDesenvolvidas;

        // Cálculo do tempo necessário para concluir as atividades restantes
        $diasNecessarios = ceil($atividadesRestantes / $produtividade);

        echo "<div class='mt-4'>";
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Progresso do Projeto:</strong> " . number_format($progresso, 2, ',', '.') . "%</p>";
        echo "<p><strong>Tempo Restante para o Prazo:</strong> " . $tempoRestante . " dias</p>";
        echo "<p><strong>Atividades Restantes:</strong> " . $atividadesRestantes . "</p>";
        echo "<p><strong>Dias Necessários para Concluir:</strong> " . $diasNecessarios . " dias</p>";

        // Avaliação se o projeto está dentro do prazo
        if ($diasNecessarios <= $tempoRestante) {
            echo "<p class='text-success'><strong>O projeto está dentro do prazo!</strong></p>";
        } else {
            echo "<p class='text-danger'><strong>O projeto está atrasado!</strong></p>";
        }

        echo "</div>";
    }
    ?>
</div>

<div class="mt-3">
  <a href="../main.php" class="btn btn-secondary">
    <i class="fas fa-arrow-left me-2"></i>Voltar
  </a>
</div>
<?php 

Config::get_footer();?>

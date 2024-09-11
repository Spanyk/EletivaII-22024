<?php
require_once '..\config.php';

use Config\Config;

Config::get_header();

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_POST) {
    // Atribuição dos dados referentes a abertura da tarefa
    $nome_tarefa = $_POST['nome_tarefa'] ?? '';
    $total_hora_tarefa = (float) ($_POST['total_hora_tarefa'] ?? 0);
    $complexidade_tarefa = $_POST['complexidade_tarefa'] ?? '';

    // Atribuição dos dados do funcionário
    $nome_funcionario = $_POST['nome_funcionario'] ?? '';
    $hora_disponivel_funcionario = $_POST['hora_disponivel_funcionario'] ?? 0;
    $nivel_experiencia = $_POST['nivel_experiencia'] ?? '';


    // Criação do array de funcionários
    $funcionarios = [
        'Junior' => [
            'nome' => $nome_funcionario,
            'disponibilidade' => $hora_disponivel_funcionario,
            'complexidades_permitidas' => ['Baixa']
        ],
        'Pleno' => [
            'nome' => $nome_funcionario,
            'disponibilidade' => $hora_disponivel_funcionario,
            'complexidades_permitidas' => ['Baixa', 'Media']
        ],
        'Senior' => [
            'nome' => $nome_funcionario,
            'disponibilidade' => $hora_disponivel_funcionario,
            'complexidades_permitidas' => ['Baixa', 'Media', 'Alta']
        ]
    ];
    
    // Validar os dados
    if (empty($nome_tarefa) || empty($complexidade_tarefa) || empty($nivel_experiencia)) {
        $resultado = "Por favor, preencha todos os campos.";
    } else {
        // Verificar se existe um funcionário disponível para o nível de experiência
        if (isset($funcionarios[$nivel_experiencia])) {
            $funcionario = &$funcionarios[$nivel_experiencia];
            
            // Verificar a disponibilidade do funcionário
            if ($funcionario['disponibilidade'] >= $total_hora_tarefa) {
                // Verificar se a complexidade da tarefa é adequada para o nível de experiência
                if (in_array($complexidade_tarefa, $funcionario['complexidades_permitidas'])) {
                    // Atribuir a tarefa
                    $tarefas_atribuidas[] = [
                        'nome' => $nome_tarefa,
                        'horas' => $total_hora_tarefa,
                        'complexidade' => $complexidade_tarefa,
                        'funcionario' => $funcionario['nome']
                    ];
                    
                    // Atualizar a disponibilidade do funcionário
                    $funcionario['disponibilidade'] -= $total_hora_tarefa;
                    
                    $resultado = "Tarefa '$nome_tarefa' atribuída com sucesso para {$funcionario['nome']}.";
                    $resultado .= " Tempo estimado: $total_hora_tarefa horas.";
                    $resultado .= " Complexidade: $complexidade_tarefa.";
                } else {
                    $resultado = "A complexidade da tarefa não é adequada para o nível de experiência do funcionário.";
                }
            } else {
                $resultado = "O funcionário não possui horas disponíveis suficientes para esta tarefa.";
            }
        } else {
            $resultado = "Não há funcionário disponível para o nível de experiência selecionado.";
        }
    }
}


?>
<div class="container">
    <h2 class="mt-4">Exercício 4 - Atribuição de Tarefas</h2>
        <form action="Exer4.php" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nome_tarefa" class="form-label">Nome da Tarefa</label>
                    <input type="text" class="form-control" name="nome_tarefa" id="nome_tarefa" required>
                </div>
                <div class="col-md-4">
                    <label for="total_hora_tarefa" class="form-label">Hora máxima</label>
                    <input type="number" class="form-control" name="total_hora_tarefa" id="total_hora_tarefa" min="0" step="0.5" required>
                </div>
                <div class="col-md-4">
                    <label for="complexidade_tarefa" class="form-label">Grau de dificuldade</label>
                    <select class="form-select" name="complexidade_tarefa" id="complexidade_tarefa" required>
                        <option value="">Selecione</option>
                        <option value="Baixa">Baixa</option>
                        <option value="Media">Média</option>
                        <option value="Alta">Alta</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nome_funcionario" class="form-label">Nome do Funcionário: </label>
                    <input type="text" class="form-control" name="nome_funcionario" id="nome_funcionario" required>
                </div>
                <div class="col-md-4">
                    <label for="hora_disponivel_funcionario" class="form-label">Disponibilidade: </label>
                    <input type="number" class="form-control" name="hora_disponivel_funcionario" id="hora_disponivel_funcionario" min="0" step="0.5" required>
                </div>
                <div class="col-md-4">
                    <label for="nivel_experiencia" class="form-label">Nível de experiência</label>
                    <select class="form-select" name="nivel_experiencia" id="nivel_experiencia" required>
                        <option value="">Selecione</option>
                        <option value="Junior">Junior</option>
                        <option value="Pleno">Pleno</option>
                        <option value="Senior">Senior</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atribuir Tarefa</button>
        </form>
        <div class="mt-3">
            <a href="../main.php" class="btn btn-secondary">
                <i class="fa-solid fa-house me-2"></i>Voltar
            </a>
        </div>

        <?php if (isset($resultado)): ?>
            <div class="alert alert-info mt-3" role="alert">
                <?php echo $resultado; ?>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php Config::get_footer();?>

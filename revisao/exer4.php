<?php
require_once '..\config.php';
use Config\Config;

Config::get_header();

// Funções auxiliares
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Definição dos níveis de desenvolvedores e suas capacidades
$niveis_desenvolvedores = [
    'Junior' => ['complexidades_permitidas' => ['Baixa']],
    'Pleno' => ['complexidades_permitidas' => ['Baixa', 'Media']],
    'Senior' => ['complexidades_permitidas' => ['Baixa', 'Media', 'Alta']]
];

$resultado = '';
$tarefas_atribuidas = [];

if ($_POST) {
    // Sanitização e atribuição dos dados do formulário
    $nome_tarefa = sanitize_input($_POST['nome_tarefa'] ?? '');
    $total_hora_tarefa = (float) sanitize_input($_POST['total_hora_tarefa'] ?? 0);
    $complexidade_tarefa = sanitize_input($_POST['complexidade_tarefa'] ?? '');
    $nome_funcionario = sanitize_input($_POST['nome_funcionario'] ?? '');
    $hora_disponivel_funcionario = (float) sanitize_input($_POST['hora_disponivel_funcionario'] ?? 0);
    $nivel_experiencia = sanitize_input($_POST['nivel_experiencia'] ?? '');

    // Validação dos dados
    if (empty($nome_tarefa) || empty($complexidade_tarefa) || empty($nivel_experiencia)) {
        $resultado = "Por favor, preencha todos os campos.";
    } else {
        // Verificar se o nível de experiência é válido
        if (isset($niveis_desenvolvedores[$nivel_experiencia])) {
            $complexidades_permitidas = $niveis_desenvolvedores[$nivel_experiencia]['complexidades_permitidas'];
            
            // Verificar se a complexidade da tarefa é adequada para o nível de experiência
            if (in_array($complexidade_tarefa, $complexidades_permitidas)) {
                // Verificar a disponibilidade do funcionário
                if ($hora_disponivel_funcionario >= $total_hora_tarefa) {
                    // Atribuir a tarefa
                    $tarefas_atribuidas[] = [
                        'nome' => $nome_tarefa,
                        'horas' => $total_hora_tarefa,
                        'complexidade' => $complexidade_tarefa,
                        'funcionario' => $nome_funcionario
                    ];
                    
                    $resultado = "Tarefa '$nome_tarefa' atribuída com sucesso para $nome_funcionario.";
                    $resultado .= " Tempo estimado: $total_hora_tarefa horas.";
                    $resultado .= " Complexidade: $complexidade_tarefa.";
                } else {
                    $resultado = "O funcionário não possui horas disponíveis suficientes para esta tarefa.";
                }
            } else {
                $resultado = "A complexidade da tarefa não é adequada para o nível de experiência do funcionário.";
            }
        } else {
            $resultado = "Nível de experiência inválido.";
        }
    }
}

?>

<div class="container">
    <h2 class="mt-4">Exercício 4 - Atribuição de Tarefas</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

    <?php if (!empty($resultado)): ?>
        <div class="alert alert-info mt-3" role="alert">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($tarefas_atribuidas)): ?>
        <h3 class="mt-4">Tarefas Atribuídas</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tarefa</th>
                    <th>Horas</th>
                    <th>Complexidade</th>
                    <th>Funcionário</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tarefas_atribuidas as $tarefa): ?>
                    <tr>
                        <td><?php echo $tarefa['nome']; ?></td>
                        <td><?php echo $tarefa['horas']; ?></td>
                        <td><?php echo $tarefa['complexidade']; ?></td>
                        <td><?php echo $tarefa['funcionario']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php Config::get_footer(); ?>
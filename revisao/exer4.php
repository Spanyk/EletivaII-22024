<?php require('cabecalho.php');

if ($_POST) {
    // Atribuição dos dados referentes a abertura da tarefa
    $descricao_tarefa = $_POST['nome_tarefa'];
    $total_hora_tarefa = $_POST['total_hora_tarefa'];
    $complexidade_tarefa = $_POST['complexidade_tarefa'];

    // Atribuição dos dados do funcionário
    $nome_funcionario = $_POST['nome_funcionario'];
    $hora_disponivel_funcionario = $_POST['hora_disponivel_funcionario'];
    $nivel_experiencia = $_POST['nivel_experiencia'];

    $funcionario = Funcionario($nome_funcionario, $hora_disponivel_funcionario, $nivel_experiencia);
    $resultado = atribuirTarefa($descricao_tarefa, $total_hora_tarefa, $complexidade_tarefa, $funcionario);
}

function Funcionario($nome, $disponibilidade, $nivel) {
    $data_funcionario = [
        'Junior' => [
            'Tarefa' => [
                'Complexidade' => ['Baixa']
            ],
            'Disponibilidade' => $disponibilidade
        ],
        'Pleno' => [
            'Tarefa' => [
                'Complexidade' => ['Baixa', 'Media']
            ],
            'Disponibilidade' => $disponibilidade
        ],
        'Senior' => [
            'Tarefa' => [
                'Complexidade' => ['Media', 'Baixa']
            ],
            'Disponibilidade' => $disponibilidade
        ]
    ];

    if (array_key_exists($nivel, $data_funcionario)) {
        $data_funcionario[$nivel]['nome'] = $nome;
        return $data_funcionario[$nivel];
    } else {
        return 'Nível de experiência inválido';
    }
}

function atribuirTarefa($tarefa, $tempo_tarefa, $complexidade, $funcionario) {
    if (!is_array($funcionario)) return $funcionario;

    if ($funcionario['Disponibilidade'] < $tempo_tarefa) {
        return 'Funcionário não possui tempo suficiente';
    }

    $nivel = $funcionario['nome'];
    $complexidades_permitidas = $funcionario['Tarefa']['Complexidade'];

    // Check if complexity is allowed for the employee's level
    if (is_array($complexidades_permitidas)) {
        if (in_array($complexidade, $complexidades_permitidas)) {
            return "Tarefa atribuída com sucesso.";
        } else {
            return "Complexidade da tarefa não permitida para o nível do funcionário.";
        }
    } else {
        return "Nível do funcionário inválido.";
    }
}
?>

<form action="Exer4.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa">Nome da Tarefa</label>
            <input type="text" name="nome_tarefa" id="nome_tarefa">
        </div>
        <div class="col">
            <label for="total_hora_tarefa">Hora máxima</label>
            <input type="number" name="total_hora_tarefa" id="total_hora_tarefa">
        </div>
        <div class="col">
            <label for="complexidade_tarefa">Grau de dificuldade</label>
            <input type="text" name="complexidade_tarefa" id="complexidade_tarefa">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="nome_funcionario">Nome do Funcionário: </label>
            <input type="text" name="nome_funcionario" id="nome_funcionario">
        </div>
        <div class="col">
            <label for="hora_disponivel_funcionario">Disponibilidade: </label>
            <input type="number" name="hora_disponivel_funcionario" id="hora_disponivel_funcionario">
        </div>
        <div class="col">
            <label for="nivel_experiencia">Nível de experiência</label>
            <input type="text" name="nivel_experiencia" id="nivel_experiencia">
        </div>
    </div>
    <button type="submit">Atribuir Tarefa</button> <!-- Added submit button -->
</form>

<?php if (isset($resultado)): ?>
    <div class="resultado">
        <?php echo $resultado; ?>
    </div>
<?php endif; ?>

<?php require('rodape.php'); ?>

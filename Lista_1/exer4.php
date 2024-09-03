<?php require_once '..\config.php';

use Config\Config;

Config::get_header();

if ($_POST) {
    // Atribuição dos dados referentes a abertura da tarefa
    $descricao_tarefa = $_POST['nome_tarefa'];
    $tempo_tarefa = (float) $_POST['total_hora_tarefa'];
    $complexidade_tarefa = $_POST['complexidade_tarefa'];

    // Atribuição dos dados do funcionário
    $nome_funcionario = $_POST['nome_funcionario'];
    $hora_disponivel_funcionario = $_POST['hora_disponivel_funcionario'];
    $nivel_experiencia = $_POST['nivel_experiencia'];

    $funcionario = Funcionario($nome_funcionario, $hora_disponivel_funcionario, $nivel_experiencia);
    
    if (!is_array($funcionario)) return $funcionario;

    if ($funcionario['Disponibilidade'] >= $tempo_tarefa * 1.0) {
        if($funcionario['nome']['Junior'] &&  $funcionario['Junior']['Complexidade'] == 'baixa');
        return '<p>Funcionário'. $funcionario['nome'] .' não possui tempo suficiente';
    } 

    $nivel = $funcionario['nome'];
    $complexidades_permitidas = $funcionario['Tarefa']['Complexidade'];

 
}

function Funcionario($nome, $disponibilidade, $nivel) {
    $data_funcionario = [
        'nome' => $nome,
        'Junior' => [
            'Tarefa' => [
                'Complexidade' => ['Baixa'] == $nivel
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

    return $data_funcionario;
}
?>
<h2>Exercicio 4</h2> 
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
<div class="btn-return"><a href="..\main.php"><i class="fa fa-plane" aria-hidden="true"></i>Voltar</a></div>

<?php if (isset($resultado)): ?>
    <div class="resultado">
        <?php echo $resultado; ?>
    </div>
<?php endif; ?>

<?php 

Config::get_footer();?>

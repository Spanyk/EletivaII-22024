<?php require('cabecalho.php');

// const obj_tarefa = {
//     '1' => 'Baixa', 
//     '2' => 'Média',
//     '3' => 'Alta'
// };

// const obj_experiencia_funcionario = {
//   '1' => 'Junior',
//   '2' => 'Pleno',
//   '3' => 'Senior'
// };

if($_POST) {
  // Atribuição dos dados referentes a abertura da tarefa
  $descricao_tarefa = $_POST['nome_tarefa'];
  $total_hora_tarefa = $_POST['total_hora_tarefa'];
  $complexidade_tarefa = $_POST['complexidade_tarefa'];

  // Atribuição dos dados do funcionário
  $nome_funcionario = $_POST['nome_funcionario']; 
  $hora_disponivel_funcionario = $_POST['hora_disponivel_funcionario'];
  $nivel_experiencia = $_POST['nivel_experiencia'];

  $funcionario = Funcionario($nome_funcionario, $hora_disponivel_funcionario, $nivel_experiencia);
  $func_tarefa = atribuirTarefa($descricao_tarefa, $total_hora_tarefa, $complexidade_tarefa, $funcionario);
};
function Funcionario($nome, $disponibilidade, $nivel) {
  const $data_funcionario = {
    'Junior' => {
      'Tarefa' => {
         'Complexidade' => 'Baixa'
      }
    }, 
    'Pleno' => {
      'Tarefa' => {
        'Complexidade' => [
          'Baixa', 
          'Media'
        ]
      }
    },
    'Senior' => {
      'Tarefa' => {
        'Complexidade' => [
        'Media',
        'Baixa'
        ]
      }
    }
  }
// Percorer JSON para validar o nível do funcionario e o grau de complexidade aceito na tarefa
  if ($nivel == $data_funcionario[][])
}

function atribuirTarefa($tarefa, $tempo_tarefa, $complexidade, $funcionario) {

  if ($funcionario[$hora_disponivel_funcionario] < $tempo_tarefa) 

  if ($funcionario[$nivel] == 'Júnior' && $complexidade == 'Baixa') {
    return true; 
  }
  if ($funcionario[$nivel] == 'Pleno' && $complexidade == )
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
      <input type="total_hora_tarefa" name="total_hora_tarefa" id="total_hora_tarefa">
    </div>
    <div class="col">
      <label for="complexidade_tarefa">Grau de dificuldade</label>
      <input type="complexidade_tarefa" name="complexidade_tarefa" id="complexidade_tarega">
    </div>
  </div>
  <div class="row">
  <div class="col">
      <label for="nome_funcionario">Nome do Funcionário: </label>
      <input type="nome_funcionario" name="nome_funcionario" id="nome_funcionario">
    </div>
    <div class="col">
      <label for="hora_disponivel_funcionario">Disponibilidade: </label>
      <input type="hora_disponivel_funcionario" name="hora_disponivel_funcionario" id="hora_disponivel_funcionario">
    </div>
    <div class="col">
      <label for="nivel_experiencia">Nível de nivel_experiencia</label>
      <input type="text" name="nivel_experiencia" id="nivel_experiencia">
    </div>
  </div>
  </div>
</form>


<?php require rodape.php ?>
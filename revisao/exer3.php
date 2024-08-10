<?php 

require("cabecalho.php");
$erro = "Selecione um valor válido";
$resultado = null;
function bonificacaoFuncionario($nome_funcionario, $valor_recebimento, $valor_bonus) {
  $porcentBonificacao = array(
    '1' => 0.1,
    '2' => 0.2,
    '3' => 0.3,
    '4' => 0.5,
    '5' => 0.7
  );
  $bonus = $valor_bonus; 
  foreach($porcentBonificacao as $key=> $index) {
    if($key == $valor_recebimento) {
        $valorBonificado = $bonus * $index;
        $valorBonificado = number_format($valorBonificado, 2, ',', '');
        
        return $valorBonificado;
    }
  }

}

if($_POST) {
  $nome_funcionario =  (string) $_POST['nome_funcionario'];
  $op_valor =  (string) $_POST['op_valor'];
  $valor_bonus = (float) $_POST['valor_bonus'];
  $resultado = bonificacaoFuncionario($nome_funcionario, $op_valor, $valor_bonus);
}

?>

<h1>Exercicio 3 </h1>
<form action="" method="post" class="form-control">

<div class="row m-4">
  <div class="col">
        <label for="nome_funcionario" name="nome_funcionario">Nome do Funcionário: </label>
        <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control" required/>
  </div>
  <div class="col">
    <label for="op_valor" name="op_valor">Selecione um valor</label>
      <select name="op_valor" id="op_valor" class="form-select" aria-label="Small select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
  </div>
  <div class="row p-2">
  <div class="col">
  <label for="valor_bonus" name="valor_bonus">Valor Bonus (R$): </label>
  <input type="number" step="0.10" name="valor_bonus" id="valor_bonus" class="form-control" required/>
  </div>
</div>
</div>

    <div class="d-grid gap-2 col-6 mx-auto m-4">
      <button type="submit" class="btn btn-success">Calcular </button></div>
<div class="row p-5">
    <?php echo '<div class="row"> R$'. $resultado .'</div>'; ?>
</div>
</form>
<?php require("rodape.php"); ?>
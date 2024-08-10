<?php require("cabecalho.php");?>

<h1> Exercício 1 </h1>
<form action="exer1.php" method="POST">
<div class="row">
  <div class="col">
    <label for="hora_entrada"> Hora Entrada</label>
      <input type="time" name="hora_entrada" id="hora_entrada" class="form-control"/>
  </div>
  <div class="col">
    <label> Hora de Saida </label>
    <input type="time" id="hora_saida" name="hora_saida" class="form-control"/>
  </div>
</div>
<div class="row">
  <div class="col">
    <button type="submit" class="btn btn-success m-1">Calcular</button>
  </div>
</div>
</form>
<?php
  if($_POST) {
    $hora_entrada = $_POST['hora_entrada'];
    $hora_saida = $_POST['hora_saida'];

    echo calcularTempo($hora_entrada, $hora_saida); 
  }

  function calcularTempo($hora_entrada, $hora_saida) {
    $hora_entrada = new DateTime($hora_entrada);
    $hora_saida = new Datetime($hora_saida);
    $resultado =  $hora_saida->diff($hora_entrada);
    $resultado = $resultado->format("%H:%M");
    return $resultado;
  }




 require("rodape.php");
?>
<?php 
require_once '..\config.php';

use Config\Config;

Config::get_header();

// Telefone: abstrata, representa o DDD e o número de um telefone, define um método abstrato calculaCusto (da ligação, recebe como parâmetro o tempo da ligacão)  
// • Fixo: derivada de Telefone, também armazena o custo por minuto, e sobrescreve calculaCusto, multiplicando o tempo da ligacão pelo custo do minuto  
// • Celular: abstrata, derivada de Telefone, também armazena o custo do minuto base, e o nome da operadora  
// • PrePago: derivada de Celular, calcula o custo da ligacão aplicando um acréscimo de 40% no custo do minuto base  
// • PosPago: derivada de Celular, calcula o custo da ligacão aplicando um desconto de 10% no custo do minuto base  

abstract class Telefone {
    protected string $DDD;
    protected string $numero;

    public function __construct(string $DDD, string $numero) {
        $this->DDD = $DDD;
        $this->numero = $numero;
    }

    abstract public function calcularCusto(float $tempoDeLigacao): float;

    // Getters e Setters
    public function getDDD(): string {
        return $this->DDD;
    }

    public function setDDD(string $DDD): void {
        $this->DDD = $DDD;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }
}

class Fixo extends Telefone {
    private float $custoMinuto;

    public function __construct(string $DDD, string $numero, float $custoMinuto) {
        parent::__construct($DDD, $numero);
        $this->custoMinuto = $custoMinuto;
    }

    // Getters e Setters
    public function getCustoMinuto(): float {
        return $this->custoMinuto;
    }

    public function setCustoMinuto(float $custoMinuto): void {
        $this->custoMinuto = $custoMinuto;
    }

    public function calcularCusto(float $tempoDeLigacao): float {
        return $this->custoMinuto * $tempoDeLigacao;
    }
}

abstract class Celular extends Telefone {
    protected float $custoMinuto;
    protected string $operadora;

    public function __construct(string $DDD, string $numero, float $custoMinuto, string $operadora) {
        parent::__construct($DDD, $numero);
        $this->custoMinuto = $custoMinuto;
        $this->operadora = $operadora;
    }

    // Getters e Setters
    public function getCustoMinuto(): float {
        return $this->custoMinuto;
    }

    public function setCustoMinuto(float $custoMinuto): void {
        $this->custoMinuto = $custoMinuto;
    }

    public function getOperadora(): string {
        return $this->operadora;
    }

    public function setOperadora(string $operadora): void {
        $this->operadora = $operadora;
    }
}

class PrePago extends Celular {
    public function calcularCusto(float $tempoDeLigacao): float {
        return ($this->custoMinuto * 1.40) * $tempoDeLigacao;
    }
}

class PosPago extends Celular {
    public function calcularCusto(float $tempoDeLigacao): float {
        $valorAtualizado = $this->custoMinuto * 0.90; // 10% de desconto
        return $valorAtualizado * $tempoDeLigacao;
    }
}
$telefoneFixo = new Fixo("11", "12345678", 0.50);
$tempoLigacao = 10; // em minutos
echo "<br>Telefone Fixo: " . $telefoneFixo->getDDD() . " " . $telefoneFixo->getNumero() . " - Custo da ligação: R$ " . number_format($telefoneFixo->calcularCusto($tempoLigacao), 2, ',', '.') . "\n";

// Criando e exibindo um telefone pré-pago
$telefonePrePago = new PrePago("21", "98765432", 0.75, "Operadora A");
echo "<br>Telefone Pré-Pago: " . $telefonePrePago->getDDD() . " " . $telefonePrePago->getNumero() . " - Operadora: " . $telefonePrePago->getOperadora() . " - Custo da ligação: R$ " . number_format($telefonePrePago->calcularCusto($tempoLigacao), 2, ',', '.') . "\n";

// Criando e exibindo um telefone pós-pago
$telefonePosPago = new PosPago("31", "11223344", 0.60, "Operadora B");
echo "<br>Telefone Pós-Pago: " . $telefonePosPago->getDDD() . " " . $telefonePosPago->getNumero() . " - Operadora: " . $telefonePosPago->getOperadora() . " - Custo da ligação: R$ " . number_format($telefonePosPago->calcularCusto($tempoLigacao), 2, ',', '.') . "\n";

?>

<div class="mt-3">
  <a href="../main.php" class="btn btn-secondary">
    <i class="fas fa-arrow-left me-2"></i>Voltar
  </a>
</div>

<?php 

Config::get_footer();
?>
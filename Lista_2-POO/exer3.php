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
}

class Fixo extends Telefone {
    private float $custoMinuto;

    public function __construct(string $DDD, string $numero, float $custoMinuto) {
        parent::__construct($DDD, $numero);
        $this->custoMinuto = $custoMinuto;
    }

    public function getCustoMinuto(): float {
        return $this->custoMinuto;
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
?>

<div class="btn-return"><a href="..\main.php"><i class="fa fa-plane" aria-hidden="true"></i>Voltar</a></div>


<?php 

Config::get_footer();
?>
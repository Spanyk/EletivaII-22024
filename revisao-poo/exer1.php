<?php
require_once '..\config.php';

use Config\Config;

Config::get_header();

class Ponto
{
    private $x;
    private $y;
    private static $count = 0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        self::$count++;
    }

    public function setX($x): void
    {
        $this->x = $x;
    }

    public function getX(): int
    {
        return $this->y;
    }

    public function setY($y): void
    {
        $this->y = $y;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getCount(): int {
        return self::$count;
    }

    public function distanciaEntrePontos(Ponto $outroPonto) {
        $dx = $this->x - $outroPonto->x;
        $dy = $this->y - $outroPonto->y;
        return sqrt(pow($dx,2) + pow($dy,2));
    }

    public static function distanciaEntreDoisPontos($x1, $y1, $x2, $y2) {
        $dx = $x1 - $x2;
        $dy = $y1 - $y2;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
}


$p1 = new Ponto(1,10);
$p2 = new Ponto(15,5);
$p3 = new Ponto(7, 27);

$distanciaEntrePontos = $p1->distanciaEntrePontos($p2);
$distanciaEntreDoisPontos = $p1->distanciaEntreDoisPontos($p1->getX() ,$p1->getY(), $p2->getX() , $p2->getY());

echo "<br> Ponto 1: x: ". $p1->getX() . " / "." y : ". $p1->getY();
echo "<br> Ponto 2: x: ". $p2->getX() . " / "." y : ". $p2->getY();
echo "<br> Ponto 3: x: ". $p3->getX() . " / "." y : ". $p3->getY();
echo " <br><br> ------------------------------------------------------- <br>";
echo "<br> Distancia entre ponto 1 ao ponto 2: ". $distanciaEntrePontos;
echo "<br> Distancia entre dois Pontos [Ponto 1 e Ponto 3] ". $distanciaEntreDoisPontos;
echo "<br>Contador de pontos: ". $p3->getCount();



?>
<div class="mt-3">
  <a href="../main.php" class="btn btn-secondary">
    <i class="fas fa-arrow-left me-2"></i>Voltar
  </a>
</div>

<?php 
Config::get_footer();
?>
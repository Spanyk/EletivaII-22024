<?php 
require_once 'config.php';

use Config\Config;

Config::get_header();

?>

<div class="row">
    <div class="col p-2">
        <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card testimonial-card mt-2 mb-3">
                <div class="card-up aqua-gradient"></div>

                <div class="card-body text-center">
                    <h4 class="card-title font-weight-bold">Lista 1 - Revisão</h4>
                    <hr>
                    <p>
                    <ol class="list-group list-group-light ">
                        <li class="list-group-item"><a href="revisao\exer1.php?">Exercicio 1</a></li>
                        <li class="list-group-item"><a href="revisao\exer2.php">Exercicio 2</a></li>
                        <li class="list-group-item"><a href="revisao\exer3.php">Exercicio 3</a></li>
                        <li class="list-group-item"><a href="revisao\exer4.php">Exercicio 4</a></li>
                        <li class="list-group-item"><a href="revisao\exer5.php">Exercicio 5</a></li>
                        <li class="list-group-item"><a href="revisao\exer6.php">Exercicio 6</a></li>
                        <li class="list-group-item"><a href="revisao\exer7.php">Exercicio 7</a></li>
                    </ol>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <div class="col p-2">
        <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card testimonial-card mt-2 mb-3">
                <div class="card-up aqua-gradient"></div>

                <div class="card-body text-center">
                    <h4 class="card-title font-weight-bold">Lista 2 - PHP + POO </h4>
                    <hr>
                    <p>
                    <ol class="list-group list-group-light ">
                        <li class="list-group-item"><a href="revisao-poo\exer1.php">Exercicio 1 </a></li>
                        <li class="list-group-item"><a href="revisao-poo\exer2.php">Exercicio 2 </a></li>
                        <li class="list-group-item"><a href="revisao-poo\exer3.php">Exercicio 3 </a></li>
                   
                    </ol>
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>


<?php 

Config::get_footer();

?>
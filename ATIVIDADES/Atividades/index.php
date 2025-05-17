<?php //inicio php
$nome = "Bruno";
$sobrenome = "Silva";
$idade = 31;

$valor1 = 10;
$valor2 = 20;
$valor3 = 30;


$verificarNumero = -5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <h2>Atividades a fazer</h2>
<h2>Olá <?php echo $nome; ?>, seja bem-vindo às Atividades</h2>

<p>
    <h4>A atividade 1 ja foi concluida no titulo acima</h4>
    <p>A atividade era declarar uma variável atribuido ao meu nome  e exibir o conteúdo</p>
</p>

<p>
    <h4> A segunda atividade é declarar três variáveis e exibir a soma.</h4>
    <br> Estas variáveis são:
    <br> valor1 = <?php echo $valor1 ?>;
    <br> valor2 =  <?php echo $valor2 ?>;
    <br> valor3 =  <?php echo $valor3 ?>;
    <br> A soma é: <?php echo $valor1 + $valor2  + $valor3; ?>
</p>

<p>
    <h4> A terceira atividade é concatenar duas variáveis com espaço.</h4>
    <br> As variáveis são:
    <br> <?php echo $nome ?>;
    <br> <?php echo $sobrenome?>;
    <br> A concatenação é: <?php echo $nome . " " . $sobrenome; ?>
</p>

<p>
    <h4>A quarta atividade é interpolação de variáveis.</h3>
    <br> As variáveis são:
    <br> $nome = "Bruno Silva";
    <br> $idade = 25;
    <br> A interpolação é: <?php echo "Meu nome é $nome $sobrenome e eu tenho $idade anos."; ?>
</p>

<p>

    <h4> A quinta atividade é verificar se uma variável é positiva.</h4>
    <br> A variável é: <?php echo '$verificarNumero' . " que foi atribuido o valor " . "[" . $verificarNumero ."]"  ?>;
    <br> A verificação é:   <?php 
                                if ($verificarNumero > 0) { echo "Positivo"; } 
                                else { echo "Negativo"; } 
                            ?>
</p>

<p>
    <h4> A sexta atividade é verificar se uma variável é par ou impar.</h4>
    <br> A variável é: <?php echo '$verificarNumero' . " que foi atribuido o valor " . "[" . $verificarNumero ."]"  ?>;
    <br> A verificação é:   <?php 
                                if ($verificarNumero % 2 == 0) { echo "Par"; 
                                    if ($verificarNumero > 0) { echo "Positivo"; }
                                    else {  echo "Negativo"; }
                                }
                                else { echo "Impar"; 
                                    if ($verificarNumero > 0) { echo "Positivo"; }
                                        else {  echo "Negativo"; }
                                }
                            ?>

                        <?php 
                                if ($verificarNumero % 2 == 0) { 
                                    echo "Par"; 
                                    if ($verificarNumero > 0) { 
                                        echo "Positivo"; 
                                    } else {  
                                        echo "Negativo"; 
                                    }
                                } else { 
                                    echo "Impar"; 
                                    if ($verificarNumero > 0) { 
                                        echo "Positivo"; 
                                    } else {  
                                        echo "Negativo"; 
                                    }
                                } 
                                    
                            ?>
</body>
</html>



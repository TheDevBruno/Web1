<?php
// 1. Declare uma variável $nome e exiba seu conteúdo
$nome = "Bruno Silva";
echo $nome . "<br>";

// 2. Declare três variáveis $a, $b e $c e exiba a soma
$a = 10;
$b = 20;
$c = 30;
echo "Soma: " . ($a + $b + $c) . "<br>";

// 3. Concatene $primeiro e $segundo com espaço
$primeiro = "Olá";
$segundo = "Mundo";
echo $primeiro . " " . $segundo . "<br>";

// 4. Interpolação de variáveis
$idade = 25;
echo "Meu nome é $nome e eu tenho $idade anos.<br>";

// 5. Verifique se $num é positivo
$num = -5;
if ($num > 0) {
    echo "Positivo<br>";
}

// 6. Par ou ímpar
$n = 8;
if ($n % 2 == 0) {
    echo "$n é par<br>";
} else {
    echo "$n é ímpar<br>";
}

// 7. Classificação de idade
$idade = 17;
if ($idade >= 0 && $idade <= 12) {
    echo "Criança<br>";
} elseif ($idade >= 13 && $idade <= 17) {
    echo "Adolescente<br>";
} else {
    echo "Adulto<br>";
}

// 8. Autenticação simples
$login = "admin";
$senha = "1234";
if ($login == "admin" && $senha == "1234") {
    echo "Bem-vindo<br>";
} else {
    echo "Acesso negado<br>";
}

// 9. For de 1 a 5
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// 10. Tabela de multiplicação de 1 a 3
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
}

// 11. Variável booleana $ativo
$ativo = true;
echo $ativo ? "Ativo<br>" : "Inativo<br>";

// 12. Comparação '5' == 5 e '5' === 5
echo ('5' == 5) ? "'5' == 5: Igual<br>" : "'5' == 5: Não igual<br>";
echo ('5' === 5) ? "'5' === 5: Igual<br>" : "'5' === 5: Não igual<br>";

// 13. If para exibir “A”
$a = 12;
$b = 3;
$c = 7;
if ($a > 10 && $b < 5 && $c == 7) {
    echo "A<br>";
}

// 14. For decrescente de 10 a 1
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}

// 15. Sequência de Fibonacci (10 termos)
$fib = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
echo implode(", ", $fib) . "<br>";

// 16. Verifique se $valor está definida e não é nula
if (!isset($valor) || is_null($valor)) {
    $valor = 50;
}
echo $valor . "<br>";

// 17. Calcule total de $preco * $quantidade
$preco = "100";
$quantidade = 3;
$total = (float)$preco * $quantidade;
echo "Total: $total<br>";

// 18. For de 1 a 10, break ao encontrar 5
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo $i . "<br>";
}

// 19. For de 1 a 10, continue nos múltiplos de 2
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) continue;
    echo $i . "<br>";
}

// 20. While soma de 1 até 10
$soma = 0;
$i = 1;
while ($i <= 10) {
    $soma += $i;
    $i++;
}
echo "Soma: $soma<br>";

// 21. Operador ternário maioridade
$idade = 20;
echo ($idade >= 18) ? "Maior de idade<br>" : "Menor de idade<br>";

// 22. Switch dia da semana
$dia = 3;
switch ($dia) {
    case 1: echo "Domingo<br>"; break;
    case 2: echo "Segunda-feira<br>"; break;
    case 3: echo "Terça-feira<br>"; break;
    case 4: echo "Quarta-feira<br>"; break;
    case 5: echo "Quinta-feira<br>"; break;
    case 6: echo "Sexta-feira<br>"; break;
    case 7: echo "Sábado<br>"; break;
    default: echo "Dia inválido<br>";
}

// 23. Defina constante SITE
define("SITE", "www.exemplo.com");
echo SITE . "<br>";

// 24. Variável variável
$a = "b";
$b = "PHP";
echo $$a . "<br>";

// 25. Coalescência nula com $_GET['user']
echo $_GET['user'] ?? "visitante" . "<br>";

// 26. settype e gettype
$str = "123";
settype($str, "integer");
echo gettype($str) . "<br>";

// 27. Coalescência nula em cadeia
$a = null;
$b = null;
$c = 'OK';
echo $a ?? $b ?? $c . "<br>";
?>


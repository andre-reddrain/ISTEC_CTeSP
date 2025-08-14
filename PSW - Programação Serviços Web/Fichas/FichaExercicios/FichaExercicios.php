<?php
/*
 * Para mais, fazer o menu scrollable, e dar fix no aspeto visual (fazer com que o botão/li ocupe o espaço todo do elemento, mantendo o padding.
 */
$exercicios = [
    '1) Dobro',
    '2) Paridade',
    '3) Soma N',
    '4) Soma Positivos (-1)',
    '5) Inverter Nº (100-999)',
    '6) Inverter Nº',
    '7) Digito Controle (100-999)',
    '8) 3 Nºs Ascendente',
    '9) Salário Líquido',
    '10) Nº decimal para binário',
    '11) Soma, Média, Máx e Min',
    '12) Nº Capícua',
    '13) Fatorial Nº',
    '14) Fatorial Nº (Recursivo)',
    '15) Potência de expoente (int)',
    '16) Máximo Divisor comum',
    '17) Máquina Selos',
    '18) Máquina Selos V2',
    '19) Nº Primo',
    '20) Nº Primos (N)',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $opcao = htmlspecialchars($_POST['opcao']);
     $input = $_POST["txtinput"];

    if (isset($input)) {
        $key = array_search($opcao, $exercicios);

        // Debug Zone
        // var_dump($_POST);
        // echo 'OPCAO: ' . $opcao . '<br>';
        // echo 'INPUT: ' . $input . '<br>';
        // echo 'KEY: ' . $key;

        switch ($key) {
            case 0: $res = dobro($input); break;
            case 1: $res = paridade($input); break;
            case 2: $res = somaInteiros($input); break;
            case 3: $res = somaPositivos($input); break;
            case 4:
            case 5:
                $res = inverterAlgarismos($input, $key); break;
            case 6: $res = digitoControle($input); break;
            case 7: $res = nAscendente($input); break;
            case 8: $res = salarioLiquido($input) . "€"; break;
            case 9: $res = decimalToBinary($input); break;
            case 10: $res = somaMediaMaxMin($input); break;
            case 11: $res = isCapicua($input); break;
            case 12: $res = fatorial($input); break;
            case 13: $res = fatorialRecursive($input); break;
            case 14: $res = potenciaExpoente($input); break;

            //TODO
            case 15: $res = maxDivisorComum($input); break;
            case 16: $res = maquinaSelos($input); break;
            case 17: $res = maquinaSelosv2($input); break;
            case 18: $res = nPrimo($input); break;
            case 19: $res = nPrimos($input); break;
            default:
                break;
        }
    } else echo 'GET';
}

function clearMultipleInputs($string) {
    // Separates the multiple inputs with ';'
    $res = explode(';', $string);

    // Filters the array to not include empty strings. Ex(;;;) will return a empty array
    return array_filter($res, function($v) { return $v !== ''; });
}

function dobro($val) {
    return intval($val) * 2;
}

function paridade($val) : string {
    return intval($val) % 2 == 0 ? "$val : Par" : "$val: Impar";
}

function somaInteiros($val) : int {
    $soma = 0;

    while($val > 0) {
        $soma += $val;
        $val--;
    }

    return $soma;
}

function somaPositivos($val) {
    $res = clearMultipleInputs($val);

    $end = array_filter($res, function($v) { return $v == '-1'; });

    if(count($end) !== 1) return "Erro! Tem que haver só um -1";
    if($res[count($res) - 1] !== '-1') return "Erro! -1 tem que estar no fim";
    return array_sum($res) + 1;
}

function inverterAlgarismos($val, $key) : string {
    if ($key == 4 && ($val <= 100 || $val >= 999)) return 'Erro';
    if ($key == 5 && $val < 0) return 'Erro';

    // $u = $val % 10;
    // $d = ($val / 10) % 10;
    // $c = $val / 100;

    // return $u * 100 + $d * 10 + $c;

    $string = strval($val);
    return strrev($string);
    //return $string[2] . $string[1] . $string[0];
}

function digitoControle($val) {
    if ($val >= 100 && $val <= 999) {
        // dc= (5*algarismo das unidades + 3 * algarismos das dezenas + centenas)%7;
        $res = (5 * $val[2] + 3 * $val[1] + $val[0]) % 7;
//        echo $res;
        return $res;
    } else return 'Erro';
}

function nAscendente($val) : string {
    $res = clearMultipleInputs($val);

    if (count($res) != 3) return 'Erro';
    sort($res);
    return $res[0] . " - " . $res[1] . " - " . $res[2];
}

function salarioLiquido($val) : string {
    $res = intval($val);

    if ($res < 1000) return $res - ($res * 0.10);
    elseif ($res < 1500) return $res - ($res * 0.15);
    elseif ($res < 2000) return $res - ($res * 0.20);
    else return $res - ($res * 0.30);
}

function decimalToBinary($val) : string {
    return decbin(floatval($val));
}

function somaMediaMaxMin($val) : string {
    $res = clearMultipleInputs($val);

    $soma = array_sum($res);
    $media = $soma / count($res);
    $max = max($res);
    $min = min($res);

    return "Soma: " . $soma . " / Média: " . $media . " / Máximo: " . $max . " / Mínimo: " . $min;
}

function isCapicua($val) : string {
    if (intval($val) == 0) return 'Erro! Não é um número';

    return $val == intval(strrev($val)) ? $val . " - Capícua" : $val . " - Não é capícua";
}

function fatorial($val) : string {
    $val = intval($val);

    if ($val == 0) return 'Erro! Não é um número';

    $res = "Fatorial " . $val . ": " . $val . " * ";

    $fac = 5;
    for ($i = $fac - 1; $i >= 1; $i--) {
        $fac *= $i;

        if ($i == 1) $res .= $i;
        else $res .= $i . " * ";
    }

    return $res . " = " . $fac;
}

function fatorialRecursive($val) : string {
    $val = intval($val);

    if ($val == 0) return 'Erro! Não é um número';

    if ($val < 2) return 1;
    else return ($val * fatorialRecursive($val - 1));
}

function potenciaExpoente($val) : string {
    $res = clearMultipleInputs($val);

    if (count($res) != 2) return 'Erro! Números demais';
    $base = $res[0];
    $expoente = $res[1];

    return "$base ^ $expoente: " . pow($base, $expoente);
}

function nPrimo($val) : string {
    $num = intval($val);
    if ($num == 0) return 'Erro! Não é um número';

    if ($num <= 1) {
        return "$num: Não é primo";
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return "$num Não é primo";
        }
    }

    return "$num é primo";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ficha de Exercícios</title>
    <link href="../../bootstrap-5.3.7-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<form action="FichaExercicios.php" method="post" enctype="application/x-www-form-urlencoded">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-0">
                <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 min-vh-100 bg-light">
                    <ul class="nav flex-column mb-sm-auto align-items-center" id="menu">
                        <?php for ($i = 0; $i <= 19; $i++): ?>
                            <li class="nav-item">
                                <input type="button" name="bt" value="<?= $exercicios[$i]?>" id="<?= $i?>" class="btn btn-dark m-1">
                            <li>
                        <?php endfor; ?>
                </div>
            </div>
            <div id="form-div" class="col py-3">
                <h1 id="title">Formulário</h1>
                <div class="form-group">
                    <pre style="font-family: Arial,serif" id="descricao">Breve descrição do exercício!</pre>
                    <input type="text" required name="txtinput" class="form-control" id="txtinput" placeholder="Input">
                </div>
                <br>
                <h3>Resposta</h3>
                <div class="form-group p-2" id="res" style="border: 1px black solid">
                    <?php if(isset($res)) echo $res;?>
                </div>
                <br>
                <input id="post_key" name="opcao" type="hidden">
                <input id="submit" type="submit" value="Calcular" class="btn btn-primary" disabled>
            </div>

        </div>
    </div>
</form>

<script type="application/javascript">
    const title = document.getElementById('title');
    const descricao = document.getElementById('descricao');
    const input = document.getElementById('txtinput');
    const btns = document.getElementsByName("bt");
    const postKey = document.getElementById('post_key');

    function changeDOM(btn, value) {
        // Remove btn-success class if another button is pressed
        btns.forEach(b => {
            if (b.defaultValue !== value) {
                b.setAttribute("class", "btn btn-dark m-1");
            }
        })
        postKey.setAttribute('value', value);
        switch (value) {
            case '1) Dobro':
                title.innerText = 'Exercício 1 - Dobro';
                descricao.innerHTML = 'Calcular o Dobro de um número.';
                input.placeholder = 'Insira um nº';

                break;
            case '2) Paridade':
                title.innerHTML = 'Exercício 2 - Paridade';
                descricao.innerHTML = 'Calcular se um nº é par ou ímpar.';
                input.placeholder = 'Insira um nº';
                break;
            case '3) Soma N':
                title.innerText = 'Exercício 3 - Soma N';
                descricao.innerHTML = 'Calcular a soma dos N primeiros números inteiros.'
                input.placeholder = 'Insira um nº';
                break;
            case '4) Soma Positivos (-1)':
                title.innerText = 'Exercício 4 - Soma Positivos';
                descricao.innerHTML = 'Calcular a soma de números positivos. A finalização é feita através da introdução do número -1. <br> <b>Nota</b>: Separar todos os números por \';\' (ex: 1;2;3;-1).';
                input.placeholder = 'Insira números, separados por \';\' (ex: 1;2;3;-1)';
                break;
            case '5) Inverter Nº (100-999)':
                title.innerText = 'Exercício 5 - Inverter Nº (100-999)';
                descricao.innerHTML = 'Inverte os algarismos de um número compreendido entre 100 e 999.';
                input.placeholder = 'Insira um nº, de 100 a 999';
                break;
            case '6) Inverter Nº':
                title.innerText = 'Exercício 6 - Inverter Nº';
                descricao.innerHTML = 'Inverte os algarismos de qualquer número positivo.';
                input.placeholder = 'Insira um nº positivo';
                break;
            case '7) Digito Controle (100-999)':
                title.innerText = 'Exercício 7 - Dígito Controle (100-999)';
                descricao.innerHTML = 'Associar a um número de 3 algarismos o respetivo dígito de controle.';
                input.placeholder = 'Insira um nº, de 100 a 999';
                break;
            case '8) 3 Nºs Ascendente':
                title.innerText = 'Exercício 8 - 3 Nºs aleatórios por ordem ascendente';
                descricao.innerHTML = 'Receber 3 números aleatórios e lista-os por ordem ascendente. <br><b>Nota</b>: Separar todos os números por \';\' (ex: 1;2;3)';
                input.placeholder = 'Insira 3 números, separados por \';\' (ex: 1;2;3)';
                break;
            case '9) Salário Líquido':
                title.innerText = 'Exercício 9 - Calcular Salário Líquido';
                descricao.innerHTML = 'Calcular o salário líquido correspondente a um salário bruto, ao qual é aplicada a seguinte tabela de iva:' +
                    '<table class="table table-sm"><thead><tr><th>Salário</th><th>Iva (%)</th></tr></thead><tbody><tr><td>[..., 1000[</td><td>10%</td></tr><tr><td>[1000...1500[</td><td>15%</td></tr><tr><td>[1500...2000[</td><td>20%</td></tr><tr><td>[2000...</td><td>30%</td></tr></tbody></table>';
                input.placeholder = 'Inserir Salário Bruto';
                break;
            case '10) Nº decimal para binário':
                title.innerText = 'Exercício 10 - Nº decimal para binário';
                descricao.innerHTML = 'Converter um número decimal para binário';
                input.placeholder = 'Inserir nº decimal';
                break;
            case '11) Soma, Média, Máx e Min':
                title.innerText = 'Exercício 11 - Soma, Média, Máximo e Mínimo de N';
                descricao.innerHTML = 'Receber nºs inteiros e devolver a sua soma, média, máximo e mínimo. <br><b>Nota</b>: Separar todos os números por \';\' (ex: 1;2;3)';
                input.placeholder = 'Insira N números, separados po \';\' (ex: 1;2;3)';
                break;
            case '12) Nº Capícua':
                title.innerText = 'Exercício 12 - Nº Capicua';
                descricao.innerHTML = 'Verificar se um número é capicua (número com o mesmo valor quando lido nos dois sentidos. Ex; 12321).';
                input.placeholder = 'Insira um nº';
                break;
            case '13) Fatorial Nº':
                title.innerText = 'Exercício 13 - Fatorial Nº';
                descricao.innerHTML = 'Calcular o fatorial de um número.';
                input.placeholder = 'Insira um nº';
                break;
            case '14) Fatorial Nº (Recursivo)':
                title.innerText = 'Exercício 14 - Fatorial Nº (Recursivo)';
                descricao.innerHTML = 'Calcular o fatorial de um número, usando recursão.';
                input.placeholder = 'Insira um nº';
                break;
            case '15) Potência de expoente (int)':
                title.innerText = 'Exercício 15 - Potência de um expoente inteiro';
                descricao.innerHTML = 'Calcular uma potência de expoente inteiro. <br><b>Nota</b>: Separar a base e o expoente por \';\' (ex: 5;2)';
                input.placeholder = 'Insira uma base e um expoente, separados por \';\' (ex: 5;2)';
                break;
            case '16) Máximo Divisor comum':
                title.innerText = 'Exercício 16 - Máximo Divisor comum entre 2 números';
                descricao.innerHTML = 'Calcular o máximo divisor comum entre 2 números. <br><b>Nota</b>: Separar os dois números por \';\' (ex: 2;4)';
                input.placeholder = 'Insira dois números, separados por \';\' (ex: 2;4)';
                break;
            case '17) Máquina Selos':
                title.innerText = 'Exercício 17 - Máquina de Selos';
                descricao.innerHTML = 'Uma máquina de devolução de selos. Aceita uma quantidade superior a 8 euros e devolve a totalidade em selos de 3 e 5 euros.';
                input.placeholder = 'Insira um nº';
                break;
            case '18) Máquina Selos V2':
                title.innerText = 'Exercício 18 - Máquina Selos V2';
                descricao.innerHTML = 'Máquina de selos, mas as quantidades devolvidas são o mais homogéneas possível.';
                input.placeholder = 'Insira um nº';
                break;
            case '19) Nº Primo':
                title.innerText = 'Exercício 19 - Número Primo';
                descricao.innerHTML = 'Calcula se um número é primo ou não.';
                input.placeholder = 'Insira um nº';
                break;
            case '20) Nº Primos (N)':
                title.innerText = 'Exercício 20 - Números primos de N';
                descricao.innerHTML = 'Devolve os N primeiros números primos.';
                input.placeholder = 'Insira um nº';
                break;
        }
    }

    var submit = document.getElementById("submit");

    // Event Listener
    btns.forEach(btn => {
        btn.addEventListener("click", e => {
            submit.disabled = false;
            changeDOM(btn, btn.defaultValue);
            btn.setAttribute("class", "btn btn-success m-1");
        })
    })
</script>
</body>
</html>


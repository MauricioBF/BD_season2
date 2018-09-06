<?php
// 1)Crie uma função que receba um peso na Terra e o número de um planeta e imprima o valor do seu peso neste planeta. A relação de planetas é dada a seguir juntamente com o valor das gravidades relativas à Terra:
// 0,37 Mercúrio
// 0,88 Vênus
// 0,38 Marte
// 2,64 Júpiter 
// 1,15 Saturno
// 1,17 Urano

    function Massa($planeta, $gravidade){
        switch ($gravidade){
            case 1: 
                echo $planeta * 0.37;
                break;
            case 2:
                echo $planeta * 0.88;
                break;
            case 3:
                echo $planeta * 0.38;
                break;
            case 4:
                echo $planeta * 2.64;
                break;
            case 5:
                echo $planeta * 1.15;
                break;
            case 6:
                echo $planeta * 1.17;
                break;
        };
    };
?>
<?php
// 2)Faça uma função que receba como parâmetro  um  vetor, cada elemento do  vetor será  um  novo  vetor com  informações  pertinentes  a  uma  pessoa  (índices:  "nome",  "altura"  e  "crescimento_anual"). A função  deve  retornar  quantos  anos  a  pessoa  mais  baixa  ultrapassará  a  mais  alta,  caso  isso  seja impossível deve retornar -1. Exemplo: Chico tem 1,50 metro e cresce 2 centímetros por ano, enquanto Zé tem 1,10 metro e cresce 4 centímetros por ano. A função retorna 21 anos.

    function Indice($dados1, $dados2){
        $nome1= $dados1["nome"];
        $altura1= $dados1["altura"];
        $taxa1= $dados1["crescimento_anual"];
        $nome2= $dados2["nome"];
        $altura2= $dados2["altura"];
        $taxa2= $dados2["crescimento_anual"];
        if (altura1 > altura2){
            $anos=($altura1-$altura2)/($taxa2-$taxa1);
        };
        if (altura1 < altura2){
            $anos=($altura2-$altura1)/($taxa1-$taxa2);
        };
        if ((altura1 == altura2)||($taxa1 == $taxa2)){
            $anos= -1;
        };
    return ($anos);
    };
//Fazer casos de teste
?>
<?php
// 3)Função fatorial que retorne o fatorial de um número passado como parâmetro

    function Fatorial($numero){
        while ($numero > 0){
            $fatorial= 1;
            $fatorial*= $numero;
            $numero--;
        };
        return $fatorial;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My page</title>
</head>
<body>
    <p>
        <?php
        //Fazer mais casos de teste
        Massa (200, 5);
        ?>
    </p>
</body>
</html>
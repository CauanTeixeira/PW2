<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    background-color: #273747;
    background-size: cover;
    }
    div {
    background-color: rgba(255,255,255,.8);
    margin: 100px auto 100px auto;
    padding: 10px;
    width: 550px;
    min-height:300px;
    }
    </style>
</head>
<body>
    <div>
        <?php
            $funcionários = [
                ['nome' => 'João da Silva', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6000],
                ['nome' => 'Maria da Silva', 'genero' => 'F', 'area' => 'marketing', 'salario' => 3000],
                ['nome' => 'Beltrano da Silva', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 4000],
                ['nome' => 'Ciclano Pereira', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 4000],
                ['nome' => 'Fulana Oliveira', 'genero' => 'F', 'area' => 'contabilidade', 'salario' => 2000],
                ['nome' => 'Jão Silveira', 'genero' => 'M', 'area' => 'marketing', 'salario' => 4000],
                ['nome' => 'Cirilo Ferreira', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 3000],
                ['nome' => 'Zé das Couve', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 5000],
                ['nome' => 'Pedro Pedrada', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 2000],
                ['nome' => 'Paulo Paulada', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
                ['nome' => 'Creuza Reis', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 1500],
                ['nome' => 'Yarley Ground', 'genero' => 'M', 'area' => 'financeiro', 'salario' => 3000],
                ['nome' => 'Billy Bill', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
                ['nome' => 'Brian Brioche', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 7000],
                ['nome' => 'Mary Mariana', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 2000],
            ];
            $Maior = 0;
            $fem_contabilidade = 0;
            $fem_engenharia = 0;
            $fem_financeiro = 0;
            $fem_marketing = 0;
            $maiorarea = "";
            $menorarea = "";
            $sal_contabilidade = 1;
            $qtd_contabilidade = 1;
            $sal_marketing = 1;
            $qtd_marketing = 1;
            $sal_engenharia = 1;
            $qtd_financeiro = 1;
            $sal_financeiro = 1;
            $qtd_financeiro = 1;
            $res_financeiro = 0;
            $res_contabilidade = 0;
            $res_engenharia = 0;
            $res_marketing = 0;
            $salario_fem = 0;
            $salario_masc = 0;
            $maior_salario ="";
            foreach ($funcionários as $funcionario) { 
                if ($funcionario['salario'] > $Maior) {
                    $Maior = $funcionario['salario'];
                }; if ($funcionario['genero']=='F' && $funcionario['area']=='engenharia'){
                    $fem_engenharia+=1;
                }; if ($funcionario['genero']=='F' && $funcionario['area']=='financeiro'){
                    $fem_financeiro+=1;
                }; if ($funcionario['genero']=='F' && $funcionario['area']=='contabilidade'){
                    $fem_contabilidade+=1;
                }; if ($funcionario['genero']=='F' && $funcionario['area']=='marketing'){
                    $fem_marketing+=1;

                };
                //mais mulheres
                if ($fem_contabilidade > $fem_engenharia) {
                    if ($fem_contabilidade > $fem_financeiro){
                        if ($fem_contabilidade > $fem_marketing){
                            $maiorarea = "contabilidade";
                        };
                    };
                }; 
                if ($fem_engenharia > $fem_financeiro){
                    if ($fem_engenharia > $fem_marketing){
                        if ($fem_engenharia > $fem_contabilidade){
                            $maiorarea = "engenharia";
                        };
                    };
                }; 
                if ($fem_financeiro > $fem_marketing){
                    if($fem_financeiro > $fem_contabilidade){
                        if($fem_financeiro > $fem_engenharia){
                            $maiorarea = "financeiro";
                        };
                    };
                }; 
                if ($fem_marketing > $fem_contabilidade){
                    if($fem_marketing > $fem_financeiro){
                        if($fem_marketing > $fem_engenharia){
                            $maiorarea = "marketing";
                        };
                    };
                };
                // Menos mulheres
                if ($fem_contabilidade < $fem_engenharia) {
                    if ($fem_contabilidade < $fem_financeiro){
                        if ($fem_contabilidade < $fem_marketing){
                            $menorarea = "contabilidade";
                        };
                    };
                }; 
                if ($fem_engenharia < $fem_financeiro){
                    if ($fem_engenharia < $fem_marketing){
                        if ($fem_engenharia < $fem_contabilidade){
                            $menorarea = "engenharia";
                        };
                    };
                }; 
                if ($fem_financeiro < $fem_marketing){
                    if($fem_financeiro < $fem_contabilidade){
                        if($fem_financeiro < $fem_engenharia){
                            $menorarea = "financeiro";
                        };
                    };
                }; 
                if ($fem_marketing < $fem_contabilidade){
                    if($fem_marketing < $fem_financeiro){
                        if($fem_marketing < $fem_engenharia){
                            $menorarea = "marketing";
                        };
                    };
                };
                // foreach ($funcionario['area'] as $area) {
                //     foreach ($funcionario['salario'] as $salario)
                //         if 
                // }
                if ($funcionario['area'] == 'contabilidade' ){
                    $sal_contabilidade += $funcionario['salario'];
                    $qtd_contabilidade +=1;
                };
                if ($funcionario['area']=='financeiro'){
                    $sal_financeiro += $funcionario['salario'];
                    $qtd_financeiro +=1;
                };
                if ($funcionario['area'] == 'engenharia'){
                    $sal_engenharia += $funcionario['salario'];
                    $qtd_financeiro +=1;
                };
                if ($funcionario['area'] == 'marketing'){
                    $sal_marketing += $funcionario['salario'];
                    $qtd_marketing +=1;
                };
                $res_contabilidade = $sal_contabilidade/$qtd_contabilidade;
                $res_engenharia = $sal_engenharia/$qtd_financeiro;
                $res_financeiro = $sal_financeiro/$qtd_financeiro;
                $res_marketing = $sal_marketing/$qtd_marketing;
                if($funcionario['genero'] == 'F'){
                    $salario_fem += $funcionario['salario'] ;
                };
                if($funcionario['genero'] == 'M'){
                    $salario_masc += $funcionario['salario'] ;
                };
                if ($salario_fem > $salario_masc){
                    $maior_salario = " as mulheres";
                } else {
                    $maior_salario = " os homens";
                };
            };
            echo "o maior salario da empresa é o de: ".$Maior."</br></br>";
            echo "a media do salario da contabilidade é de: ".$res_contabilidade."</br>";
            echo "a media do salario da engenharia é de: ".$res_engenharia."</br>";
            echo "a media do salario do financeiro  é de: ".$res_financeiro."</br>";
            echo "a media do salario do marketing é de: ".$res_marketing."</br></br>";
            echo "a area com o maior numero de mulheres é: ".$maiorarea."</br>";
            echo "a area com o menor numero de mulheres é: ".$menorarea."</br></br>";
            echo "o financeiro tem ".$fem_financeiro." mulheres trabalhando</br>";
            echo "a contabilidade tem ".$fem_contabilidade." mulheres trabalhando</br>";
            echo "o engenharia tem ".$fem_engenharia." mulheres trabalhando</br>";
            echo "o marketing tem ".$fem_marketing." mulheres trabalhando</br></br>";
            echo "os homens ganham R$: ".$salario_masc."</br>";
            echo "as mulheres ganham R$: ".$salario_fem. "</br>";
            echo "quem recebe mais são:".$maior_salario."</br>";

            ?>
    </div>
</body>
</html>
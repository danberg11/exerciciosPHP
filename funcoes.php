<?php
    $num1 = 0; //Instanciar uma variável
    $num2 = 0;
    $num3 = 0;
    
    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método
    
    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método
 
    function exercicio02($num1, $num2){
        if(($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10))
        {
            return "A média é: ".($num1+$num2)/2;
        }else{
            return "Informe notas entre 0 e 10!";
        }
    }//fim do método

    function exercicio03($num1, $num2){
        if ($num1 > $num2) {
            return $num1;
        } else if ($num1 < $num2) {
            return $num2;
        } else if($num1 == $num2){
            return "Numeros iguais.";
        }
    }//fim do método

    //ex04!
    function calcularMedia($nota1, $nota2, $nota3) {
    // Cálculo da média
     $media = ($nota1 + $nota2 + $nota3) / 3;
     $resultado = "Média: " . number_format($media, 2) . "\n";

        if ($media < 5) {
        $notaNecessaria = 10 - $media + 2;
        $resultado .= "Situação: Aluno em recuperação\n";
        $resultado .= "Nota necessária para passar: " . number_format($notaNecessaria, 2);
    } elseif ($media < 7) {
        $notaNecessaria = 10 - $media;
        $resultado .= "Situação: Aluno em prova final\n";
        $resultado .= "Nota necessária na prova final: " . number_format($notaNecessaria, 2);
    } else {
        $resultado .= "Situação: Aluno aprovado por média.";
    }

    return $resultado;
    }//fim do método
    
    function exercicio05($cor) {
        switch ($cor) {
            case 'verde':
                return "O preço do CD Verde é: R$10,00";
            case 'azul':
                return "O preço do CD Azul é: R$20,00";
            case 'amarelo':
                return "O preço do CD Amarelo é: R$30,00";
            case 'vermelho':
                return "O preço do CD Vermelho é: R$40,00";
            default:
                return "Cor inválida.";
        }
    }//fim do método
     
    //ex06!
    function calcularAntecessor($numero) {
        // Calcula o antecessor
        $antecessor = $numero - 1;
        return "O antecessor de $numero é $antecessor.";
    }//fim do método
       
    //ex07!
    function calcularAreaRetangulo($area,$base, $altura) {
    
    $area = $base * $altura;
    return "A área do retângulo com base $base e altura $altura é $area.";
    }//fim do método

    
    function exercicio08($brancos, $validos, $nulos, $eleitores){
        if (($brancos + $validos + $nulos) == $eleitores){
            $pbrancos = porcentagem($brancos,$eleitores);
            $pvalidos = porcentagem($validos,$eleitores);
            $pnulos = porcentagem($nulos,$eleitores);
            return "votos brancos: $pbrancos%\n
                    votos nulos: $pnulos%\n
                    votos validos: $pvalidos%";
        }else{
            return "total de eleitores é diferente do total";
        }
    }  //fim do método

    function porcentagem($total,$eleitores){
     return($total * 100)/$eleitores;
    } //fim do método
    
    //ex9!
    function calcularNovoSalario($salarioAtual, $percentualReajuste) {
        if (is_numeric($salarioAtual) && is_numeric($percentualReajuste) && $salarioAtual > 0 && $percentualReajuste >= 0) {
            
            $aumento = ($percentualReajuste / 100) * $salarioAtual;
            
            
            $novoSalario = $salarioAtual + $aumento;
            
            return $novoSalario;
        } else {
            return "Valores inválidos.";
        }
    } //fim do método 
   
    //ex10!
    function calcularCustoFinal($custoFabrica) {
        // Define as porcentagens
        $percentualDistribuidor = 0.28; // 28%
        $percentualImpostos = 0.45; // 45%
    
        
        $custoDistribuidor = $custoFabrica * $percentualDistribuidor;
        $custoImpostos = $custoFabrica * $percentualImpostos;
    
        //custo final
        $custoFinal = $custoFabrica + $custoDistribuidor + $custoImpostos;
    
        
        return "Custo Final ao Consumidor: R$ " . number_format($custoFinal, 2, ',', '.');
    }//fim do método
    
    //ex11!
    function calcularSalarioVendedor($num_carros, $valor_vendas, $salario_fixo, $comissao_carro) {
     $comissao_total = $num_carros * $comissao_carro;
     $comissao_percentual = 0.05 * $valor_vendas;

    
      $salario_final = $salario_fixo + $comissao_total + $comissao_percentual;
     return "Salário Final: R$ " . number_format($salario_final, 2, ',', '.');
}//fim do método

    //ex12!
    function calcularIdadeEmDias($anos, $meses, $dias) {

        $total_dias = ($anos * 365) + ($meses * 30) + $dias;
        return "Idade em Dias: " . $total_dias . " dias\n";
}//fim do método

    //ex13!
    function calcularCustoMacas($quantidade) {
        
        $preco_unidade_duzia = 1.30;
        $preco_unidade_12ouMais = 1.00;

        
        if ($quantidade < 12) {
            $custo_total = $quantidade * $preco_unidade_duzia;
            return "O preço de cada maçã é R$ 1,30.\nCusto total da compra: R$ " . number_format($custo_total, 2, ',', '.') . "\n";
        } else {
            $custo_total = $quantidade * $preco_unidade_12ouMais;
            return "O preço de cada maçã é R$ 1,00.\nCusto total da compra: R$ " . number_format($custo_total, 2, ',', '.') . "\n";
        }
    }//fim do método
    
    //ex14!
    function calcularSalarioVend($num_carros, $valor_vendas, $salario_fixo, $comissao_carro) {
        
        $comissao_carros = $num_carros * $comissao_carro;
        $comissao_vendas = 0.05 * $valor_vendas;
        
        $salario_total = $salario_fixo;
        $salario_total += $comissao_carros;
        $salario_total += $comissao_vendas;
    
       
        return "Salário total: R$ " . number_format($salario_total, 2, ',', '.');
    }//fim do método

    //ex15!
    function calcularSaldoCliente($numero_conta, $saldo, $debito, $credito) {

     $saldo_atual = $saldo - $debito + $credito;

     $resultado = "Número da conta: " . $numero_conta . "\n";
     $resultado .= "Saldo atual: R$ " . number_format($saldo_atual, 2, ',', '.') . "\n";

     if ($saldo_atual >= 0) {
        $resultado .= "Saldo positivo!";
     } else {
     }

    
     return ($resultado); 
}//fim do método

    //ex16!
    function gerarTabuada($numero) {
     $tabuada = "";

    
     for ($i = 1; $i <= 10; $i++) {
        $tabuada .= $numero . " x " . $i . " = " . ($numero * $i) . "\n";
     }

     return ($tabuada);
}//fim do método
    
    //ex17!
    function exibirValores($numero) {
     $valores = ""; 

    
     for ($i = 1; $i <= $numero; $i++) {
        $valores .= $i . "\n";
     }

     return ($valores);
}//fim do método

    //ex19!
    function contarNegativos($numeros) {
     $contador = 0;

    
     foreach ($numeros as $numero) {
        if ($numero < 0) {
            $contador++;
        }
     }

    
     return "Quantidade de números negativos: " . $contador;
}

    //ex19!
    function somarInferioresA40($numeros) {
     $soma = 0; 

     foreach ($numeros as $numero) {
        if ($numero < 40) {
            $soma += $numero;
        }
     }

    
     return "A soma dos números inferiores a 40 é: " . $soma;
}//fim do método

    //ex20!
    function calcularMediaAritmetica() {
     $soma = 0;
     $quantidade = 0;

    
     for ($i = 15; $i <= 100; $i++) {
        $soma += $i;
        $quantidade++;
     }

    
     $media = $soma / $quantidade;

    
     return "A média aritmética dos números entre 15 e 100 é: " . number_format($media, 2, ',', '.');
}//fim do método

?>

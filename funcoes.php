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
    }
    
   
    
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
    
    


    function calcularNovoSalario($salarioAtual, $percentualReajuste) {
        if (is_numeric($salarioAtual) && is_numeric($percentualReajuste) && $salarioAtual > 0 && $percentualReajuste >= 0) {
            
            $aumento = ($percentualReajuste / 100) * $salarioAtual;
            
            
            $novoSalario = $salarioAtual + $aumento;
            
            return $novoSalario;
        } else {
            return "Valores inválidos.";
        }
    }
?>

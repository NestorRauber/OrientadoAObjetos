<?php

require_once("modelo/Prova.php");
require_once("modelo/Trabalho.php");
require_once("modelo/Participacao.php");

$notas=[];


do {
    
    print "---------------Menu---------------\n\n";
    print "(1)-Adicionar nota prova\n";
    print "(2)-Adicionar nota trabalho\n";
    print "(3)-Adicionar nota participação\n";
    print "(4)-Consultar notas\n";
    print "(5)-Consultar média\n";
    print "(0)-sair\n";
    print "----------------------------------\n\n";
    $opcao = readline("Escolha uma opção: ");

    

    switch ($opcao) {
        case 1:
            $prova = new Prova();
            $prova->setNota(readline("Insira uma nota na prova: "));
            //$prova->getNotaFinal()
            array_push($notas, $prova);

            break;
        
        case 2:
            $trabalho = new Trabalho();
            $trabalho->setNota(readline("Insira uma nota ao trabalho: "));
            //$prova->getNotaFinal()
            array_push($notas, $trabalho);

            break;
        
        case 3:
            $participacao = new Participacao();
            $participacao->setNota(readline("Insira uma nota na participacao: "));
            //$prova->getNotaFinal()
            array_push($notas, $participacao);

            break;
        
        case 4:
            foreach ($notas as $n) {
                print $n->getNotaFinal() . "\n";
                
            }
            print "\n";
    
            break;
        
        case 5:
            $media = 0;
            foreach ($notas as $n) {
                $media = $media + $n->getNotaFinal();
            }
            print $media / count($notas) . "\n";

            break;
        
        default:
            print "Opção Inválida!\n";

            break;
    }


    
} while ($opcao != 0);


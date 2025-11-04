<?php

require_once("modelo/Restaurante.php");
require_once("modelo/Hotel.php");
require_once("modelo/PontoTuristico.php");

$espacos = [];

do {
    print "\n----- Menu -----\n";
    print "(1) Cadastrar Espaço\n";
    print "(2) Excluir Espaço\n";
    print "(3) Listar Espaços\n";
    print "(0) Sair\n";
    print "----------------\n";
    $opcao = readline("Escolha uma opção: \n");

    switch ($opcao) {
        case 1:
            system('clear');
            print "\nTipos de Espaços:\n";
            print "(1) Hotel\n";
            print "(2) Ponto Turístico\n";
            print "(3) Restaurante\n\n";
            $tipoEspaco = readline("Digite o tipo de espaço :\n");
            system('clear');

            switch ($tipoEspaco) {
                case 1:
                    $hotel = new Hotel();
                    $hotel->setNome(readline("Digite o nome do hotel: \n"));
                    $hotel->setEndereco(readline("Digite o endereço do hotel: \n"));
                    $hotel->setNumeroEstrelas(readline("Digite o número de estrelas do hotel: \n"));
                    $hotel->setCafeIncluso(readline("O café da manhã está incluso? \n"));

                    array_push($espacos, $hotel);

                    break;

                case 2:
                    $pontoTuristico = new PontoTuristico();
                    $pontoTuristico->setNome(readline("Digite o nome do ponto turístico: \n"));
                    $pontoTuristico->setEndereco(readline("Digite o endereço do ponto turístico: \n"));
                    $pontoTuristico->setDuracaoDaVisita(readline("Digite a duração média da visita (em horas): \n"));

                    array_push($espacos, $pontoTuristico);

                    break;

                case 3:
                    $restaurante = new Restaurante();
                    $restaurante->setNome(readline("Digite o nome do restaurante: \n"));
                    $restaurante->setEndereco(readline("Digite o endereço do restaurante: \n"));
                    $restaurante->setTipoComida(readline("Digite o tipo de comida oferecida: \n"));

                    array_push($espacos, $restaurante);

                    break;


                default:
                    print "Tipo de espaço inválido. Tente novamente.\n";
                    break;
            }

            break;

        case 2:
            system('clear');
            print "\n----- Espaços Disponíveis -----\n";
            for ($i = 0; $i < count($espacos); $i++) {
                print "(" . $i . ") " . $espacos[$i]->getNome() . "\n";
            }
            print "----------------------------\n";

            $indice = readline("Digite o número do espaço que deseja excluir: ");
            array_splice($espacos, $indice, 1);
            system('clear');
            break;

        case 3:
            system('clear');
            print "\n----- Espaços Cadastrados -----\n";
            foreach ($espacos as $e) {
                if ($e instanceof Hotel) {
                    print $e->getDadosHotel() . "\n";
                } else if ($e instanceof PontoTuristico) {
                    print $e->getDadosPontoTuristico() . "\n";
                } else if ($e instanceof Restaurante) {
                    print $e->getDadosRestaurante() . "\n";
                }
            }
            print "-------------------------------\n";
            break;

        case 0:
            break;

        default:
            print "Opção inválida. Tente novamente.\n";

            break;
    }
} while ($opcao != 0);

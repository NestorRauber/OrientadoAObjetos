<?php

require_once("Espaco.php");

class PontoTuristico extends Espaco
{

    private int $duracaoDaVisita;

    public function getDadosPontoTuristico() {

        $dados = "Ponto Turístico: " . $this->getNome() . "\n";
        $dados .= "Endereço: " . $this->getEndereco() . "\n";
        $dados .= "Duração da Visita: " . $this->getDuracaoDaVisita() . " horas\n";

        return $dados;
    }

    /**
     * Get the value of duracaoDaVisita
     */
    public function getDuracaoDaVisita(): int
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of duracaoDaVisita
     */
    public function setDuracaoDaVisita(int $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}

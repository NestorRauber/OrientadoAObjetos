<?php

require_once("Espaco.php");

class Hotel extends Espaco
{

    private int $numeroEstrelas;

    private bool $cafeIncluso;

    public function getDadosHotel() {
        $dados = "Hotel: " . $this->getNome() . "\n";
        $dados .= "Endereço: " . $this->getEndereco() . "\n";
        $dados .= "Número de Estrelas: " . $this->getNumeroEstrelas() . "\n";
        $dados .= "Café da Manhã Incluso: " . $this->CafeIncluso() . "\n";//qnt eu fiz os Gets e Sets ele colocou como isCafeIncluso, mas eu preferi deixar assim.


        return $dados;
    }

    /**
     * Get the value of numeroEstrelas
     */
    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    /**
     * Set the value of numeroEstrelas
     */
    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function CafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}

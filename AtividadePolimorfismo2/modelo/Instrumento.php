<?php

class Instrumento
{

    protected float $nota;

    public function getNotaFinal() {

    }



    /**
     * Get the value of nota
     */
    public function getNota(): float
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}

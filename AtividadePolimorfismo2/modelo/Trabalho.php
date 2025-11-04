<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento
{

    public function getNotaFinal()
    {
        $nota = $this->nota + (($this->nota * 20) / 100);
        if ($nota > 10) {
            return 10;
        } else {
            return $nota;
        }
    }
}

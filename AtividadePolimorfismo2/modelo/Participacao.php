<?php

require_once("Instrumento.php");

class Participacao extends Instrumento
{

    public function getNotaFinal() {
        $nota = $this->nota;
        return $nota;
    }
}

<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
   
    private $matr;
    private $curso;

    
    public function CancelarMatr() {
        echo "<p>Matricula será cancelada.</p>";
    }
    public function getMatr() {
        return $this->matr;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setMatr($matr) {
        $this->matr = $matr;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
}
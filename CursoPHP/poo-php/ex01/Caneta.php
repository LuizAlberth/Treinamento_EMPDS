<?php
class Caneta
{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<p>Erro! Caneta tampada, não posso rabiscar<p/>";
        } else {
            echo "<p>Estou rabiscando...<p/>";
        }
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($c)
    {
        $this->cor = $c;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($p)
    {
        $this->ponta = $p;
    }

    public function getCarga()
    {
        return $this->carga;
    }

    public function setCarga($c)
    {
        $this->carga = $c;
    }

    public function tampar()
    {
        $this->tampada == true;
    }

    public function destampar()
    {
        $this->tampada == false;
    }
}

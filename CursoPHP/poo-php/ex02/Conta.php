<?php
class Conta
{

    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($dono, $tipo)
    {
        $this->dono = $dono;
        $this->tipo = $tipo;
        $this->saldo = 0;
        $this->status = "Fechada";
    }

    public function abrirConta()
    {
        $this->status = "Aberta";
    }

    public function fecharConta()
    {
        $this->status = "Fechada";
    }

    public function depositar($valor)
    {
        if ($this->status == "Aberta") {
            if ($valor > 0) {
                $this->saldo += $valor;
                echo "<p>Depósito de R$ $valor realizado com sucesso na conta de $this->dono.</p>";
            } else {
                echo "<p>Erro: Valor de depósito inválido.</p>";
            }
        } else {
            echo "<p>Erro: Não é possível depositar em uma conta fechada.</p>";
        }
    }

    public function sacar($valor)
    {
        if ($this->status == "Aberta") {
            if ($valor <= $this->saldo && $valor > 0) {
                $this->saldo -= $valor;
                echo "<p>Saque de R$ $valor realizado com sucesso na conta de $this->dono.</p>";
            } else {
                echo "<p>Erro: Valor de saque inválido, saldo insuficiente.</p>";
            }
        } else {
            echo "<p>Erro: Não é possível sacar de uma conta fechada.</p>";
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
}

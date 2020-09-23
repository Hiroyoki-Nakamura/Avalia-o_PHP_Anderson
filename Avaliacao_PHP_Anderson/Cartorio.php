<?php
class Cartorio 
{
    private $certidoes;
    private $contratos;

    public function contratosGerados(Contrato $contrato)
    {
        $this->contratos[] = $contrato;
    }

    public function certidoesGeradas(Certidao $certidao)
    {
        $this->certidoes[] = $certidao;
    }

    public function listaCertidoes()
    {
        foreach($this->certidoes as $certidao)
        {
           $certidao->autenticarDocumento();
        }
    }

    public function listaContratos()
    {
        foreach($this->contratos as $contrato)
        {
           $contrato->autenticarDocumento();
        }
    }
}

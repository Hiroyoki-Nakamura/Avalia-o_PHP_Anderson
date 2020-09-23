<?php
abstract class Contrato extends Documento
{
    protected $nomeEnvolvido;
    protected $nomeTestemunha;
    protected $objetoContrato;
    protected $dataRegistro;

    public function __construct($numeroRegistro, $dataemissao, $nomeTabeliao, $nomeCartorio,
    $nomeEnvolvido, $nomeTestemunha, $objetoContrato, $dataRegistro)
    {
        parent::__construct($numeroRegistro, $dataemissao, $nomeTabeliao, $nomeCartorio);
        $this->nomeEnvolvido = $nomeEnvolvido;
        $this->nomeTestemunha = $nomeTestemunha;
        $this->objetoContrato = $objetoContrato;
        $this->dataRegistro = $dataRegistro;
    }

    public function getNomeEnvolvido()
    {
        $this->nomeEnvolvido;
    }

    public function getNomeTestemunha()
    {
        $this->nomeTestemunha;
    }

    public function getObjetoContrato()
    {
        $this->objetoContrato;
    }

    public function getDataRegistro()
    {
        $this->dataRegistro;
    }

    public function setNomeEnvolvido($nomeEnvolvido)
    {
        $this->nomeEnvolvido = $nomeEnvolvido;
    }

    public function setNomeTestemunha($nomeTestemunha)
    {
        $this->nomeTestemunha = $nomeTestemunha;
    }

    public function setObjetoContrato($objetoContrato)
    {
        $this->objetoContrato = $objetoContrato;
    }

    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
    }


}
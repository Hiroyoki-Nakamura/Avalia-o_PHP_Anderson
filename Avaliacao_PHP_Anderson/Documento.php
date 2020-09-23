<?php
abstract class Documento implements Autenticar
{
    protected $numeroRegistro;
    protected $dataEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;

    public function __construct($numeroRegistro, $dataEmissao, $nomeTabeliao, $nomeCartorio)
    {
        $this->numeroRegistro = $numeroRegistro;
        $this->dataEmissao = $dataEmissao;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }

    public function autenticarDocumento()
    {
        echo 'Documento autenticado.';
    }

    public function getNumeroRegistro()
    {
        $this->numeroRegistro;
    }

    public function getDataEmissao()
    {
        $this->dataEmissao;
    }

    public function getNomeTabeliao()
    {
        $this->nomeTabeliao;
    }

    public function getNomeCartorio()
    {
        $this->nomeCartorio;
    }

    public function setNumeroRegistro($numeroRegistro)
    {
        $this->numeroRegistro = $numeroRegistro;
    }

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    public function setNomeTabeliao($nomeTabeliao)
    {
        $this->nomeTabeliao = $nomeTabeliao;
    }

    public function setNomeCartorio($nomeCartorio)
    {
        $this->nomeCartorio = $nomeCartorio;
    }

}
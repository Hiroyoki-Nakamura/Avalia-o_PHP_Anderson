<?php
abstract class Certidao extends Documento
{
    protected $nome;
    protected $nomeDeclarante;
    protected $tipoCertidao;
    

    public function __construct($numeroRegistro, $dataemissao, $nomeTabeliao, $nomeCartorio,
    $nome, $nomeDeclarante, $tipoCertidao)
    {
        parent::__construct($numeroRegistro, $dataemissao, $nomeTabeliao, $nomeCartorio);
        $this->nome = $nome;
        $this->nomeDeclarante = $nomeDeclarante;
        $this->tipoCertidao = $tipoCertidao;
    }

    public function getNome()
    {
        $this->nome;
    }

    public function getNomeDeclarante()
    {
        $this->nomeDeclarante;
    }

    public function getTipoCertidao()
    {
        $this->tipoCertidao;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNomeDeclarante($nomeDeclarante)
    {
        $this->nomeDeclarante = $nomeDeclarante;
    }

    public function setNomeEnvolvido($tipoCertidao)
    {
        $this->tipoCertidao = $tipoCertidao;
    }

}
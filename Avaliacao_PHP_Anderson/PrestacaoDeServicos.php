<?php
final class PrestacaoServicos extends Contrato implements Autenticar
{
    public function autenticarDocumento()
    {
        echo 'Prestacao de serviço autorizada';
    }
}

<?php

namespace App\Services\PesquisaPreco\Endpoints;
use App\Services\PesquisaPreco;

class Parametros
{
    private PesquisaPreco $service;
    public function __construct()
    {
        $this->service = new PesquisaPreco();
    }

    public function get(){
        return $this->service
        ->api
        ->get('pagina=1&tamanhoPagina=10&codigoItemCatalogo=606536');
    }
}

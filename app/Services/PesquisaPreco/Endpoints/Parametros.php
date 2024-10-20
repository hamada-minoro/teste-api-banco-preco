<?php

namespace App\Services\PesquisaPreco\Endpoints;
use App\Services\PesquisaPreco;
//use Illuminate\Database\Eloquent\Collection;
use App\Services\PesquisaPreco\Entities\Parametro;
use Illuminate\Support\Collection;

class Parametros
{
    private PesquisaPreco $service;
    public function __construct()
    {
        $this->service = new PesquisaPreco();
    }

    public function get(){
        return $this->transform( 
        $this->service
        ->api
        ->get('/1_consultarMaterial?pagina=1&tamanhoPagina=100&codigoItemCatalogo=606536')
        ->json('resultado')
        );
    }
    private function transform(mixed $json): Collection
    {
        return collect($json)
        ->map(fn ($parametro) => new Parametro($parametro));
    }

}

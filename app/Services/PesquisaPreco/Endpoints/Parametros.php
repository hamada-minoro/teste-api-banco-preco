<?php

namespace App\Services\PesquisaPreco\Endpoints;

use App\Services\PesquisaPreco;
use App\Services\PesquisaPreco\Entities\Parametro;
use Illuminate\Support\Collection;

class Parametros
{
    private PesquisaPreco $service;

    public function __construct()
    {
        $this->service = new PesquisaPreco();
    }

    // Método para aceitar parâmetros dinâmicos
    public function get(int $pagina = 1, int $tamanhoPagina = 100, string $codigoItemCatalogo = '')
    {
        $url = sprintf(
            '/1_consultarMaterial?pagina=%d&tamanhoPagina=%d&codigoItemCatalogo=%s',
            $pagina,
            $tamanhoPagina,
            $codigoItemCatalogo
        );

        return $this->transform(
            $this->service->api->get($url)->json('resultado')
        );
    }

    private function transform(mixed $json): Collection
    {
        return collect($json)
            ->map(fn ($parametro) => new Parametro($parametro));
    }
}


/* 
Exemplo de uso
$parametros = new Parametros();
$resultado = $parametros->get(2, 50, '123456');
*/
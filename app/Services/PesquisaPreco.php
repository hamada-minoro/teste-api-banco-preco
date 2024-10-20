<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use App\Services\PesquisaPreco\Endpoints\HasParametros;


/**
 * API de Pesquisa de Preços
 * https://documenter.getpostman.com/view/13166820/2sA3XJjPpR#intro
 * https://dadosabertos.compras.gov.br/swagger-ui/index.html#/
 */

class PesquisaPreco
{
    use HasParametros;
    public $api;
    public function __construct()
    {
        $this->api = Http::timeout(180)->baseUrl('https://dadosabertos.compras.gov.br/modulo-pesquisa-preco');
    }
}


/*public function consultar(Request $request)
    {
        $request->validate([
            'codigo_item_catalogo' => 'required|string',
            'tipo_item' => 'required|string',
            'estado' => 'required|string',
            'pagina' => 'required|integer|min:1',
            'tamanho_pagina' => 'required|integer|min:10',
        ]);

        $url = $request->tipo_item === 'Material'
            ? 'https://dadosabertos.compras.gov.br/modulo-pesquisa-preco/1_consultarMaterial'
            : 'https://dadosabertos.compras.gov.br/modulo-pesquisa-preco/3_consultarServico';

        $response = Http::get($url, [
            'pagina' => $request->pagina,
            'tamanhoPagina' => $request->tamanho_pagina,
            'codigoItemCatalogo' => $request->codigo_item_catalogo,
            'estado' => $request->estado === 'Todos' ? null : $request->estado,
        ]);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json(['error' => 'Erro na consulta: ' . $response->status()], 500);
        }
    } */
   
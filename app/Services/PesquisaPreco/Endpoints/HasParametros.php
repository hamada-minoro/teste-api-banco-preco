<?php

namespace App\Services\PesquisaPreco\Endpoints;

trait HasParametros
{
    public function parametros(){
        return new Parametros();
    }
}

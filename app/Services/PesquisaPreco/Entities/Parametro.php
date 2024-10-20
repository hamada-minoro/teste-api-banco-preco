<?php

namespace App\Services\PesquisaPreco\Entities;

class Parametro
{

    public int $idCompra;
    public string $forma;
    public int $modalidade;
    public string $descricaoItem;
    // public string $nomeUnidadeMedida;
    public string $nomeUnidadeFornecimento;
    public int $quantidade;
    public float $precoUnitario;
    public float $percentualMaiorDesconto;
    public int $niFornecedor;
    public string $nomeFornecedor;
    public string $marca;
    public int $codigoUasg;
    public string $nomeUasg;
    public string $municipio;
    public string $estado;
    public string $dataCompra;




    public function __construct(array $resultado)
    {
        $this->idCompra = data_get($resultado,'idCompra');
        $this->forma = data_get($resultado,'forma');
        $this->modalidade = data_get($resultado,'modalidade');
        $this->descricaoItem = data_get($resultado,'descricaoItem');
        // $this->nomeUnidadeMedida = data_get($resultado,'nomeUnidadeMedida');
        $this->nomeUnidadeFornecimento = data_get($resultado,'nomeUnidadeFornecimento');
        $this->quantidade = data_get($resultado,'quantidade');
        $this->precoUnitario = data_get($resultado,'precoUnitario');
        $this->percentualMaiorDesconto = data_get($resultado,'percentualMaiorDesconto');
        $this->niFornecedor = data_get($resultado,'niFornecedor');
        $this->nomeFornecedor = data_get($resultado,'nomeFornecedor');
        $this->marca = data_get($resultado,'marca');
        $this->codigoUasg = data_get($resultado,'codigoUasg');
        $this->nomeUasg = data_get($resultado,'nomeUasg');
        $this->municipio = data_get($resultado,'municipio');
        $this->estado = data_get($resultado,'estado');
        $this->dataCompra = data_get($resultado,'dataCompra');
        
    }
}



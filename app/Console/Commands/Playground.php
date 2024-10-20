<?php

namespace App\Console\Commands;
use App\Services\PesquisaPreco\Entities\Parametro;
use App\Services\PesquisaPreco\Endpoints\Parametros;
use App\Services\PesquisaPreco;
use Http;
use Illuminate\Console\Command;

class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Playground command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $service = new PesquisaPreco() ;
        $json = $service
        ->parametros()
        ->get();
        // $this->info($return->body());
        // $json = $return->json();
        /** @var Parametro $parametro */
        foreach ($json as $parametro) {
            ds($parametro->nomeFornecedor);
        }



        return Command::SUCCESS;
    }
}
// 30:21
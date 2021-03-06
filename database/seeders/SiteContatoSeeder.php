<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(11) 1111-1111';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = '1';
        $contato->mensagem = 'Seja bem-vindo ao sistema super gestão';
        $contato->save(); */

        \App\Models\SiteContato::factory(100)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // $contato = new SiteContato();
        // $contato->nome = 'Sistema 5G';
        // $contato->telefone = '(27) 99999-8888';
        // $contato->email = 'contato@5g.com.br';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Seja ben-vindo ao sistema Super Gestão';
        // $contato->save();

        // SiteContato::factory(100)->create();
        // SiteContato::factory()->count(100)->create();

        SiteContatoFactory::new()->count(100)->create();
    }
}

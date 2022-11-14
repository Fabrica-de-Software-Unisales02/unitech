<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projeto;

class ProjetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projeto = Projeto::insert([
            [
                'titulo' => 'Website',
                'descricao' => 'O nosso Website foi produzido "em casa", aqui você encontrará informações de como ele foi conduzido. Caso queira apoio para fazer o seu, ou informações sobre este trabalho, só entrar em contato!',
                'area' => 1
            ],
            [
                'titulo' => 'Agendamento de Laboratorio e Notebook',
                'descricao' => '...',
                'area' => 1
            ],
            [
                'titulo' => 'Software Bicicletário',
                'descricao' => 'Software livre para controle de acesso a bicicletários. Contribuição do Unitech para ambientes que precisam deste controle.
                Fliperama - Trabalho interdisciplinar sendo conduzido para testes utilizando arduíno, raspberry e programação. Vai ajudar na aplicação de técnicas e conceitos aprendidos em sala de aula... e para diversão!',
                'area' => 1
            ],
            [
                'titulo' => 'BioIndica',
                'descricao' => 'Projeto que está sendo conduzido de forma intercurso - Cursos de Tecnologia da Informação e das Ciências Biológicas para um cliente especial o IEMA. O Sistema consiste em um apoio tecnológico para monitoramento e acompanhamento de espécimes no parque Paulo César Vinha - importante monitoramento do meio ambiente conduzido de forma aplicada neste interessante estudo aplicado. Mais informações sobre o projeto, só entrar em contato!',
                'area' => 1
            ],
            [
                'titulo' => 'Ensalamento',
                'descricao' => '...',
                'area' => 1
            ],
            [
                'titulo' => 'Fresadora com furadeira - Madeira',
                'descricao' => '...',
                'area' => 1
            ],
            [
                'titulo' => 'Fliperama',
                'descricao' => '...',
                'area' => 1
            ],
            [
                'titulo' => 'Óculos 3D',
                'descricao' => '...',
                'area' => 1
            ],
            [
                'titulo' => 'Psicologia',
                'descricao' => '...',
                'area' => 1
            ],
            [
                'titulo' => 'Quiz acadêmico',
                'descricao' => 'uma contribuição do Unitech para o curso de Psicologia, para aumentar o engajamento em eventos que participam e para uso em sala de aula.',
                'area' => 1
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Mixdinternet\Cities\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('states')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $states = [
            ['id' => 1, 'abbrev' => 'AC', 'name' => 'Acre', 'slug' => 'acre'],
            ['id' => 2, 'abbrev' => 'AL', 'name' => 'Alagoas', 'slug' => 'alagoas'],
            ['id' => 3, 'abbrev' => 'AM', 'name' => 'Amazonas', 'slug' => 'amazonas'],
            ['id' => 4, 'abbrev' => 'AP', 'name' => 'Amapá', 'slug' => 'amapa'],
            ['id' => 5, 'abbrev' => 'BA', 'name' => 'Bahia', 'slug' => 'bahia'],
            ['id' => 6, 'abbrev' => 'CE', 'name' => 'Ceará', 'slug' => 'ceara'],
            ['id' => 7, 'abbrev' => 'DF', 'name' => 'Distrito Federal', 'slug' => 'distrito-federal'],
            ['id' => 8, 'abbrev' => 'ES', 'name' => 'Espírito Santo', 'slug' => 'espirito-santo'],
            ['id' => 9, 'abbrev' => 'GO', 'name' => 'Goiás', 'slug' => 'goias'],
            ['id' => 10, 'abbrev' => 'MA', 'name' => 'Maranhão', 'slug' => 'maranhao'],
            ['id' => 11, 'abbrev' => 'MG', 'name' => 'Minas Gerais', 'slug' => 'minas-gerais'],
            ['id' => 12, 'abbrev' => 'MS', 'name' => 'Mato Grosso do Sul', 'slug' => 'mato-grosso-do-sul'],
            ['id' => 13, 'abbrev' => 'MT', 'name' => 'Mato Grosso', 'slug' => 'mato-grosso'],
            ['id' => 14, 'abbrev' => 'PA', 'name' => 'Pará', 'slug' => 'para'],
            ['id' => 15, 'abbrev' => 'PB', 'name' => 'Paraíba', 'slug' => 'paraiba'],
            ['id' => 16, 'abbrev' => 'PE', 'name' => 'Pernambuco', 'slug' => 'pernambuco'],
            ['id' => 17, 'abbrev' => 'PI', 'name' => 'Piauí', 'slug' => 'piaui'],
            ['id' => 18, 'abbrev' => 'PR', 'name' => 'Paraná', 'slug' => 'parana'],
            ['id' => 19, 'abbrev' => 'RJ', 'name' => 'Rio de Janeiro', 'slug' => 'rio-de-janeiro'],
            ['id' => 20, 'abbrev' => 'RN', 'name' => 'Rio Grande do Norte', 'slug' => 'rio-grande-do-norte'],
            ['id' => 21, 'abbrev' => 'RO', 'name' => 'Rondônia', 'slug' => 'rondonia'],
            ['id' => 22, 'abbrev' => 'RR', 'name' => 'Roraima', 'slug' => 'roraima'],
            ['id' => 23, 'abbrev' => 'RS', 'name' => 'Rio Grande do Sul', 'slug' => 'rio-grande-do-sul'],
            ['id' => 24, 'abbrev' => 'SC', 'name' => 'Santa Catarina', 'slug' => 'santa-catarina'],
            ['id' => 25, 'abbrev' => 'SE', 'name' => 'Sergipe', 'slug' => 'sergipe'],
            ['id' => 26, 'abbrev' => 'SP', 'name' => 'São Paulo', 'slug' => 'sao-paulo'],
            ['id' => 27, 'abbrev' => 'TO', 'name' => 'Tocantins', 'slug' => 'tocantins']
        ];

        foreach ($states as $state) {
            $this->command->info('Inserindo estado de ' . $state['name'] . '.');
            State::create($state);
        }
    }
}

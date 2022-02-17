<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class statesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            [
                'id' => 1,
                'name' => 'Rondônia',
                'initials' => 'RO'
            ],
            [
                'id' => 2,
                'name' => 'Acre',
                'initials' => 'AC'
            ],
            [
                'id' => 3,
                'name' => 'Amazonas',
                'initials' => 'AM'
            ],
            [
                'id' => 4,
                'name' => 'Roraima',
                'initials' => 'RR'
            ],
            [
                'id' => 5,
                'name' => 'Pará',
                'initials' => 'PA'
            ],
            [
                'id' => 6,
                'name' => 'Amapá',
                'initials' => 'AP'
            ],
            [
                'id' => 7,
                'name' => 'Tocantins',
                'initials' => 'TO'
            ],
            [
                'id' => 8,
                'name' => 'Maranhão',
                'initials' => 'MA'
            ],
            [
                'id' => 9,
                'name' => 'Piauí',
                'initials' => 'PI'
            ],
            [
                'id' => 10,
                'name' => 'Ceará',
                'initials' => 'CE'
            ],
            [
                'id' => 11,
                'name' => 'Rio Grande do Norte',
                'initials' => 'RN'
            ],
            [
                'id' => 12,
                'name' => 'Paraíba',
                'initials' => 'PB'
            ],
            [
                'id' => 13,
                'name' => 'Pernambuco',
                'initials' => 'PE'
            ],
            [
                'id' => 14,
                'name' => 'Alagoas',
                'initials' => 'AL'
            ],
            [
                'id' => 15,
                'name' => 'Sergipe',
                'initials' => 'SE'
            ],
            [
                'id' => 16,
                'name' => 'Bahia',
                'initials' => 'BA'
            ],
            [
                'id' => 17,
                'name' => 'Minas Gerais',
                'initials' => 'MG'
            ],
            [
                'id' => 18,
                'name' => 'Espírito Santo',
                'initials' => 'ES'
            ],
            [
                'id' => 19,
                'name' => 'Rio de Janeiro',
                'initials' => 'RJ'
            ],
            [
                'id' => 20,
                'name' => 'São Paulo',
                'initials' => 'SP'
            ],
            [
                'id' => 21,
                'name' => 'Paraná',
                'initials' => 'PR'
            ],
            [
                'id' => 22,
                'name' => 'Santa Catarina',
                'initials' => 'SC'
            ],
            [
                'id' => 23,
                'name' => 'Rio Grande do Sul',
                'initials' => 'RS'
            ],
            [
                'id' => 24,
                'name' => 'Mato Grosso do Sul',
                'initials' => 'MS'
            ],
            [
                'id' => 25,
                'name' => 'Mato Grosso',
                'initials' => 'MT'
            ],
            [
                'id' => 26,
                'name' => 'Goiás',
                'initials' => 'GO'
            ],
            [
                'id' => 27,
                'name' => 'Distrito Federal',
                'initials' => 'DF'
            ]
        ]);
    }
}

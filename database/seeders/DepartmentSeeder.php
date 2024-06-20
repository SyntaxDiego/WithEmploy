<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'AMAZONAS',
                'country_id' => '1',
            ],
            [
                'name' => 'ANTIOQUIA',
                'country_id' => '1',
            ],
            [
                'name' => 'ARAUCA',
                'country_id' => '1',
            ],
            [
                'name' => 'ATLANTICO',
                'country_id' => '1',
            ],
            [
                'name' => 'BOLIVAR',
                'country_id' => '1',
            ],
            [
                'name' => 'BOYACA',
                'country_id' => '1',
            ],
            [
                'name' => 'CALDAS',
                'country_id' => '1',
            ],
            [
                'name' => 'CAQUETA',
                'country_id' => '1',
            ],
            [
                'name' => 'CASANARE',
                'country_id' => '1',
            ],
            [
                'name' => 'CAUCA',
                'country_id' => '1',
            ],
            [
                'name' => 'CESAR',
                'country_id' => '1',
            ],
            [
                'name' => 'CHOCO',
                'country_id' => '1',
            ],
            [
                'name' => 'CORDOBA',
                'country_id' => '1',
            ],
            [
                'name' => 'CUNDINAMARCA',
                'country_id' => '1',
            ],
            [
                'name' => 'GUAINIA',
                'country_id' => '1',
            ],
            [
                'name' => 'GUAVIARE',
                'country_id' => '1',
            ],
            [
                'name' => 'HUILA',
                'country_id' => '1',
            ],
            [
                'name' => 'LA GUAJIRA',
                'country_id' => '1',
            ],
            [
                'name' => 'MAGDALENA',
                'country_id' => '1',
            ],
            [
                'name' => 'META',
                'country_id' => '1',
            ],
            [
                'name' => 'NARIÑO',
                'country_id' => '1',
            ],
            [
                'name' => 'NORTE DE SANTANDER',
                'country_id' => '1',
            ],
            [
                'name' => 'PUTUMAYO',
                'country_id' => '1',
            ],
            [
                'name' => 'QUINDIO',
                'country_id' => '1',
            ],
            [
                'name' => 'RISARALDA',
                'country_id' => '1',
            ],
            [
                'name' => 'SAN ANDRES Y PROVIDENCIA',
                'country_id' => '1',
            ],
            [
                'name' => 'SANTANDER',
                'country_id' => '1',
            ],
            [
                'name' => 'SUCRE',
                'country_id' => '1',
            ],
            [
                'name' => 'TOLIMA',
                'country_id' => '1',
            ],
            [
                'name' => 'VALLE DEL CAUCA',
                'country_id' => '1',
            ],
            [
                'name' => 'VAUPES',
                'country_id' => '1',
            ],
            [
                'name' => 'VICHADA',
                'country_id' => '1',
            ],
        ];
        Department::insert($departments);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'code'=>'COL',
                'name'=>'COLOMBIA',
                'continent'=>'AMERICA',
            ],
            [
                'code'=>'ARG',
                'name'=>'ARGENTINA',
                'continent'=>'AMERICA',
            ],
            [
                'code'=>'VEN',
                'name'=>'VENEZUELA',
                'continent'=>'AMERICA',
            ],
        ];
        Country::insert($countries);
    }
}

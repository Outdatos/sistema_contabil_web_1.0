<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompetenciaMes;

class CompetenciaMesSeeder extends Seeder
{
    public function run(): void
    {
        $months = [
            'Janeiro' => 'JAN', 'Fevereiro' => 'FEV', 'Março' => 'MAR', 'Abril' => 'ABR',
            'Maio' => 'MAI', 'Junho' => 'JUN', 'Julho' => 'JUL', 'Agosto' => 'AGO',
            'Setembro' => 'SET', 'Outubro' => 'OUT', 'Novembro' => 'NOV', 'Dezembro' => 'DEZ'
        ];

        foreach ($months as $month => $abrev) {
            CompetenciaMes::create([
                'id' => count(CompetenciaMes::all()) + 1,
                'mes' => $month,
                'mes_abrev' => $abrev
            ]);
        }
    }
}

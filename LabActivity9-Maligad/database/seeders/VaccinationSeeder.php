<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'patient_name' => 'Trixia Maligad',
                'purok' => 'Purok 1',
                'vaccine' => 'BCG',
                'dose' => '1st dose',
                'scheduled_at' => '2026-09-16',
                'status' => 'Scheduled',
            ],
            [
                'patient_name' => 'Lyann Mitra',
                'purok' => 'Purok 2',
                'vaccine' => 'Pentavalent',
                'dose' => '2nd dose',
                'scheduled_at' => '2026-09-03',
                'status' => 'Done',
            ],
            [
                'patient_name' => 'Bea Arquiza',
                'purok' => 'Purok 3',
                'vaccine' => 'OPV',
                'dose' => '1st dose',
                'scheduled_at' => '2026-08-19',
                'status' => 'Scheduled',
            ],
            [
                'patient_name' => 'Iris Cadigal',
                'purok' => 'Purok 4',
                'vaccine' => 'MMR',
                'dose' => '1st dose',
                'scheduled_at' => '2026-04-05',
                'status' => 'Overdue',
            ],
            [
                'patient_name' => 'Cherish Rivas',
                'purok' => 'Purok 5',
                'vaccine' => 'Anti-Flu',
                'dose' => 'Annual',
                'scheduled_at' => '2026-12-29',
                'status' => 'Scheduled',
            ],
            [
                'patient_name' => 'Darrene Domingo',
                'purok' => 'Purok 6',
                'vaccine' => 'Anti-Rabies',
                'dose' => '1st dose',
                'scheduled_at' => '2026-01-05',
                'status' => 'Done',
            ],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}

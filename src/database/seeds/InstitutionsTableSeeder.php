<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutions = [
            [
                'name' => 'Maternitatea Bucur Spitalul Sf. Ioan',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Maternitatea Giulesti',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Maternitatea Polizu',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Maternitatea Caritas',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul de Obstetrică-Ginecologie și Pediatrie Brașov',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul clinic CFR 2',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul Elias',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul Sf. Pantelimon',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul clinic Dr. I. Cantacuzino',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul Clinic Filantropia',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
            [
                'name' => 'Spitalul Clinic de Obstetrica-Ginecologie "Cuza Voda" Iasi',
                'created_at' => '2016-11-27 00:00:00',
                'updated_at' => '2016-11-27 00:00:00',
            ],
        ];

        DB::table('institutions')->insert($institutions);
    }
}

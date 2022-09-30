<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('days')->insert([

            [
                'day' => 'senin',
            ],
            [
                'day' => 'selasa',
            ],
            [
                'day' => 'rabu',
            ],
            [
                'day' => 'kamis',
            ],
            [
                'day' => 'jumat',
            ],
            [
                'day' => 'sabtu',
            ],
            [
                'day' => 'minggu',
            ],


        ]);
    }
}

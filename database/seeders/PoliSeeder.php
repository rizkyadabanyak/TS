<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Poli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=4;$i++){
            $data = new Poli();

            $data->name = 'ini poli yang ke ' .$i;
            $data->save();
        }
    }
}

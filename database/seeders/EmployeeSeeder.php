<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1;$i<=10;$i++){
            $data = new Employee();

            $data->name = 'ini employee ke ' .$i;
            $data->save();

        }

    }
}

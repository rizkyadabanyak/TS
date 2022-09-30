<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    public function employeePoli(){
        return $this->hasMany(EmployeePoli::class)->with(['employees','schedules']);
    }
}

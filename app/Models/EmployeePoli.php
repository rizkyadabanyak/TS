<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePoli extends Model
{
    use HasFactory;

    public function employees(){
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function schedules(){
        return $this->hasMany(Schedule::class)->orderBy('day_id','ASC');
    }
}

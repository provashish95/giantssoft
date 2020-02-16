<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_name',
    ];
    public function student(){
        return $this->hasMany(Student::class);
    }
}

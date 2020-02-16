<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'department_id', 'name', 'roll','email','phone','address',
    ];
    public function department(){
        return $this->belongsTo(Department::class);
    }
}

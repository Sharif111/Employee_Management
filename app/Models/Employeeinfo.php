<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeeinfo extends Model
{
    use HasFactory;
    protected $table = 'employeeinfos';
    public $timestamps = true;

    

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email'
        
    ];
}

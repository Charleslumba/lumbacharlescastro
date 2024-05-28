<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    protected $table = 'employees_tbl'; // Ensure the table name matches your database
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'phone',
    ];
}

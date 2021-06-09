<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dianose extends Model
{
    use HasFactory;
    protected $table = "dianoses";

    protected $fillable = ['cust_name', 'symptom', 'cust_dob', 'cust_gender', 'phone', 'cust_email', 'cust_address', 'time_sym', 'result'];
}

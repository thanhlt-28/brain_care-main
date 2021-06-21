<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $table = "prescription";
    protected $fillable = ['CustID', 'Name', 'Amount', 'Type', 'Grouptype', 'Merket', 'Begin', 'Treatment', 'Company', 'National'];
}

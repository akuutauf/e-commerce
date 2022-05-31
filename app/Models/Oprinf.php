<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oprinf extends Model
{
    use HasFactory;
    protected $table = 'oprinfs';
    protected $primaryKey = 'PrID';
    public $timestamps = false;
}

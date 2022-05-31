<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itm1 extends Model
{
    use HasFactory;
    protected $table = 'itm1s';
    protected $primaryKey = 'DocEntry';
    public $timestamps = false;
}

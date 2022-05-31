<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owbev extends Model
{
    use HasFactory;
    protected $table = 'owbevs';
    protected $primaryKey = 'EventID';
    public $incrementing = false;
}

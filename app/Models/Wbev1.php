<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wbev1 extends Model
{
    use HasFactory;
    protected $table = 'wbev1s';
    protected $primaryKey = 'IDGallery';
    public $incrementing = false;
}

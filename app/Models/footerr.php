<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footerr extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'label', 'value', 'type'];

}

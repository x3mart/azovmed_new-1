<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    use HasFactory;

    protected $fillable =[
        'wb_indexText17',
        'wb_indexText18',
        'wb_indexText19',
        'wb_indexText20',
        'wb_indexText21',
        'wb_indexText22',
    ];
}

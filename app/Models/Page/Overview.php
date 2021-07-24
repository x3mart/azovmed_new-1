<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    use HasFactory;

    protected $fillable =[
        'wb_indexText7',
        'wb_indexText2',
        'wb_indexText10',
        'wb_indexText9',
        'wb_indexText6_digit',
        'wb_indexText6_text',
        'wb_indexText11',
        'wb_indexText55',
        'wb_indexText56',
        'wb_indexText57',
        'wb_indexText12',
        'wb_indexText13',
        'wb_indexText59',
    ];
}

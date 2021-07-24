<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'wb_indexText5_main_phone',
        'wb_indexText5_email',
        'wb_indexText5_text',
        'wb_indexText3',
        'wb_indexText4'
    ];
}

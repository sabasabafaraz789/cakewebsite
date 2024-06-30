<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;


    protected $table = 'menu_items';

    protected $fillable = ['name', 'image', 'price', 'description'];
}

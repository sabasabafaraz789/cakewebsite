<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus'; // Specify the table name if it differs from the default

    protected $fillable = ['name', 'price', 'description', 'image']; // Specify the fillable fields
}

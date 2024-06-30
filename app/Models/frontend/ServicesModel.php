<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $table = 'services';
    protected $fillable = ['name', 'phonenumber', 'flavours', 'youraddress'];
}

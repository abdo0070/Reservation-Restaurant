<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Table extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'guest_number' , 'status' , 'locatoin'];

    /*
    protected $status = [
        'res_date'
    ];*/

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'second_name',
        'phone',
        'email',
        'guest_number',
        'res_date',
        'table_id'
    ];
    
    protected $dates = [
        'res_date'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}

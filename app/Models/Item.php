<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'pic',
        'from',
        'status',
        'description',
        'type'
    ];

    public function itemOfStudent()
    {
        return $this->belongsTo(Student::class);
    }
}

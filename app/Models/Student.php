<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password'
    ];

    protected $created_at = false;
    protected $updated_at = false;

    public function studentItems()
    {
        return $this->hasMany(Item::class);
    }
}

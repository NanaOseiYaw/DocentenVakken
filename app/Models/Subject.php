<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects'; // Zorg dat Laravel de juiste tabel gebruikt

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
